<?php
namespace Avalonia\Native\Interop;
/**
 */
enum AvnExtendClientAreaChromeHints implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case AvnNoChrome = 0;
	case AvnSystemChrome = 1;
	case AvnPreferSystemChrome = 2;
	case AvnOSXThickTitleBar = 2;
	case AvnDefaultChrome = 8;
}
