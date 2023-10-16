<?php
namespace System\Globalization;
/**
 */
enum IcuLocaleDataParts implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Lcid = 0;
	case AnsiCodePage = 1;
	case OemCodePage = 2;
	case MacCodePage = 3;
	case EbcdicCodePage = 4;
	case GeoId = 5;
	case DigitSubstitutionOrListSeparator = 6;
	case SpecificLocaleIndex = 7;
	case ConsoleLocaleIndex = 8;
}
