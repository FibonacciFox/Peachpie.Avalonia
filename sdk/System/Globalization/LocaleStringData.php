<?php
namespace System\Globalization;
/**
 */
enum LocaleStringData implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case LocalizedDisplayName = 2;
	case EnglishDisplayName = 3;
	case NativeDisplayName = 4;
	case LocalizedLanguageName = 6;
	case EnglishLanguageName = 8;
	case NativeLanguageName = 12;
	case LocalizedCountryName = 14;
	case EnglishCountryName = 15;
	case NativeCountryName = 19;
	case AbbreviatedWindowsLanguageName = 20;
	case ListSeparator = 21;
	case DecimalSeparator = 22;
	case ThousandSeparator = 23;
	case Digits = 40;
	case MonetarySymbol = 41;
	case CurrencyEnglishName = 80;
	case CurrencyNativeName = 81;
	case Iso4217MonetarySymbol = 89;
	case MonetaryDecimalSeparator = 89;
	case MonetaryThousandSeparator = 90;
	case AMDesignator = 103;
	case PMDesignator = 104;
	case PositiveSign = 105;
	case NegativeSign = 106;
	case Iso639LanguageTwoLetterName = 107;
	case Iso639LanguageThreeLetterName = 109;
	case Iso639LanguageName = 110;
	case Iso3166CountryName = 111;
	case Iso3166CountryName2 = 114;
	case NaNSymbol = 115;
	case PositiveInfinitySymbol = 118;
	case NegativeInfinitySymbol = 119;
	case ParentName = 4097;
	case ConsoleFallbackName = 4098;
	case PercentSymbol = 4103;
	case PerMilleSymbol = 4104;
}
