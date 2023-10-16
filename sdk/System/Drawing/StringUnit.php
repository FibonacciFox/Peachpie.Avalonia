<?php
namespace System\Drawing;
/**
 */
enum StringUnit implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case World = 0;
	case Display = 1;
	case Pixel = 2;
	case Point = 3;
	case Inch = 4;
	case Document = 5;
	case Millimeter = 6;
	case Em = 32;
}
