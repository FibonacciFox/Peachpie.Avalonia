<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum DwmWindowCornerPreference implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case DWMWCP_DEFAULT = 0;
	case DWMWCP_DONOTROUND = 1;
	case DWMWCP_ROUND = 2;
	case DWMWCP_ROUNDSMALL = 3;
}
