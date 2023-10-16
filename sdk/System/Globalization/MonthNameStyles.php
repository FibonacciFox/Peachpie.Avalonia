<?php
namespace System\Globalization;
/**
 */
enum MonthNameStyles implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Regular = 0;
	case Genitive = 1;
	case LeapYear = 2;
}
