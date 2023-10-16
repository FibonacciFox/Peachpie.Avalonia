<?php
namespace System\Drawing\Drawing2D;
/**
 */
enum LineCap implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Flat = 0;
	case Square = 1;
	case Round = 2;
	case Triangle = 3;
	case NoAnchor = 16;
	case SquareAnchor = 17;
	case RoundAnchor = 18;
	case DiamondAnchor = 19;
	case ArrowAnchor = 20;
	case AnchorMask = 240;
	case Custom = 255;
}
