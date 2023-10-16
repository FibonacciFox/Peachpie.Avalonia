<?php
namespace System;
/**
 */
enum ParseFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case HaveYear = 1;
	case HaveMonth = 2;
	case HaveDay = 4;
	case HaveHour = 8;
	case HaveMinute = 16;
	case HaveSecond = 32;
	case HaveTime = 64;
	case HaveDate = 128;
	case TimeZoneUsed = 256;
	case TimeZoneUtc = 512;
	case ParsedMonthName = 1024;
	case CaptureOffset = 2048;
	case YearDefault = 4096;
	case Rfc1123Pattern = 8192;
	case UtcSortPattern = 16384;
}
