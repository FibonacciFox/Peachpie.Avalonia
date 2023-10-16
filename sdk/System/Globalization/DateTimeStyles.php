<?php
namespace System\Globalization;
/**
 */
enum DateTimeStyles implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case AllowLeadingWhite = 1;
	case AllowTrailingWhite = 2;
	case AllowInnerWhite = 4;
	case AllowWhiteSpaces = 7;
	case NoCurrentDateDefault = 8;
	case AdjustToUniversal = 16;
	case AssumeLocal = 32;
	case AssumeUniversal = 64;
	case RoundtripKind = 128;
}
