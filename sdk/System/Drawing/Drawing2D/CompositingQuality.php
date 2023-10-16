<?php
namespace System\Drawing\Drawing2D;
/**
 */
enum CompositingQuality implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Invalid = 0;
	case Default = 1;
	case HighSpeed = 2;
	case HighQuality = 3;
	case GammaCorrected = 4;
	case AssumeLinear = -1;
}
