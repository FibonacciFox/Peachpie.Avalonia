<?php
namespace Avalonia\Controls;
/**
 */
enum WindowEdge implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case NorthWest = 0;
	case North = 1;
	case NorthEast = 2;
	case West = 3;
	case East = 4;
	case SouthWest = 5;
	case South = 6;
	case SouthEast = 7;
}
