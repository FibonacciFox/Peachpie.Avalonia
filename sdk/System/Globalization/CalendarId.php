<?php
namespace System\Globalization;
/**
 */
enum CalendarId implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case UNINITIALIZED_VALUE = 0;
	case GREGORIAN = 1;
	case GREGORIAN_US = 2;
	case JAPAN = 3;
	case TAIWAN = 4;
	case KOREA = 5;
	case HIJRI = 6;
	case THAI = 7;
	case HEBREW = 8;
	case GREGORIAN_ME_FRENCH = 9;
	case GREGORIAN_ARABIC = 10;
	case GREGORIAN_XLIT_ENGLISH = 11;
	case GREGORIAN_XLIT_FRENCH = 12;
	case JULIAN = 13;
	case JAPANESELUNISOLAR = 14;
	case CHINESELUNISOLAR = 15;
	case SAKA = 16;
	case LUNAR_ETO_CHN = 17;
	case LUNAR_ETO_KOR = 18;
	case LUNAR_ETO_ROKUYOU = 19;
	case KOREANLUNISOLAR = 20;
	case TAIWANLUNISOLAR = 21;
	case PERSIAN = 22;
	case UMALQURA = 23;
	case LAST_CALENDAR = 23;
}
