<?php
namespace System\Globalization;
/**
 */
enum NumberStyles implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case AllowLeadingWhite = 1;
	case AllowTrailingWhite = 2;
	case AllowLeadingSign = 4;
	case AllowTrailingSign = 7;
	case AllowParentheses = 8;
	case AllowDecimalPoint = 16;
	case AllowThousands = 32;
	case AllowExponent = 64;
	case AllowCurrencySymbol = 111;
	case AllowHexSpecifier = 128;
	case Integer = 167;
	case HexNumber = 256;
	case Number = 383;
	case Float = 511;
	case Currency = 512;
	case Any = 515;
}
