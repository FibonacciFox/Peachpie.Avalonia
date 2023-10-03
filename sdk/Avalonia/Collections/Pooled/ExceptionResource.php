<?php
namespace Avalonia\Collections\Pooled;
/**
 */
enum ExceptionResource implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case ArgumentOutOfRange_Index = 0;
	case ArgumentOutOfRange_Count = 1;
	case Arg_ArrayPlusOffTooSmall = 2;
	case NotSupported_ReadOnlyCollection = 3;
	case Arg_RankMultiDimNotSupported = 4;
	case Arg_NonZeroLowerBound = 5;
	case ArgumentOutOfRange_ListInsert = 6;
	case ArgumentOutOfRange_NeedNonNegNum = 7;
	case ArgumentOutOfRange_SmallCapacity = 8;
	case Argument_InvalidOffLen = 9;
	case ArgumentOutOfRange_BiggerThanCollection = 10;
	case Serialization_MissingKeys = 11;
	case Serialization_NullKey = 12;
	case NotSupported_KeyCollectionSet = 13;
	case NotSupported_ValueCollectionSet = 14;
	case InvalidOperation_NullArray = 15;
	case InvalidOperation_HSCapacityOverflow = 16;
	case NotSupported_StringComparison = 17;
	case ConcurrentCollection_SyncRoot_NotSupported = 18;
	case ArgumentException_OtherNotArrayOfCorrectLength = 19;
	case ArgumentOutOfRange_EndIndexStartIndex = 20;
	case ArgumentOutOfRange_HugeArrayNotSupported = 21;
	case Argument_AddingDuplicate = 22;
	case Argument_InvalidArgumentForComparison = 23;
	case Arg_LowerBoundsMustMatch = 24;
	case Arg_MustBeType = 25;
	case InvalidOperation_IComparerFailed = 26;
	case NotSupported_FixedSizeCollection = 27;
	case Rank_MultiDimNotSupported = 28;
	case Arg_TypeNotSupported = 29;
}
