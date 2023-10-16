<?php
namespace System\Drawing\Drawing2D;
/**
 */
enum WarpMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Perspective = 0;
	case Bilinear = 1;
}
