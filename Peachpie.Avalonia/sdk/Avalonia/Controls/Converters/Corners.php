<?php
namespace Avalonia\Controls\Converters;
/**
 */
enum Corners implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case TopLeft = 1;
	case TopRight = 2;
	case BottomLeft = 4;
	case BottomRight = 8;
}
