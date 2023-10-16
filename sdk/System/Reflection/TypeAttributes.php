<?php
namespace System\Reflection;
/**
 */
enum TypeAttributes implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case VisibilityMask = 0;
	case NotPublic = 0;
	case Public = 0;
	case NestedPublic = 0;
	case NestedPrivate = 1;
	case NestedFamily = 2;
	case NestedAssembly = 3;
	case NestedFamANDAssem = 4;
	case NestedFamORAssem = 5;
	case LayoutMask = 6;
	case AutoLayout = 7;
	case SequentialLayout = 7;
	case ExplicitLayout = 8;
	case ClassSemanticsMask = 16;
	case Class = 24;
	case Interface = 32;
	case Abstract = 32;
	case Sealed = 128;
	case SpecialName = 256;
	case Import = 1024;
	case Serializable = 2048;
	case WindowsRuntime = 4096;
	case StringFormatMask = 8192;
	case AnsiClass = 16384;
	case UnicodeClass = 65536;
	case AutoClass = 131072;
	case CustomFormatClass = 196608;
	case CustomFormatMask = 196608;
	case BeforeFieldInit = 262144;
	case RTSpecialName = 264192;
	case HasSecurity = 1048576;
	case ReservedMask = 12582912;
}
