<?php
namespace System;
/**
 */
enum TimeZoneInfoOptions implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 1;
	case NoThrowOnInvalidTime = 2;
}
