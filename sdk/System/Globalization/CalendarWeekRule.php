<?php
namespace System\Globalization;
/**
 */
enum CalendarWeekRule implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case FirstDay = 0;
	case FirstFullWeek = 1;
	case FirstFourDayWeek = 2;
}
