<?php
namespace Avalonia\Media;
/**
 */
enum FontStretch implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Normal = 1;
	case UltraCondensed = 2;
	case ExtraCondensed = 3;
	case Condensed = 4;
	case SemiCondensed = 5;
	case SemiExpanded = 6;
	case Expanded = 7;
	case ExtraExpanded = 8;
	case UltraExpanded = 9;
}
