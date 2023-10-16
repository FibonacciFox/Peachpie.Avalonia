<?php
namespace System\Globalization;
/**
 */
enum FORMATFLAGS implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case UseGenitiveMonth = 1;
	case UseLeapYearMonth = 2;
	case UseSpacesInMonthNames = 4;
	case UseHebrewParsing = 8;
	case UseSpacesInDayNames = 16;
	case UseDigitPrefixInTokens = 32;
}
