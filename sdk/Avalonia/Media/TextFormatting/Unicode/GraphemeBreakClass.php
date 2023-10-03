<?php
namespace Avalonia\Media\TextFormatting\Unicode;
/**
 */
enum GraphemeBreakClass implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Other = 0;
	case Control = 1;
	case CR = 2;
	case EBase = 3;
	case EBaseGAZ = 4;
	case EModifier = 5;
	case Extend = 6;
	case GlueAfterZwj = 7;
	case L = 8;
	case LF = 9;
	case LV = 10;
	case LVT = 11;
	case Prepend = 12;
	case RegionalIndicator = 13;
	case SpacingMark = 14;
	case T = 15;
	case V = 16;
	case ZWJ = 17;
	case ExtendedPictographic = 18;
}
