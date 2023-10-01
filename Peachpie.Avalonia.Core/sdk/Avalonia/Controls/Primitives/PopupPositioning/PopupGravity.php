<?php
namespace Avalonia\Controls\Primitives\PopupPositioning;
/**
 */
enum PopupGravity implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Top = 1;
	case Bottom = 2;
	case Left = 4;
	case Right = 5;
	case TopLeft = 6;
	case TopRight = 8;
	case BottomLeft = 9;
	case BottomRight = 10;
}
