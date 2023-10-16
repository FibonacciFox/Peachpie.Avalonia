<?php
namespace System\Reflection;
/**
 */
enum MethodImplAttributes implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case CodeTypeMask = 0;
	case IL = 0;
	case Native = 1;
	case OPTIL = 2;
	case Runtime = 3;
	case ManagedMask = 3;
	case Unmanaged = 4;
	case Managed = 4;
	case ForwardRef = 8;
	case PreserveSig = 16;
	case InternalCall = 32;
	case Synchronized = 64;
	case NoInlining = 128;
	case AggressiveInlining = 256;
	case NoOptimization = 512;
	case AggressiveOptimization = 4096;
	case MaxMethodImplVal = 65535;
}
