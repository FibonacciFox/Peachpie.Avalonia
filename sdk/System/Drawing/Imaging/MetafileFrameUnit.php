<?php
namespace System\Drawing\Imaging;
/**
 */
enum MetafileFrameUnit implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Pixel = 2;
	case Point = 3;
	case Inch = 4;
	case Document = 5;
	case Millimeter = 6;
	case GdiCompatible = 7;
}
