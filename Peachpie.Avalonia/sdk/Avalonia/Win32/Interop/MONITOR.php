<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum MONITOR implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case MONITOR_DEFAULTTONULL = 0;
	case MONITOR_DEFAULTTOPRIMARY = 1;
	case MONITOR_DEFAULTTONEAREST = 2;
}
