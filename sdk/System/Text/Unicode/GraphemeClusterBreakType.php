<?php
namespace System\Text\Unicode;
/**
 */
enum GraphemeClusterBreakType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Other = 0;
	case CR = 1;
	case LF = 2;
	case Control = 3;
	case Extend = 4;
	case ZWJ = 5;
	case Regional_Indicator = 6;
	case Prepend = 7;
	case SpacingMark = 8;
	case L = 9;
	case V = 10;
	case T = 11;
	case LV = 12;
	case LVT = 13;
	case Extended_Pictograph = 14;
}
