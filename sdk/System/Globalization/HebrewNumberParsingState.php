<?php
namespace System\Globalization;
/**
 */
enum HebrewNumberParsingState implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case InvalidHebrewNumber = 0;
	case NotHebrewDigit = 1;
	case FoundEndOfHebrewNumber = 2;
	case ContinueParsing = 3;
}
