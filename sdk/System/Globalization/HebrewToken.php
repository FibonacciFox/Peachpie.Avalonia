<?php
namespace System\Globalization;
/**
 */
enum HebrewToken implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Invalid = 0;
	case Digit400 = 1;
	case Digit200_300 = 2;
	case Digit100 = 3;
	case Digit10 = 4;
	case Digit1 = 5;
	case Digit6_7 = 6;
	case Digit7 = 7;
	case Digit9 = 8;
	case SingleQuote = 9;
	case DoubleQuote = -1;
}
