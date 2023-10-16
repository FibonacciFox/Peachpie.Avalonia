<?php
namespace System\Drawing\Drawing2D;
/**
 */
enum PenType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case SolidColor = 0;
	case HatchFill = 1;
	case TextureFill = 2;
	case PathGradient = 3;
	case LinearGradient = 4;
}
