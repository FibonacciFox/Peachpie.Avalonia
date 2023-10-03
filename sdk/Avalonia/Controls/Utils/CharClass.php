<?php
namespace Avalonia\Controls\Utils;
/**
 */
enum CharClass implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case CharClassUnknown = 0;
	case CharClassWhitespace = 1;
	case CharClassAlphaNumeric = 2;
}
