<?php
namespace Avalonia\Controls\Primitives\PopupPositioning;
/**
 */
enum PopupAnchor implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Top = 1;
	case Bottom = 2;
	case Left = 3;
	case Right = 4;
	case TopLeft = 5;
	case TopRight = 6;
	case BottomLeft = 8;
	case BottomRight = 9;
	case VerticalMask = 10;
	case HorizontalMask = 12;
	case AllMask = 15;
}
