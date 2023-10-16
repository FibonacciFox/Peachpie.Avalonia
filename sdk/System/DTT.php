<?php
namespace System;
/**
 */
enum DTT implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case End = 0;
	case NumEnd = 1;
	case NumAmpm = 2;
	case NumSpace = 3;
	case NumDatesep = 4;
	case NumTimesep = 5;
	case MonthEnd = 6;
	case MonthSpace = 7;
	case MonthDatesep = 8;
	case NumDatesuff = 9;
	case NumTimesuff = 10;
	case DayOfWeek = 11;
	case YearSpace = 12;
	case YearDateSep = 13;
	case YearEnd = 14;
	case TimeZone = 15;
	case Era = 16;
	case NumUTCTimeMark = 17;
	case Unk = 18;
	case NumLocalTimeMark = 19;
	case Max = 20;
}
