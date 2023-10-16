<?php
namespace System;
/**
 */
enum TimeZoneInfoResult implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Success = 0;
	case TimeZoneNotFoundException = 1;
	case InvalidTimeZoneException = 2;
	case SecurityException = 3;
}
