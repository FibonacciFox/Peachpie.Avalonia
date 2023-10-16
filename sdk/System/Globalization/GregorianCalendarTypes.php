<?php
namespace System\Globalization;
/**
 */
enum GregorianCalendarTypes implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Localized = 1;
	case USEnglish = 2;
	case MiddleEastFrench = 9;
	case Arabic = 10;
	case TransliteratedEnglish = 11;
	case TransliteratedFrench = 12;
}
