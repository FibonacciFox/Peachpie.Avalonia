<?php
namespace System\Runtime\Intrinsics\X86;
/**
 */
enum FloatComparisonMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case OrderedEqualNonSignaling = 0;
	case OrderedLessThanSignaling = 1;
	case OrderedLessThanOrEqualSignaling = 2;
	case UnorderedNonSignaling = 3;
	case UnorderedNotEqualNonSignaling = 4;
	case UnorderedNotLessThanSignaling = 5;
	case UnorderedNotLessThanOrEqualSignaling = 6;
	case OrderedNonSignaling = 7;
	case UnorderedEqualNonSignaling = 8;
	case UnorderedNotGreaterThanOrEqualSignaling = 9;
	case UnorderedNotGreaterThanSignaling = 10;
	case OrderedFalseNonSignaling = 11;
	case OrderedNotEqualNonSignaling = 12;
	case OrderedGreaterThanOrEqualSignaling = 13;
	case OrderedGreaterThanSignaling = 14;
	case UnorderedTrueNonSignaling = 15;
	case OrderedEqualSignaling = 16;
	case OrderedLessThanNonSignaling = 17;
	case OrderedLessThanOrEqualNonSignaling = 18;
	case UnorderedSignaling = 19;
	case UnorderedNotEqualSignaling = 20;
	case UnorderedNotLessThanNonSignaling = 21;
	case UnorderedNotLessThanOrEqualNonSignaling = 22;
	case OrderedSignaling = 23;
	case UnorderedEqualSignaling = 24;
	case UnorderedNotGreaterThanOrEqualNonSignaling = 25;
	case UnorderedNotGreaterThanNonSignaling = 26;
	case OrderedFalseSignaling = 27;
	case OrderedNotEqualSignaling = 28;
	case OrderedGreaterThanOrEqualNonSignaling = 29;
	case OrderedGreaterThanNonSignaling = 30;
	case UnorderedTrueSignaling = 31;
}
