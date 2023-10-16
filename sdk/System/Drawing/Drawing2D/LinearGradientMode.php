<?php
namespace System\Drawing\Drawing2D;
/**
 */
enum LinearGradientMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Horizontal = 0;
	case Vertical = 1;
	case ForwardDiagonal = 2;
	case BackwardDiagonal = 3;
}
