<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
enum SYSKIND implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case SYS_WIN16 = 0;
	case SYS_WIN32 = 1;
	case SYS_MAC = 2;
	case SYS_WIN64 = 3;
}
