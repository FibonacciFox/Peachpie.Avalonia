<?php
namespace System\Runtime\CompilerServices;
/**
 */
enum MethodImplOptions implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Unmanaged = 4;
	case NoInlining = 8;
	case ForwardRef = 16;
	case Synchronized = 32;
	case NoOptimization = 64;
	case PreserveSig = 128;
	case AggressiveInlining = 256;
	case AggressiveOptimization = 512;
	case InternalCall = 4096;
}
