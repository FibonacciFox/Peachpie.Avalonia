<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum Icons implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case ICON_SMALL = 0;
	case ICON_BIG = 1;
}
