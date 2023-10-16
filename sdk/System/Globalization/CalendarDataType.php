<?php
namespace System\Globalization;
/**
 */
enum CalendarDataType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Uninitialized = 0;
	case NativeName = 1;
	case MonthDay = 2;
	case ShortDates = 3;
	case LongDates = 4;
	case YearMonths = 5;
	case DayNames = 6;
	case AbbrevDayNames = 7;
	case MonthNames = 8;
	case AbbrevMonthNames = 9;
	case SuperShortDayNames = 10;
	case MonthGenitiveNames = 11;
	case AbbrevMonthGenitiveNames = 12;
	case EraNames = 13;
	case AbbrevEraNames = 14;
}
