using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Reflection;
using System.Text;

namespace Peachpie.Vendor.Stubs;

public static class PhpStubGenerator
{
    private const bool EMIT_CONSTRUCTORS = true;

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

    private static void GenerateHierarchyInternal(Type root, string outRoot, HashSet<string> visited, bool includeExternal, XmlDocProvider? docs)
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

    private static void WriteTypeStub(Type t, string outRoot, XmlDocProvider? docs)
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

        // Header (без summary, чтобы не дублировать с доком типа)
        sb.AppendLine(BuildFileHeader(t));
        sb.AppendLine();

        // namespace
        var phpNs = ToPhpNamespace(t.Namespace);
        if (!string.IsNullOrEmpty(phpNs))
        {
            sb.AppendLine($"namespace {phpNs};");
            sb.AppendLine();
        }

        var phpClassName = ToPhpIdentifier(StripGenericTick(t.Name).Replace('+', '\\'));

        // Решение по конструкторам
        var ctorInfo = PrepareCtorInfo(t, docs, phpClassName);

        // Док-блок типа (+ опционально список ctor overloads)
        sb.AppendLine(BuildTypeDocBlock(t, docs, ctorInfo.CtorOverloadsDocForType));

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

        if (!isInterface)
        {
            // Свойства
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

            // События — стиль с HTML (Callback/Usage внутри <code>)
            foreach (var ev in t.GetEvents(BindingFlags.Public | BindingFlags.Instance | BindingFlags.Static | BindingFlags.DeclaredOnly))
            {
                try
                {
                    var isStaticEv = (ev.AddMethod?.IsStatic ?? false) || (ev.RemoveMethod?.IsStatic ?? false);
                    var staticKw = isStaticEv ? "static " : "";
                    var esum = docs?.GetEventSummary(ev);
                    var cbSig = BuildEventCallbackSignature(ev); // "function(object $sender, \Ns\Args $e): void"

                    sb.AppendLine("    /**");
                    sb.AppendLine("     * @var \\Pchp\\Core\\ClrEvent");
                    if (!string.IsNullOrWhiteSpace(esum))
                        sb.AppendLine("     * " + EscapeDoc(esum!));

                    if (!string.IsNullOrWhiteSpace(cbSig))
                    {
                        sb.AppendLine($"     * <br/><b>Callback</b>: <code>{cbSig}</code>");
                        sb.AppendLine($"     * <br/><b>Usage</b>: <code>$hook = $this->{ToPhpIdentifier(ev.Name)}->add({cbSig} {{}});</code>");
                    }
                    else
                    {
                        sb.AppendLine("     * <br/><b>Callback</b>: <code>callable $callback</code>");
                        sb.AppendLine($"     * <br/><b>Usage</b>: <code>$hook = $this->{ToPhpIdentifier(ev.Name)}->add($callback);</code>");
                    }

                    sb.AppendLine("     */");
                    sb.AppendLine($"    public {staticKw}${ToPhpIdentifier(ev.Name)};");
                    sb.AppendLine();
                }
                catch { }
            }
        }

        // Конструкторы
        if (!isInterface && EMIT_CONSTRUCTORS)
        {
            if (ctorInfo.EmitCtorWithVarArgs)
            {
                if (!string.IsNullOrWhiteSpace(ctorInfo.CtorDocForMethod))
                    sb.Append(Indent(1)).AppendLine(ctorInfo.CtorDocForMethod);

                sb.Append(Indent(1)).AppendLine("public function __construct(...$args) {}");
                sb.AppendLine();
            }
            else if (!string.IsNullOrWhiteSpace(ctorInfo.CtorOnlyOverloadsDocBlockInsideClass))
            {
                sb.Append(Indent(1)).AppendLine(ctorInfo.CtorOnlyOverloadsDocBlockInsideClass);
                sb.AppendLine();
            }
        }

        // Методы (DeclaredOnly)
        var methodGroups = t.GetMethods(BindingFlags.Public | BindingFlags.Instance | BindingFlags.Static | BindingFlags.DeclaredOnly)
            .Where(m => !m.IsSpecialName)
            .Where(IsAcceptableSignature)
            .GroupBy(m => m.Name);

        foreach (var g in methodGroups)
        {
            var overloads = g.Cast<MethodInfo>().ToList();
            overloads.Sort(MethodOverloadSortKey);

            if (overloads.Count > 1)
            {
                var (summary, _, _) = docs?.GetMethodDocs(overloads[0]) ?? default;
                var doc = BuildOverloadedMethodDoc(overloads[0].Name, summary, overloads);

                sb.Append(Indent(1)).AppendLine(doc);
                var canonical = overloads[0];
                var staticKw = canonical.IsStatic ? "static " : "";

                if (isInterface)
                    sb.Append(Indent(1)).Append($"public {staticKw}function {ToPhpIdentifier(g.Key)}(...$args);").AppendLine().AppendLine();
                else
                    sb.Append(Indent(1)).Append($"public {staticKw}function {ToPhpIdentifier(g.Key)}(...$args) {{}}").AppendLine().AppendLine();
            }
            else
            {
                var m = overloads[0];
                var (mdoc, mret, pdocs) = docs?.GetMethodDocs(m) ?? default;
                var phpDoc = BuildMethodPhpDoc(m.Name, m.GetParameters(), m.ReturnType, mdoc, mret, pdocs);
                sb.Append(Indent(1)).AppendLine(phpDoc);

                var staticKw = m.IsStatic ? "static " : "";
                var paramList = string.Join(", ", m.GetParameters().Select(ParamDecl));

                if (isInterface)
                    sb.Append(Indent(1)).Append($"public {staticKw}function {ToPhpIdentifier(m.Name)}({paramList});").AppendLine();
                else
                    sb.Append(Indent(1)).Append($"public {staticKw}function {ToPhpIdentifier(m.Name)}({paramList}) {{}}").AppendLine();

                sb.AppendLine();
            }
        }

        // Методы из интерфейсов (если класс)
        if (!isInterface)
        {
            var existingNames = new HashSet<string>(methodGroups.Select(x => x.Key), StringComparer.Ordinal);

            foreach (var iface in DirectInterfaces(t).Where(IsAcceptableType))
            {
                var groups = iface.GetMethods(BindingFlags.Public | BindingFlags.Instance)
                    .Where(IsAcceptableSignature)
                    .GroupBy(m => m.Name);

                foreach (var gg in groups)
                {
                    if (!existingNames.Add(gg.Key))
                        continue;

                    var overloads = gg.Cast<MethodInfo>().ToList();
                    overloads.Sort(MethodOverloadSortKey);

                    if (overloads.Count > 1)
                    {
                        var (sum, _, _) = docs?.GetMethodDocs(overloads[0]) ?? default;
                        var doc = BuildOverloadedMethodDoc(overloads[0].Name, sum, overloads);
                        sb.Append(Indent(1)).AppendLine(doc);
                        sb.Append(Indent(1)).Append($"public function {ToPhpIdentifier(gg.Key)}(...$args) {{}}")
                          .AppendLine().AppendLine();
                    }
                    else
                    {
                        var im = overloads[0];
                        var (imDoc, imRetDoc, imParamDocs) = docs?.GetMethodDocs(im) ?? default;
                        var phpDoc2 = BuildMethodPhpDoc(im.Name, im.GetParameters(), im.ReturnType, imDoc, imRetDoc, imParamDocs);
                        sb.Append(Indent(1)).AppendLine(phpDoc2);
                        sb.Append(Indent(1)).Append($"public function {ToPhpIdentifier(im.Name)}(")
                          .Append(string.Join(", ", im.GetParameters().Select(ParamDecl)))
                          .AppendLine(") {}")
                          .AppendLine();
                    }
                }
            }

            ProjectMethodsFromConstructedGenericBases(t, sb, docs, new HashSet<string>(methodGroups.Select(x => x.Key), StringComparer.Ordinal));
        }

        sb.AppendLine("}");
        return sb.ToString();
    }

    // ===== Конструкторы: решения =====

    private sealed class CtorDocDecision
    {
        public bool   EmitCtorWithVarArgs { get; init; }
        public string? CtorDocForMethod { get; init; }
        public string? CtorOverloadsDocForType { get; init; }
        public string? CtorOnlyOverloadsDocBlockInsideClass { get; init; }
    }

    private static CtorDocDecision PrepareCtorInfo(Type t, XmlDocProvider? docs, string phpClassName)
    {
        var ctorsAll = t.GetConstructors(BindingFlags.Public | BindingFlags.Instance | BindingFlags.DeclaredOnly)
            .Where(c => IsAcceptableSignature(c))
            .ToArray();

        if (!EMIT_CONSTRUCTORS || ctorsAll.Length == 0)
            return new CtorDocDecision();

        var hasParamless = ctorsAll.Any(c => c.GetParameters().Length == 0);
        var ctorsWithParams = ctorsAll.Where(c => c.GetParameters().Length > 0).ToList();

        string BuildCtorOverloadsHtml(IEnumerable<ConstructorInfo> ctors)
        {
            int i = 1;
            var sb = new StringBuilder();
            sb.AppendLine(" * <br/><b>.NET overloads</b>:");
            foreach (var c in ctors)
            {
                var sig = BuildCtorSignature(phpClassName, c); // параметры как "$name: Type"
                sb.AppendLine($" * <br/><b>{i}.</b> <code>{sig}</code>");
                i++;
            }
            return sb.ToString();
        }

        if (hasParamless && ctorsWithParams.Count > 0)
        {
            var typeAddon = new StringBuilder();
            typeAddon.Append(BuildCtorOverloadsHtml(ctorsAll));
            return new CtorDocDecision
            {
                EmitCtorWithVarArgs = false,
                CtorOverloadsDocForType = typeAddon.ToString().TrimEnd()
            };
        }

        if (!hasParamless && ctorsWithParams.Count > 0)
        {
            var first = ctorsWithParams.OrderBy(c => c.GetParameters().Length).First();
            var (sum, _, _) = docs?.GetMethodDocs(first) ?? default;

            var doc = new StringBuilder();
            doc.AppendLine("/**");
            if (!string.IsNullOrWhiteSpace(sum)) doc.AppendLine("     * " + EscapeDoc(sum!));
            var html = BuildCtorOverloadsHtml(ctorsWithParams).Replace("\n", "\n     ");
            doc.Append(html).AppendLine();
            doc.Append("     */");

            return new CtorDocDecision
            {
                EmitCtorWithVarArgs = true,
                CtorDocForMethod = doc.ToString()
            };
        }

        return new CtorDocDecision();
    }

    // ===== Док для перегруженных методов =====

    private static string BuildOverloadedMethodDoc(string methodName, string? summary, IList<MethodInfo> overloads)
    {
        var sb = new StringBuilder();
        sb.AppendLine("/**");
        if (!string.IsNullOrWhiteSpace(summary))
            sb.AppendLine("     * " + EscapeDoc(summary!));
        sb.AppendLine("     * <br/><b>.NET overloads</b>:");
        int i = 1;
        foreach (var m in overloads)
        {
            var sig = BuildMethodSignature(m); // параметры "$name: Type"
            sb.AppendLine($"     * <br/><b>{i}.</b> <code>{sig}</code>");
            i++;
        }
        sb.Append("     */");
        return sb.ToString();
    }

    // ——— сигнатуры для HTML-списков overloads (параметры в виде "$name: Type") ———

    private static string BuildMethodSignature(MethodInfo m)
    {
        var ret = MapPhpDocType(m.ReturnType);
        var staticKw = m.IsStatic ? "static " : "";
        var pars = string.Join(", ", m.GetParameters().Select(BuildParamSig));
        return $"{staticKw}{ToPhpIdentifier(m.Name)}({pars}): {ret}";
    }

    private static string BuildCtorSignature(string className, ConstructorInfo c)
    {
        var pars = string.Join(", ", c.GetParameters().Select(BuildParamSig));
        return $"{className}({pars})";
    }

    private static string BuildParamSig(ParameterInfo p)
    {
        var name = ToPhpIdentifier(p.Name ?? "arg");
        var type = MapPhpDocType(p.ParameterType);
        return $"${name}: {type}";
    }

    private static int MethodOverloadSortKey(MethodInfo a, MethodInfo b)
    {
        int cmp = a.GetParameters().Length.CompareTo(b.GetParameters().Length);
        if (cmp != 0) return cmp;
        cmp = b.IsStatic.CompareTo(a.IsStatic);
        if (cmp != 0) return cmp;
        return string.Compare(a.ToString(), b.ToString(), StringComparison.Ordinal);
    }

    // ===== Header / TypeDoc =====

    private static string BuildFileHeader(Type t)
    {
        var fq = (t.FullName ?? t.Name).Replace('+', '.');
        var lines = new List<string>
        {
            "/**",
            $" * Stub generated from .NET type {fq}",
            " * NOTE: for IDE autocompletion only. Do NOT include in runtime build.",
            " * Public members only. Generics and unsupported signatures are excluded.",
            " */"
        };
        return string.Join(Environment.NewLine, lines);
    }

    private static string BuildTypeDocBlock(Type t, XmlDocProvider? docs, string? ctorOverloadsAddon)
    {
        var lines = new List<string> { "/**" };

        var tsum = docs?.GetTypeSummary(t);
        if (!string.IsNullOrWhiteSpace(tsum))
            lines.Add(" * " + EscapeDoc(tsum!));

        if (!string.IsNullOrWhiteSpace(ctorOverloadsAddon))
        {
            foreach (var ln in ctorOverloadsAddon.Split(new[] { "\r\n", "\n" }, StringSplitOptions.None))
                lines.Add(ln);
        }

        if (t.IsInterface)
        {
            foreach (var p in t.GetProperties(BindingFlags.Public | BindingFlags.Instance | BindingFlags.DeclaredOnly))
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

            foreach (var ev in t.GetEvents(BindingFlags.Public | BindingFlags.Instance | BindingFlags.DeclaredOnly))
            {
                var esum = docs?.GetEventSummary(ev);
                var desc = string.IsNullOrWhiteSpace(esum) ? "" : " " + EscapeDoc(esum!);
                lines.Add($" * @property \\Pchp\\Core\\ClrEvent ${ToPhpIdentifier(ev.Name)}{desc}");

                var cbSig = BuildEventCallbackSignature(ev);
                if (!string.IsNullOrWhiteSpace(cbSig))
                {
                    lines.Add($" * <br/><b>Callback</b>: <code>{cbSig}</code>");
                    lines.Add($" * <br/><b>Usage</b>: <code>$hook = $this->{ToPhpIdentifier(ev.Name)}->add({cbSig} {{}});</code>");
                }
                else
                {
                    lines.Add($" * <br/><b>Callback</b>: <code>callable $callback</code>");
                    lines.Add($" * <br/><b>Usage</b>: <code>$hook = $this->{ToPhpIdentifier(ev.Name)}->add($callback);</code>");
                }
            }
        }

        lines.Add(" */");
        return string.Join(Environment.NewLine, lines);
    }

    // ===== Event callback signature (для HTML) =====
    private static string? BuildEventCallbackSignature(EventInfo ev)
    {
        try
        {
            var dt = ev.EventHandlerType;
            if (dt == null) return null;

            var invoke = dt.GetMethod("Invoke");
            if (invoke == null) return null;

            var parts = new List<string>();
            foreach (var p in invoke.GetParameters())
            {
                var typeStr = FormatCallbackParamType(p.ParameterType);
                var nameStr = "$" + ToPhpIdentifier(p.Name ?? "arg");
                parts.Add($"{typeStr} {nameStr}");
            }

            var ret = MapPhpDocType(invoke.ReturnType); // обычно "void"
            return $"function({string.Join(", ", parts)}): {ret}";
        }
        catch
        {
            return null;
        }
    }

    private static string FormatCallbackParamType(Type t)
    {
        if (t == typeof(object)) return "object";
        return MapPhpDocType(t);
    }

    // ===== Base-generic projection =====

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
            break;
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

    private static string BuildMethodPhpDoc(string methodName, ParameterInfo[] ps, Type? returnType,
        string? summaryFromXml, string? returnsFromXml, Dictionary<string,string>? paramDocs)
    {
        var sb = new StringBuilder();
        sb.AppendLine("/**");
        if (!string.IsNullOrWhiteSpace(summaryFromXml))
            sb.Append("     * ").Append(EscapeDoc(summaryFromXml!)).AppendLine();

        foreach (var p in ps)
        {
            string? pdoc = null;
            paramDocs?.TryGetValue(p.Name ?? string.Empty, out pdoc);
            var docSuffix = !string.IsNullOrWhiteSpace(pdoc) ? " " + EscapeDoc(pdoc) : "";
            sb.Append("     * @param ").Append(MapPhpDocType(p.ParameterType)).Append(' ')
              .Append('$').Append(ToPhpIdentifier(p.Name ?? "arg")).Append(docSuffix).AppendLine();
        }

        if (returnType != null)
        {
            var retDoc = !string.IsNullOrWhiteSpace(returnsFromXml) ? " " + EscapeDoc(returnsFromXml!) : "";
            sb.Append("     * @return ").Append(MapPhpDocType(returnType)).Append(retDoc).AppendLine();
        }

        sb.Append("     */");
        return sb.ToString();
    }

    private static string EscapeDoc(string s) => s.Replace("*/", "*∕");
    private static bool IsIndexer(PropertyInfo p) => p.GetIndexParameters().Length > 0;
    private static bool IsPubliclyVisible(Type t) => t.IsPublic || t.IsNestedPublic;

    private static bool IsAcceptableType(Type t)
    {
        if (t.IsPointer || t.IsByRef) return false;
        if (t.IsGenericParameter) return false;
        if (t.IsGenericType) return false;
        return true;
    }

    private static bool IsAcceptableTypeForProjection(Type t)
    {
        if (t.IsPointer || t.IsByRef) return false;
        if (t.ContainsGenericParameters) return false;
        return true;
    }

    private static bool IsAcceptableSignature(MethodBase m)
    {
        if (m.IsGenericMethodDefinition) return false;
        if (m.ContainsGenericParameters) return false;

        foreach (var p in m.GetParameters())
            if (!IsAcceptableType(p.ParameterType)) return false;

        if (m is MethodInfo mi)
            if (!IsAcceptableType(mi.ReturnType)) return false;

        return true;
    }

    private static bool IsAcceptableSignatureForProjection(MethodBase m)
    {
        if (m.IsGenericMethodDefinition) return false;
        if (m.ContainsGenericParameters) return false;

        foreach (var p in m.GetParameters())
            if (!IsAcceptableTypeForProjection(p.ParameterType)) return false;

        if (m is MethodInfo mi)
            if (!IsAcceptableTypeForProjection(mi.ReturnType)) return false;

        return true;
    }

    private static string ParamDecl(ParameterInfo p)
    {
        var name = string.IsNullOrWhiteSpace(p.Name) ? "arg" : p.Name!;
        var defaultPart = p.HasDefaultValue ? " = null" : "";
        return $"${ToPhpIdentifier(name)}{defaultPart}";
    }

    private static string MapPhpDocType(Type t)
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

        if (t.IsGenericType && !t.ContainsGenericParameters)
        {
            var gtd = t.GetGenericTypeDefinition();

            if (gtd == typeof(Nullable<>))
                return MapPhpDocType(t.GetGenericArguments()[0]) + "|null";

            if (typeof(System.Collections.IEnumerable).IsAssignableFrom(t))
                return "iterable";

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

    private static string MapPhpFqn(Type t) => MapPhpDocType(t);

    private static string StripGenericTick(string name)
    {
        var idx = name.IndexOf('`');
        return idx >= 0 ? name[..idx] : name;
    }

    private static string ToPhpNamespace(string? dotNetNs)
        => string.IsNullOrWhiteSpace(dotNetNs) ? "" : dotNetNs.Replace('.', '\\');

    private static string ToPhpIdentifier(string name)
    {
        if (string.IsNullOrEmpty(name)) return "member";
        var chars = name.Select(ch => char.IsLetterOrDigit(ch) || ch == '_' ? ch : '_').ToArray();
        if (char.IsDigit(chars[0])) return "_" + new string(chars);
        return new string(chars);
    }

    private static Type? AcceptableBase(Type t)
    {
        var bt = t.BaseType;
        if (bt == null || bt == typeof(object)) return null;
        return IsAcceptableType(bt) ? bt : null;
    }

    private static IEnumerable<Type> DirectInterfaces(Type t)
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

    private static string Indent(int level) => new string(' ', level * 4);
}
