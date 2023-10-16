<?php
namespace System\Globalization;
/**
 */
enum TimeSpanStyles implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case AssumeNegative = 1;
}
