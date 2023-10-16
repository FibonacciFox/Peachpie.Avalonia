<?php
namespace System\Globalization;
/**
 */
enum StandardFormat implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case C = 0;
	case G = 1;
	case g = 2;
}
