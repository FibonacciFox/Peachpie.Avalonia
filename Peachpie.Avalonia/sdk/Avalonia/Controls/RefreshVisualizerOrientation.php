<?php
namespace Avalonia\Controls;
/**
 */
enum RefreshVisualizerOrientation implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Auto = 0;
	case Normal = 1;
	case Rotate90DegreesCounterclockwise = 2;
	case Rotate270DegreesCounterclockwise = 3;
}
