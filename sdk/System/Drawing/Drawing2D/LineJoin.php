<?php
namespace System\Drawing\Drawing2D;
/**
 */
enum LineJoin implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Miter = 0;
	case Bevel = 1;
	case Round = 2;
	case MiterClipped = 3;
}
