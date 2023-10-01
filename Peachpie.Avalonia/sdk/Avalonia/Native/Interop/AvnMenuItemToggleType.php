<?php
namespace Avalonia\Native\Interop;
/**
 */
enum AvnMenuItemToggleType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case CheckMark = 1;
	case Radio = 2;
}
