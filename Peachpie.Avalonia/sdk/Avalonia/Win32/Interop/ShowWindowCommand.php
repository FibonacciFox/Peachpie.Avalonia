<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum ShowWindowCommand implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Hide = 0;
	case Normal = 1;
	case ShowMinimized = 2;
	case Maximize = 3;
	case ShowMaximized = 3;
	case ShowNoActivate = 4;
	case Show = 5;
	case Minimize = 6;
	case ShowMinNoActive = 7;
	case ShowNA = 8;
	case Restore = 9;
	case ShowDefault = 10;
	case ForceMinimize = 11;
}
