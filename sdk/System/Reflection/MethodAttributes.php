<?php
namespace System\Reflection;
/**
 */
enum MethodAttributes implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case MemberAccessMask = 0;
	case PrivateScope = 0;
	case Private = 1;
	case FamANDAssem = 2;
	case Assembly = 3;
	case Family = 4;
	case FamORAssem = 5;
	case Public = 6;
	case Static = 7;
	case Final = 8;
	case Virtual = 16;
	case HideBySig = 32;
	case CheckAccessOnOverride = 64;
	case VtableLayoutMask = 128;
	case ReuseSlot = 256;
	case NewSlot = 256;
	case Abstract = 512;
	case SpecialName = 1024;
	case PinvokeImpl = 2048;
	case UnmanagedExport = 4096;
	case RTSpecialName = 8192;
	case HasSecurity = 16384;
	case RequireSecObject = 32768;
	case ReservedMask = 53248;
}
