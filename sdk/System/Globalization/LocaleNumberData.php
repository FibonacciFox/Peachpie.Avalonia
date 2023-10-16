<?php
namespace System\Globalization;
/**
 */
enum LocaleNumberData implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case LanguageId = 1;
	case GeoId = 11;
	case DigitSubstitution = 13;
	case MeasurementSystem = 17;
	case FractionalDigitsCount = 25;
	case NegativeNumberFormat = 27;
	case MonetaryFractionalDigitsCount = 28;
	case PositiveMonetaryNumberFormat = 91;
	case NegativeMonetaryNumberFormat = 112;
	case CalendarType = 116;
	case FirstDayOfWeek = 117;
	case FirstWeekOfYear = 4100;
	case ReadingLayout = 4105;
	case NegativePercentFormat = 4108;
	case PositivePercentFormat = 4109;
	case OemCodePage = 4112;
	case AnsiCodePage = 4113;
	case MacCodePage = 4114;
	case EbcdicCodePage = 4116;
}
