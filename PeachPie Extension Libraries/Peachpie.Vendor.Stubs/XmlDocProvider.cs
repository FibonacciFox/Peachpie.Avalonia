using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Reflection;
using System.Xml.Linq;

namespace Peachpie.Vendor.Stubs;

public sealed class XmlDocProvider
{
    private readonly Dictionary<string, Dictionary<string, MemberDoc>> _asmDocs =
        new(StringComparer.OrdinalIgnoreCase);

    public sealed class MemberDoc
    {
        public string Summary { get; set; } = "";
        public string Returns { get; set; } = "";
        public Dictionary<string, string> Params { get; } = new Dictionary<string, string>(StringComparer.Ordinal);
        public string Remarks { get; set; } = "";
        public string Value { get; set; } = "";
    }

    public bool TryAddFromAssemblyPath(string? assemblyPath)
    {
        try
        {
            if (string.IsNullOrWhiteSpace(assemblyPath)) return false;
            var asmName = AssemblyName.GetAssemblyName(assemblyPath).Name!;
            var xml = Path.ChangeExtension(assemblyPath, ".xml");
            if (!File.Exists(xml)) return false;

            var xdoc = XDocument.Load(xml);
            var map = new Dictionary<string, MemberDoc>(StringComparer.Ordinal);

            foreach (var m in xdoc.Root?.Element("members")?.Elements("member") ?? Enumerable.Empty<XElement>())
            {
                var id = m.Attribute("name")?.Value ?? "";
                if (string.IsNullOrWhiteSpace(id)) continue;

                var md = new MemberDoc
                {
                    Summary = Normalize(m.Element("summary")?.Value),
                    Returns = Normalize(m.Element("returns")?.Value),
                    Remarks = Normalize(m.Element("remarks")?.Value),
                    Value = Normalize(m.Element("value")?.Value),
                };
                foreach (var p in m.Elements("param"))
                {
                    var n = p.Attribute("name")?.Value;
                    if (!string.IsNullOrWhiteSpace(n))
                        md.Params[n!] = Normalize(p.Value);
                }
                map[id] = md;
            }

            _asmDocs[asmName] = map;
            return true;
        }
        catch { return false; }
    }

    public string? GetTypeSummary(Type t) => Get(t.Assembly, DocIdForType(t))?.Summary;
    public string? GetPropertySummary(PropertyInfo p) => Get(p.DeclaringType!.Assembly, DocIdForProperty(p))?.Summary;
    public string? GetEventSummary(EventInfo e) => Get(e.DeclaringType!.Assembly, DocIdForEvent(e))?.Summary;

    public (string? summary, string? returns, Dictionary<string,string>? @params) GetMethodDocs(MethodBase m)
    {
        var id = DocIdForMethod(m);
        var d = Get(m.DeclaringType!.Assembly, id);
        return (d?.Summary, d?.Returns, d?.Params);
    }

    private MemberDoc? Get(Assembly asm, string id)
    {
        if (string.IsNullOrWhiteSpace(id)) return null;
        if (_asmDocs.TryGetValue(asm.GetName().Name!, out var dict) && dict.TryGetValue(id, out var md))
            return md;
        return null;
    }

    // DocID helpers

    private static string DocIdForType(Type t) => "T:" + FullDocTypeName(t);
    private static string DocIdForProperty(PropertyInfo p) => "P:" + FullDocTypeName(p.DeclaringType!) + "." + p.Name;
    private static string DocIdForEvent(EventInfo e) => "E:" + FullDocTypeName(e.DeclaringType!) + "." + e.Name;

    private static string DocIdForMethod(MethodBase m)
    {
        var typeName = FullDocTypeName(m.DeclaringType!);
        var name = m.IsConstructor ? "#ctor" : m.Name;
        var pars = m.GetParameters();
        if (pars.Length == 0) return $"M:{typeName}.{name}";
        var sig = string.Join(",", pars.Select(p => DocParamType(p.ParameterType)));
        return $"M:{typeName}.{name}({sig})";
    }

    private static string FullDocTypeName(Type t)
    {
        var full = (t.FullName ?? t.Name).Replace('+', '.');
        var idx = full.IndexOf('`');
        return idx >= 0 ? full[..idx] : full;
    }

    private static string DocParamType(Type t)
    {
        if (t.IsArray) return DocParamType(t.GetElementType()!) + "[]";
        if (t.IsByRef) return DocParamType(t.GetElementType()!) + "@";
        return FullDocTypeName(t);
    }

    private static string Normalize(string? s)
    {
        if (string.IsNullOrWhiteSpace(s)) return "";
        return string.Join(" ", s.Split(new[] { '\r', '\n', '\t' }, StringSplitOptions.RemoveEmptyEntries)
                .Select(x => x.Trim()))
            .Trim();
    }
}