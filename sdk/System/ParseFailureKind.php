<?php
namespace System;
/**
 */
enum ParseFailureKind implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case ArgumentNull = 1;
	case Format = 2;
	case FormatWithParameter = 3;
	case FormatWithOriginalDateTime = 4;
	case FormatWithFormatSpecifier = 5;
	case FormatWithOriginalDateTimeAndParameter = 6;
	case FormatBadDateTimeCalendar = 7;
	case WrongParts = 8;
}
