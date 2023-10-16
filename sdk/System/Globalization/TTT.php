<?php
namespace System\Globalization;
/**
 */
enum TTT implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case End = 1;
	case Num = 2;
	case Sep = 3;
	case NumOverflow = 4;
}
