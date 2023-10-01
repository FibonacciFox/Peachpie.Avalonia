<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum NIIF implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case NONE = 0;
	case INFO = 1;
	case WARNING = 2;
	case ERROR = 3;
	case USER = 4;
	case ICON_MASK = 15;
	case NOSOUND = 16;
	case LARGE_ICON = 32;
	case RESPECT_QUIET_TIME = 128;
}
