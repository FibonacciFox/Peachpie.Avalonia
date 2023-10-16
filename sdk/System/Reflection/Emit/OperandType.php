<?php
namespace System\Reflection\Emit;
/**
 */
enum OperandType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case InlineBrTarget = 0;
	case InlineField = 1;
	case InlineI = 2;
	case InlineI8 = 3;
	case InlineMethod = 4;
	case InlineNone = 5;
	case InlinePhi = 6;
	case InlineR = 7;
	case InlineSig = 9;
	case InlineString = 10;
	case InlineSwitch = 11;
	case InlineTok = 12;
	case InlineType = 13;
	case InlineVar = 14;
	case ShortInlineBrTarget = 15;
	case ShortInlineI = 16;
	case ShortInlineR = 17;
	case ShortInlineVar = 18;
}
