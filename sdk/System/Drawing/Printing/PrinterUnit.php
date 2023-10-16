<?php
namespace System\Drawing\Printing;
/**
 */
enum PrinterUnit implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Display = 0;
	case ThousandthsOfAnInch = 1;
	case HundredthsOfAMillimeter = 2;
	case TenthsOfAMillimeter = 3;
}
