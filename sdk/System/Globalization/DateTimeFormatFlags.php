<?php
namespace System\Globalization;
/**
 */
enum DateTimeFormatFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case UseGenitiveMonth = 1;
	case UseLeapYearMonth = 2;
	case UseSpacesInMonthNames = 4;
	case UseHebrewRule = 8;
	case UseSpacesInDayNames = 16;
	case UseDigitPrefixInTokens = 32;
	case NotInitialized = -1;
}
