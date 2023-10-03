<?php
namespace Avalonia\Platform;
/**
 */
enum ExtendClientAreaChromeHints implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case NoChrome = 0;
	case Default = 1;
	case SystemChrome = 2;
	case PreferSystemChrome = 2;
	case OSXThickTitleBar = 8;
}
