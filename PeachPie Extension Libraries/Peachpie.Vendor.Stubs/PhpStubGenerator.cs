using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Reflection;
using System.Text;

namespace Peachpie.Vendor.Stubs;

public static class PhpStubGenerator
{
    // Конструкторы выключены, чтобы IDE не требовала parent::__construct()
    private const bool EMIT_CONSTRUCTORS = false;

    public static void GenerateAssembly(Assembly asm, string outRoot, bool recurseExternal, XmlDocProvider? docs)
    {
        var visited = new HashSet<string>(StringComparer.Ordinal);

        var types = asm.GetTypes()
            .Where(IsPubliclyVisible)
            .Where(t => !t.IsGenericTypeDefinition && !t.ContainsGenericParameters)
            .ToArray();

        if (recurseExternal)
        {
            foreach (var t in types)
                GenerateHierarchyInternal(t, outRoot, visited, includeExternal: true, docs);
        }
        else
        {
            foreach (var t in types)
            {
                var key = t.FullName ?? t.Name;
                if (!visited.Add(key)) continue;
                WriteTypeStub(t, outRoot, docs);
            }
        }
    }

    static void GenerateHierarchyInternal(Type root, string outRoot, HashSet<string> visited, bool includeExternal, XmlDocProvider? docs)
    {
        void Recurse(Type t)
        {
            var key = t.FullName ?? t.Name;
            if (!visited.Add(key)) return;

            if (!t.IsGenericTypeDefinition && !t.ContainsGenericParameters)
                WriteTypeStub(t, outRoot, docs);

            var bt = AcceptableBase(t);
            if (bt != null && (includeExternal || bt.Assembly == root.Assembly))
                Recurse(bt);

            foreach (var it in DirectInterfaces(t).Where(IsAcceptableType))
                if (includeExternal || it.Assembly == root.Assembly)
                    Recurse(it);
        }
        Recurse(root);
    }

    static void WriteTypeStub(Type t, string outRoot, XmlDocProvider? docs)
    {
        var php = Generate(t, docs);

        var (nsPath, fileName) = GetPathParts(t);
        var targetDir = Path.Combine(outRoot, nsPath);
        Directory.CreateDirectory(targetDir);
        var targetFile = Path.Combine(targetDir, fileName + ".php");

        File.WriteAllText(targetFile, php, new UTF8Encoding(false));
        Console.WriteLine($"  • {targetFile}");
    }

    public static string Generate(Type t, XmlDocProvider? docs)
    {
        var sb = new StringBuilder();
        sb.AppendLine("<?php");
        sb.AppendLine("declare(strict_types=1);");
        sb.AppendLine();

        // === 1) ШАПКА ФАЙЛА — ПЕРЕД namespace ===
        sb.AppendLine(BuildFileHeader(t, docs));
        sb.AppendLine();

        // === 2) namespace
        var phpNs = ToPhpNamespace(t.Namespace);
        if (!string.IsNullOrEmpty(phpNs))
        {
            sb.AppendLine($"namespace {phpNs};");
            sb.AppendLine();
        }

        var phpClassName = ToPhpIdentifier(StripGenericTick(t.Name).Replace('+', '\\'));

        // === 3) ДОКБЛОК ТИПА (summary + @property/@property-read/@property-write + события как @property ClrEvent)
        sb.AppendLine(BuildTypeDocBlock(t, docs));

        if (t.IsEnum)
        {
            sb.AppendLine($"class {phpClassName}");
            sb.AppendLine("{");
            var names = Enum.GetNames(t);
            var values = Enum.GetValues(t);
            for (int i = 0; i < names.Length; i++)
            {
                var name = ToPhpIdentifier(names[i]);
                var value = Convert.ToInt64(values.GetValue(i)!);
                // Оставим типизированную константу (PHP 8.3+); для максимальной совместимости можно заменить на /** @var int */ public const NAME = ...
                sb.AppendLine($"    public const int {name} = {value};");
            }
            sb.AppendLine("}");
            return sb.ToString();
        }

        var isInterface = t.IsInterface;
        var isAbstract = t.IsAbstract && !isInterface;
        var kind = isInterface ? "interface" : (isAbstract ? "abstract class" : "class");

        // extends / implements
        string extendsPart = "";
        string implementsPart = "";

        if (isInterface)
        {
            var parents = DirectInterfaces(t).Where(IsAcceptableType).Select(MapPhpFqn).ToArray();
            if (parents.Length > 0) extendsPart = " extends " + string.Join(", ", parents);
        }
        else
        {
            var bt = AcceptableBase(t);
            if (bt != null) extendsPart = " extends " + MapPhpFqn(bt);
            var ifaces = DirectInterfaces(t).Where(IsAcceptableType).Select(MapPhpFqn).ToArray();
            if (ifaces.Length > 0) implementsPart = " implements " + string.Join(", ", ifaces);
        }

        sb.AppendLine($"{kind} {phpClassName}{extendsPart}{implementsPart}");
        sb.AppendLine("{");

        // === ВНИМАНИЕ: больше НЕ печатаем @property внутри тела интерфейса/класса ===

        if (!isInterface)
        {
            // Класс: реальные плейсхолдеры для свойств
            foreach (var p in t.GetProperties(BindingFlags.Public | BindingFlags.Instance | BindingFlags.Static | BindingFlags.DeclaredOnly))
            {
                try
                {
                    if (IsIndexer(p)) continue;
                    var acc = p.GetMethod ?? p.SetMethod;
                    if (acc == null || !acc.IsPublic) continue;
                    if (!IsAcceptableType(p.PropertyType)) continue;

                    var staticKw = (p.GetMethod?.IsStatic == true || p.SetMethod?.IsStatic == true) ? "static " : "";
                    var docType = MapPhpDocType(p.PropertyType);
                    var psum = docs?.GetPropertySummary(p);

                    sb.AppendLine("    /**");
                    sb.AppendLine($"     * @var {docType}");
                    if (!string.IsNullOrWhiteSpace(psum))
                        sb.AppendLine("     * " + EscapeDoc(psum!));
                    sb.AppendLine("     */");
                    sb.AppendLine($"    public {staticKw}${ToPhpIdentifier(p.Name)};");
                    sb.AppendLine();
                }
                catch { }
            }

            // События как ClrEvent
            foreach (var ev in t.GetEvents(BindingFlags.Public | BindingFlags.Instance | BindingFlags.Static | BindingFlags.DeclaredOnly))
            {
                try
                {
                    var isStatic = (ev.AddMethod?.IsStatic ?? false) || (ev.RemoveMethod?.IsStatic ?? false);
                    var staticKw = isStatic ? "static " : "";
                    var esum = docs?.GetEventSummary(ev);

                    sb.AppendLine("    /**");
                    sb.AppendLine("     * @var \\Pchp\\Core\\ClrEvent");
                    if (!string.IsNullOrWhiteSpace(esum))
                        sb.AppendLine("     * " + EscapeDoc(esum!));
                    sb.AppendLine("     * Use: $hook = $this->" + ToPhpIdentifier(ev.Name) + "->add(callable $callback);");
                    sb.AppendLine("     */");
                    sb.AppendLine($"    public {staticKw}${ToPhpIdentifier(ev.Name)};");
                    sb.AppendLine();
                }
                catch { }
            }
        }

        // Конструкторы отключены для предупреждения "Missing parent constructor call"
        if (EMIT_CONSTRUCTORS)
        {
            var ctors = t.GetConstructors(BindingFlags.Public | BindingFlags.Instance | BindingFlags.DeclaredOnly)
                .Where(c => IsAcceptableSignature(c))
                .OrderBy(m => m.GetParameters().Length)
                .ToArray();
            if (ctors.Length > 0)
            {
                var c = ctors[0];
                var (cdoc, _, pdocs) = docs?.GetMethodDocs(c) ?? default;
                sb.Append(Indent(1)).AppendLine(BuildMethodPhpDoc("__construct", c.GetParameters(), null, cdoc, null, pdocs));
                sb.Append(Indent(1)).Append("public function __construct(")
                    .Append(string.Join(", ", c.GetParameters().Select(ParamDecl)))
                    .AppendLine(") {}");
                sb.AppendLine();
            }
        }

        // Методы (DeclaredOnly): одна «минимальная» перегрузка на имя + @method-набор для остальных
        var methodsByName = t.GetMethods(BindingFlags.Public | BindingFlags.Instance | BindingFlags.Static | BindingFlags.DeclaredOnly)
            .Where(m => !m.IsSpecialName)
            .Where(IsAcceptableSignature)
            .GroupBy(m => m.Name);

        var atMethods = new List<string>();
        foreach (var g in methodsByName)
        {
            var overloads = g.ToList();
            var canonical = overloads.OrderBy(m => m.GetParameters().Length)
                .ThenByDescending(m => m.IsStatic)
                .First();
            foreach (var m in overloads)
            {
                if (m == canonical) continue;
                atMethods.Add(BuildAtMethodLine(m));
            }
        }
        if (atMethods.Count > 0)
        {
            sb.Append(Indent(1)).AppendLine("/**");
            foreach (var line in atMethods)
                sb.Append(Indent(1)).AppendLine($" * {line}");
            sb.Append(Indent(1)).AppendLine(" */");
        }

        foreach (var g in methodsByName)
        {
            var m = g.OrderBy(m2 => m2.GetParameters().Length)
                .ThenByDescending(m2 => m2.IsStatic)
                .First();

            var staticKw = m.IsStatic ? "static " : "";
            var mi = m as MethodInfo;
            var (mdoc, mret, pdocs) = docs?.GetMethodDocs(m) ?? default;
            var phpDoc = BuildMethodPhpDoc(m.Name, m.GetParameters(), mi?.ReturnType, mdoc, mret, pdocs);

            sb.Append(Indent(1)).AppendLine(phpDoc);
            sb.Append(Indent(1)).Append($"public {staticKw}function {ToPhpIdentifier(m.Name)}(");
            sb.Append(string.Join(", ", m.GetParameters().Select(ParamDecl)));
            sb.AppendLine(") {}");
            sb.AppendLine();
        }

        // Методы интерфейсов, не переопределённые в классе
        if (!isInterface)
        {
            var existingMethodNames = new HashSet<string>(methodsByName.Select(g => g.Key), StringComparer.Ordinal);

            var ifaceList = DirectInterfaces(t).Where(IsAcceptableType).ToArray();
            foreach (var iface in ifaceList)
            {
                var ifaceGroups = iface.GetMethods(BindingFlags.Public | BindingFlags.Instance)
                    .Where(IsAcceptableSignature)
                    .GroupBy(m => m.Name);
                foreach (var g in ifaceGroups)
                {
                    if (!existingMethodNames.Add(g.Key))
                        continue;

                    var im = g.OrderBy(m => m.GetParameters().Length)
                        .ThenByDescending(m => m.IsStatic)
                        .First();

                    var imReturn = (im as MethodInfo)?.ReturnType;
                    var (imDoc, imRetDoc, imParamDocs) = docs?.GetMethodDocs(im) ?? default;

                    var phpDoc2 = BuildMethodPhpDoc(im.Name, im.GetParameters(), imReturn, imDoc, imRetDoc, imParamDocs);
                    sb.Append(Indent(1)).AppendLine(phpDoc2);
                    sb.Append(Indent(1)).Append($"public function {ToPhpIdentifier(im.Name)}(");
                    sb.Append(string.Join(", ", im.GetParameters().Select(ParamDecl)));
                    sb.AppendLine(") {}");
                    sb.AppendLine();
                }
            }

            // Методы из ближайшей сконструированной generic-базы (например, AvaloniaList<Control>)
            ProjectMethodsFromConstructedGenericBases(t, sb, docs, existingMethodNames);
        }

        sb.AppendLine("}");
        return sb.ToString();
    }

    // === новый: шапка файла (перед namespace)
    private static string BuildFileHeader(Type t, XmlDocProvider? docs)
    {
        var fq = (t.FullName ?? t.Name).Replace('+', '.');
        var lines = new List<string>
        {
            "/**",
            $" * Stub generated from .NET type {fq}",
            " * NOTE: for IDE autocompletion only. Do NOT include in runtime build.",
            " * Public members only. Generics and unsupported signatures are excluded.",
        };
        var tsum = docs?.GetTypeSummary(t);
        if (!string.IsNullOrWhiteSpace(tsum))
            lines.Add(" * " + EscapeDoc(tsum!));
        lines.Add(" */");
        return string.Join(Environment.NewLine, lines);
    }

    // === новый: докблок типа (summary + @property + events-as-property)
    private static string BuildTypeDocBlock(Type t, XmlDocProvider? docs)
    {
        var lines = new List<string> { "/**" };

        var tsum = docs?.GetTypeSummary(t);
        if (!string.IsNullOrWhiteSpace(tsum))
            lines.Add(" * " + EscapeDoc(tsum!));

        // Свойства
        var propFlags = t.IsInterface
            ? BindingFlags.Public | BindingFlags.Instance | BindingFlags.DeclaredOnly
            : BindingFlags.Public | BindingFlags.Instance | BindingFlags.Static | BindingFlags.DeclaredOnly;

        foreach (var p in t.GetProperties(propFlags))
        {
            if (IsIndexer(p)) continue;
            if (!IsAcceptableType(p.PropertyType)) continue;

            var kind = (p.CanRead, p.CanWrite) switch
            {
                (true, false) => "@property-read",
                (false, true) => "@property-write",
                _             => "@property"
            };

            var docType = MapPhpDocType(p.PropertyType);
            var psum = docs?.GetPropertySummary(p);
            var desc = string.IsNullOrWhiteSpace(psum) ? "" : " " + EscapeDoc(psum!);

            lines.Add($" * {kind} {docType} ${ToPhpIdentifier(p.Name)}{desc}");
        }

        // События как @property \Pchp\Core\ClrEvent
        var evFlags = t.IsInterface
            ? BindingFlags.Public | BindingFlags.Instance | BindingFlags.DeclaredOnly
            : BindingFlags.Public | BindingFlags.Instance | BindingFlags.Static | BindingFlags.DeclaredOnly;

        foreach (var ev in t.GetEvents(evFlags))
        {
            var esum = docs?.GetEventSummary(ev);
            var desc = string.IsNullOrWhiteSpace(esum) ? "" : " " + EscapeDoc(esum!);
            lines.Add($" * @property \\Pchp\\Core\\ClrEvent ${ToPhpIdentifier(ev.Name)}{desc}");
        }

        lines.Add(" */");
        return string.Join(Environment.NewLine, lines);
    }

    private static void ProjectMethodsFromConstructedGenericBases(Type t, StringBuilder sb, XmlDocProvider? docs, HashSet<string> existingNames)
    {
        for (var bt = t.BaseType; bt != null && bt != typeof(object); bt = bt.BaseType)
        {
            if (!bt.IsGenericType || bt.ContainsGenericParameters)
                continue;

            var baseGroups = bt.GetMethods(BindingFlags.Public | BindingFlags.Instance)
                .Where(m => !m.IsSpecialName)
                .Where(IsAcceptableSignatureForProjection)
                .GroupBy(m => m.Name);

            foreach (var g in baseGroups)
            {
                if (!existingNames.Add(g.Key))
                    continue;

                var m = g.OrderBy(x => x.GetParameters().Length)
                    .ThenByDescending(x => x.IsStatic)
                    .First();

                var mi = m as MethodInfo;
                var (mdoc, mret, pdocs) = docs?.GetMethodDocs(m) ?? default;

                var phpDoc = BuildMethodPhpDoc(m.Name, m.GetParameters(), mi?.ReturnType, mdoc, mret, pdocs);
                sb.Append(Indent(1)).AppendLine(phpDoc);
                sb.Append(Indent(1)).Append($"public function {ToPhpIdentifier(m.Name)}(");
                sb.Append(string.Join(", ", m.GetParameters().Select(ParamDecl)));
                sb.AppendLine(") {}");
                sb.AppendLine();
            }
            break; // достаточно ближайшей generic-базы
        }
    }

    public static void WritePeachpieEventHelpers(string outRoot)
    {
        var coreDir = Path.Combine(outRoot, "Pchp", "Core");
        Directory.CreateDirectory(coreDir);
        var clrEventPhp = Path.Combine(coreDir, "ClrEvent.php");
        if (!File.Exists(clrEventPhp))
        {
            File.WriteAllText(clrEventPhp,
                @"<?php
declare(strict_types=1);

namespace Pchp\Core;

class ClrEvent
{
    /**
     * @param callable $callback
     * @return \Pchp\Core\ClrEvent\Hook
     */
    public function add($callback) {}
}
");
        }

        var hookDir = Path.Combine(outRoot, "Pchp", "Core", "ClrEvent");
        Directory.CreateDirectory(hookDir);
        var hookPhp = Path.Combine(hookDir, "Hook.php");
        if (!File.Exists(hookPhp))
        {
            File.WriteAllText(hookPhp,
                @"<?php
declare(strict_types=1);

namespace Pchp\Core\ClrEvent;

class Hook
{
    /** @return void */
    public function close() {}

    /** @return void */
    public function dispose() {}
}
");
        }
    }

    // ===== helpers =====

    public static (string nsPath, string fileName) GetPathParts(Type t)
    {
        var nsPath = (t.Namespace ?? "").Replace('.', Path.DirectorySeparatorChar);
        var fileName = StripGenericTick(t.Name).Replace('+', Path.DirectorySeparatorChar);
        return (nsPath, fileName);
    }

    static string BuildMethodPhpDoc(string methodName, ParameterInfo[] ps, Type? returnType,
        string? summaryFromXml, string? returnsFromXml, Dictionary<string,string>? paramDocs)
    {
        var sb = new StringBuilder();
        sb.AppendLine("/**");
        if (!string.IsNullOrWhiteSpace(summaryFromXml))
            sb.Append("     * ").Append(EscapeDoc(summaryFromXml!)).AppendLine();

        foreach (var p in ps)
        {
            string? pdoc = null;
            if (paramDocs != null)
                paramDocs.TryGetValue(p.Name ?? string.Empty, out pdoc);

            var docSuffix = !string.IsNullOrWhiteSpace(pdoc) ? " " + EscapeDoc(pdoc) : "";

            sb.Append("     * @param ").Append(MapPhpDocType(p.ParameterType)).Append(' ')
                .Append('$').Append(ToPhpIdentifier(p.Name ?? "arg"))
                .Append(docSuffix).AppendLine();
        }

        if (returnType != null)
        {
            var retDoc = !string.IsNullOrWhiteSpace(returnsFromXml) ? " " + EscapeDoc(returnsFromXml!) : "";
            sb.Append("     * @return ").Append(MapPhpDocType(returnType)).Append(retDoc).AppendLine();
        }

        sb.Append("     */");
        return sb.ToString();
    }

    static string EscapeDoc(string s) => s.Replace("*/", "*∕");

    static string BuildAtMethodLine(MethodInfo m)
    {
        var ret = MapPhpDocType(m.ReturnType);
        var pars = string.Join(", ", m.GetParameters().Select(p => $"{MapPhpDocType(p.ParameterType)} ${ToPhpIdentifier(p.Name ?? "arg")}"));
        return $"@method {ret} {ToPhpIdentifier(m.Name)}({pars})";
    }

    static bool IsIndexer(PropertyInfo p) => p.GetIndexParameters().Length > 0;
    static bool IsPubliclyVisible(Type t) => t.IsPublic || t.IsNestedPublic;

    // Жёсткое правило основной генерации: generic-типы исключаем.
    static bool IsAcceptableType(Type t)
    {
        if (t.IsPointer || t.IsByRef) return false;
        if (t.IsGenericParameter) return false;
        if (t.IsGenericType) return false;
        return true;
    }

    // Мягкий фильтр для проекции из generic-баз:
    static bool IsAcceptableTypeForProjection(Type t)
    {
        if (t.IsPointer || t.IsByRef) return false;
        if (t.ContainsGenericParameters) return false;
        return true;
    }

    static bool IsAcceptableSignature(MethodBase m)
    {
        if (m.IsGenericMethodDefinition) return false;
        if (m.ContainsGenericParameters) return false;

        foreach (var p in m.GetParameters())
            if (!IsAcceptableType(p.ParameterType)) return false;

        if (m is MethodInfo mi)
            if (!IsAcceptableType(mi.ReturnType)) return false;

        return true;
    }

    static bool IsAcceptableSignatureForProjection(MethodBase m)
    {
        if (m.IsGenericMethodDefinition) return false;
        if (m.ContainsGenericParameters) return false;

        foreach (var p in m.GetParameters())
            if (!IsAcceptableTypeForProjection(p.ParameterType)) return false;

        if (m is MethodInfo mi)
            if (!IsAcceptableTypeForProjection(mi.ReturnType)) return false;

        return true;
    }

    static string ParamDecl(ParameterInfo p)
    {
        var name = string.IsNullOrWhiteSpace(p.Name) ? "arg" : p.Name!;
        var defaultPart = p.HasDefaultValue ? " = null" : "";
        return $"${ToPhpIdentifier(name)}{defaultPart}";
    }

    static string MapPhpDocType(Type t)
    {
        if (t == typeof(void)) return "void";
        if (t == typeof(string)) return "string";
        if (t == typeof(bool)) return "bool";
        if (t == typeof(byte) || t == typeof(sbyte) ||
            t == typeof(short) || t == typeof(ushort) ||
            t == typeof(int) || t == typeof(uint) ||
            t == typeof(long) || t == typeof(ulong)) return "int";
        if (t == typeof(float) || t == typeof(double) || t == typeof(decimal)) return "float";
        if (t.IsArray) return "array";

        // Сконструированные generic-типы — без угловых скобок; коллекции -> iterable; Nullable<T> -> T|null
        if (t.IsGenericType && !t.ContainsGenericParameters)
        {
            var gtd = t.GetGenericTypeDefinition();

            // Nullable<T>
            if (gtd == typeof(Nullable<>))
            {
                var inner = t.GetGenericArguments()[0];
                return MapPhpDocType(inner) + "|null";
            }

            // Любая коллекция => iterable
            if (typeof(System.Collections.IEnumerable).IsAssignableFrom(t))
                return "iterable";

            // Иначе: название generic-типа без арности
            var fullGtd = (gtd.FullName ?? gtd.Name).Replace('+', '.');
            var idxG = fullGtd.IndexOf('`');
            if (idxG >= 0) fullGtd = fullGtd[..idxG];
            return "\\" + fullGtd.Replace('.', '\\');
        }

        var full = (t.FullName ?? t.Name).Replace('+', '.');
        var idx = full.IndexOf('`');
        if (idx >= 0) full = full[..idx];
        return "\\" + full.Replace('.', '\\');
    }

    static string MapPhpFqn(Type t) => MapPhpDocType(t);

    static string StripGenericTick(string name)
    {
        var idx = name.IndexOf('`');
        return idx >= 0 ? name[..idx] : name;
    }

    static string ToPhpNamespace(string? dotNetNs)
        => string.IsNullOrWhiteSpace(dotNetNs) ? "" : dotNetNs.Replace('.', '\\');

    static string ToPhpIdentifier(string name)
    {
        if (string.IsNullOrEmpty(name)) return "member";
        var chars = name.Select(ch => char.IsLetterOrDigit(ch) || ch == '_' ? ch : '_').ToArray();
        if (char.IsDigit(chars[0])) return "_" + new string(chars);
        return new string(chars);
    }

    static Type? AcceptableBase(Type t)
    {
        var bt = t.BaseType;
        if (bt == null || bt == typeof(object)) return null;
        return IsAcceptableType(bt) ? bt : null;
    }

    static IEnumerable<Type> DirectInterfaces(Type t)
    {
        var all = new HashSet<Type>(t.GetInterfaces());
        var inherited = new HashSet<Type>();

        for (var b = t.BaseType; b != null; b = b.BaseType)
            foreach (var i in b.GetInterfaces())
                inherited.Add(i);

        foreach (var i in all.ToArray())
        foreach (var ii in i.GetInterfaces())
            inherited.Add(ii);

        all.ExceptWith(inherited);
        return all;
    }

    static string Indent(int level) => new string(' ', level * 4);
}
