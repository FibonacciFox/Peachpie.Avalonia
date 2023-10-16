<?php
namespace System\Reflection;
/**
 */
enum MetadataTokenType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Module = 0;
	case TypeRef = 16777216;
	case TypeDef = 33554432;
	case FieldDef = 67108864;
	case MethodDef = 100663296;
	case ParamDef = 134217728;
	case InterfaceImpl = 150994944;
	case MemberRef = 167772160;
	case CustomAttribute = 201326592;
	case Permission = 234881024;
	case Signature = 285212672;
	case Event = 335544320;
	case Property = 385875968;
	case ModuleRef = 436207616;
	case TypeSpec = 452984832;
	case Assembly = 536870912;
	case AssemblyRef = 587202560;
	case File = 637534208;
	case ExportedType = 654311424;
	case ManifestResource = 671088640;
	case GenericPar = 704643072;
	case MethodSpec = 721420288;
	case String = 1879048192;
	case Name = 1895825408;
	case BaseType = 1912602624;
	case Invalid = 2147483647;
}
