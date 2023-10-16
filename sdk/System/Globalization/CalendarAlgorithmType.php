<?php
namespace System\Globalization;
/**
 */
enum CalendarAlgorithmType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Unknown = 0;
	case SolarCalendar = 1;
	case LunarCalendar = 2;
	case LunisolarCalendar = 3;
}
