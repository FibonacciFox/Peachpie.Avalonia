<?php
namespace System\Reflection;
/**
 */
enum FieldAttributes implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case FieldAccessMask = 0;
	case PrivateScope = 1;
	case Private = 2;
	case FamANDAssem = 3;
	case Assembly = 4;
	case Family = 5;
	case FamORAssem = 6;
	case Public = 7;
	case Static = 16;
	case InitOnly = 32;
	case Literal = 64;
	case NotSerialized = 128;
	case SpecialName = 256;
	case PinvokeImpl = 512;
	case RTSpecialName = 1024;
	case HasFieldMarshal = 4096;
	case HasDefault = 8192;
	case HasFieldRVA = 32768;
	case ReservedMask = 38144;
}
