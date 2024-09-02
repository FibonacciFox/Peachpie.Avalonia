<?php
namespace System\Reflection;
enum TypeAttributes
{
	
	case VisibilityMask = '7';
	case NotPublic = '0';
	case Public = '1';
	case NestedPublic = '2';
	case NestedPrivate = '3';
	case NestedFamily = '4';
	case NestedAssembly = '5';
	case NestedFamANDAssem = '6';
	case NestedFamORAssem = '7';
	case LayoutMask = '24';
	case AutoLayout = '0';
	case SequentialLayout = '8';
	case ExplicitLayout = '16';
	case ClassSemanticsMask = '32';
	case Class = '0';
	case Interface = '32';
	case Abstract = '128';
	case Sealed = '256';
	case SpecialName = '1024';
	case Import = '4096';
	case Serializable = '8192';
	case WindowsRuntime = '16384';
	case StringFormatMask = '196608';
	case AnsiClass = '0';
	case UnicodeClass = '65536';
	case AutoClass = '131072';
	case CustomFormatClass = '196608';
	case CustomFormatMask = '12582912';
	case BeforeFieldInit = '1048576';
	case RTSpecialName = '2048';
	case HasSecurity = '262144';
	case ReservedMask = '264192';

}