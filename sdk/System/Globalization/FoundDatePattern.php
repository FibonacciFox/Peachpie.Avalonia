<?php
namespace System\Globalization;
/**
 */
enum FoundDatePattern implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case FoundYearPatternFlag = 1;
	case FoundMonthPatternFlag = 2;
	case FoundDayPatternFlag = 4;
	case FoundYMDPatternFlag = 7;
}
