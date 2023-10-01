<?php
namespace Avalonia\Media\TextFormatting\Unicode;
/**
 */
enum GeneralCategory implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Other = 0;
	case Control = 1;
	case Format = 2;
	case Unassigned = 3;
	case PrivateUse = 4;
	case Surrogate = 5;
	case Letter = 6;
	case CasedLetter = 7;
	case LowercaseLetter = 8;
	case ModifierLetter = 9;
	case OtherLetter = 10;
	case TitlecaseLetter = 11;
	case UppercaseLetter = 12;
	case Mark = 13;
	case SpacingMark = 14;
	case EnclosingMark = 15;
	case NonspacingMark = 16;
	case Number = 17;
	case DecimalNumber = 18;
	case LetterNumber = 19;
	case OtherNumber = 20;
	case Punctuation = 21;
	case ConnectorPunctuation = 22;
	case DashPunctuation = 23;
	case ClosePunctuation = 24;
	case FinalPunctuation = 25;
	case InitialPunctuation = 26;
	case OtherPunctuation = 27;
	case OpenPunctuation = 28;
	case Symbol = 29;
	case CurrencySymbol = 30;
	case ModifierSymbol = 31;
	case MathSymbol = 32;
	case OtherSymbol = 33;
	case Separator = 34;
	case LineSeparator = 35;
	case ParagraphSeparator = 36;
	case SpaceSeparator = 37;
}
