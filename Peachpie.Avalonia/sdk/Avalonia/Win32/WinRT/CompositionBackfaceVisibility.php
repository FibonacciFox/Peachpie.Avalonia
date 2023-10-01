<?php
namespace Avalonia\Win32\WinRT;
/**
 */
enum CompositionBackfaceVisibility implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Inherit = 0;
	case Visible = 1;
	case Hidden = 2;
}
