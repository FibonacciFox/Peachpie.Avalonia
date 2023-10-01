<?php
namespace Avalonia\Media\TextFormatting\Unicode;
/**
 */
enum LineBreakClass implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case OpenPunctuation = 0;
	case ClosePunctuation = 1;
	case CloseParenthesis = 2;
	case Quotation = 3;
	case Glue = 4;
	case Nonstarter = 5;
	case Exclamation = 6;
	case BreakSymbols = 7;
	case InfixNumeric = 8;
	case PrefixNumeric = 9;
	case PostfixNumeric = 10;
	case Numeric = 11;
	case Alphabetic = 12;
	case HebrewLetter = 13;
	case Ideographic = 14;
	case Inseparable = 15;
	case Hyphen = 16;
	case BreakAfter = 17;
	case BreakBefore = 18;
	case BreakBoth = 19;
	case ZWSpace = 20;
	case CombiningMark = 21;
	case WordJoiner = 22;
	case H2 = 23;
	case H3 = 24;
	case JL = 25;
	case JV = 26;
	case JT = 27;
	case RegionalIndicator = 28;
	case EBase = 29;
	case EModifier = 30;
	case ZWJ = 31;
	case ContingentBreak = 32;
	case Unknown = 33;
	case Ambiguous = 34;
	case MandatoryBreak = 35;
	case ConditionalJapaneseStarter = 36;
	case CarriageReturn = 37;
	case LineFeed = 38;
	case NextLine = 39;
	case ComplexContext = 40;
	case Surrogate = 41;
	case Space = 42;
}
