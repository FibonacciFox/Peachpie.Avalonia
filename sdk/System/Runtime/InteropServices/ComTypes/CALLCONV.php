<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
enum CALLCONV implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case CC_CDECL = 1;
	case CC_MSCPASCAL = 2;
	case CC_PASCAL = 2;
	case CC_MACPASCAL = 3;
	case CC_STDCALL = 4;
	case CC_RESERVED = 5;
	case CC_SYSCALL = 6;
	case CC_MPWCDECL = 7;
	case CC_MPWPASCAL = 8;
	case CC_MAX = 9;
}
