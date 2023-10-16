<?php
namespace System\Globalization;
/**
 */
enum UnicodeCategory implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case UppercaseLetter = 0;
	case LowercaseLetter = 1;
	case TitlecaseLetter = 2;
	case ModifierLetter = 3;
	case OtherLetter = 4;
	case NonSpacingMark = 5;
	case SpacingCombiningMark = 6;
	case EnclosingMark = 7;
	case DecimalDigitNumber = 8;
	case LetterNumber = 9;
	case OtherNumber = 10;
	case SpaceSeparator = 11;
	case LineSeparator = 12;
	case ParagraphSeparator = 13;
	case Control = 14;
	case Format = 15;
	case Surrogate = 16;
	case PrivateUse = 17;
	case ConnectorPunctuation = 18;
	case DashPunctuation = 19;
	case OpenPunctuation = 20;
	case ClosePunctuation = 21;
	case InitialQuotePunctuation = 22;
	case FinalQuotePunctuation = 23;
	case OtherPunctuation = 24;
	case MathSymbol = 25;
	case CurrencySymbol = 26;
	case ModifierSymbol = 27;
	case OtherSymbol = 28;
	case OtherNotAssigned = 29;
}
