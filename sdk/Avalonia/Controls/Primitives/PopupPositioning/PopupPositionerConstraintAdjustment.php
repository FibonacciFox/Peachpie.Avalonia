<?php
namespace Avalonia\Controls\Primitives\PopupPositioning;
/**
 */
enum PopupPositionerConstraintAdjustment implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case SlideX = 1;
	case SlideY = 2;
	case FlipX = 4;
	case FlipY = 8;
	case ResizeX = 16;
	case ResizeY = 16;
	case All = 31;
}
