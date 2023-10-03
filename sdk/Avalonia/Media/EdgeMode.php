<?php
namespace Avalonia\Media;
/**
 */
enum EdgeMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Unspecified = 0;
	case Antialias = 1;
	case Aliased = 2;
}
