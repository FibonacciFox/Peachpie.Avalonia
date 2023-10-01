<?php
namespace Avalonia\Controls;
/**
 */
enum PlacementMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Pointer = 0;
	case Bottom = 1;
	case Right = 2;
	case Left = 3;
	case Top = 4;
	case Center = 5;
	case AnchorAndGravity = 6;
	case TopEdgeAlignedLeft = 7;
	case TopEdgeAlignedRight = 8;
	case BottomEdgeAlignedLeft = 9;
	case BottomEdgeAlignedRight = 10;
	case LeftEdgeAlignedTop = 11;
	case LeftEdgeAlignedBottom = 12;
	case RightEdgeAlignedTop = 13;
	case RightEdgeAlignedBottom = 14;
}
