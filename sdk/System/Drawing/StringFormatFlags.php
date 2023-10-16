<?php
namespace System\Drawing;
/**
 */
enum StringFormatFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case DirectionRightToLeft = 1;
	case DirectionVertical = 2;
	case FitBlackBox = 4;
	case DisplayFormatControl = 32;
	case NoFontFallback = 1024;
	case MeasureTrailingSpaces = 2048;
	case NoWrap = 4096;
	case LineLimit = 8192;
	case NoClip = 16384;
}
