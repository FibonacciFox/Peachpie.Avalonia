<?php
namespace Avalonia\Media\TextFormatting\Unicode;
/**
 */
enum BidiClass implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case LeftToRight = 0;
	case ArabicLetter = 1;
	case ArabicNumber = 2;
	case ParagraphSeparator = 3;
	case BoundaryNeutral = 4;
	case CommonSeparator = 5;
	case EuropeanNumber = 6;
	case EuropeanSeparator = 7;
	case EuropeanTerminator = 8;
	case FirstStrongIsolate = 9;
	case LeftToRightEmbedding = 10;
	case LeftToRightIsolate = 11;
	case LeftToRightOverride = 12;
	case NonspacingMark = 13;
	case OtherNeutral = 14;
	case PopDirectionalFormat = 15;
	case PopDirectionalIsolate = 16;
	case RightToLeft = 17;
	case RightToLeftEmbedding = 18;
	case RightToLeftIsolate = 19;
	case RightToLeftOverride = 20;
	case SegmentSeparator = 21;
	case WhiteSpace = 22;
}
