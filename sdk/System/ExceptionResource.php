<?php
namespace System;
/**
 */
enum ExceptionResource implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case ArgumentOutOfRange_IndexMustBeLessOrEqual = 0;
	case ArgumentOutOfRange_IndexMustBeLess = 1;
	case ArgumentOutOfRange_IndexCount = 2;
	case ArgumentOutOfRange_IndexCountBuffer = 3;
	case ArgumentOutOfRange_Count = 4;
	case ArgumentOutOfRange_Year = 5;
	case Arg_ArrayPlusOffTooSmall = 6;
	case NotSupported_ReadOnlyCollection = 7;
	case Arg_RankMultiDimNotSupported = 8;
	case Arg_NonZeroLowerBound = 9;
	case ArgumentOutOfRange_GetCharCountOverflow = 10;
	case ArgumentOutOfRange_ListInsert = 11;
	case ArgumentOutOfRange_NeedNonNegNum = 12;
	case ArgumentOutOfRange_NotGreaterThanBufferLength = 13;
	case ArgumentOutOfRange_SmallCapacity = 14;
	case Argument_InvalidOffLen = 15;
	case Argument_CannotExtractScalar = 16;
	case ArgumentOutOfRange_BiggerThanCollection = 17;
	case Serialization_MissingKeys = 18;
	case Serialization_NullKey = 19;
	case NotSupported_KeyCollectionSet = 20;
	case NotSupported_ValueCollectionSet = 21;
	case InvalidOperation_NullArray = 22;
	case TaskT_TransitionToFinal_AlreadyCompleted = 23;
	case TaskCompletionSourceT_TrySetException_NullException = 24;
	case TaskCompletionSourceT_TrySetException_NoExceptions = 25;
	case NotSupported_StringComparison = 26;
	case ConcurrentCollection_SyncRoot_NotSupported = 27;
	case Task_MultiTaskContinuation_NullTask = 28;
	case InvalidOperation_WrongAsyncResultOrEndCalledMultiple = 29;
	case Task_MultiTaskContinuation_EmptyTaskList = 30;
	case Task_Start_TaskCompleted = 31;
	case Task_Start_Promise = 32;
	case Task_Start_ContinuationTask = 33;
	case Task_Start_AlreadyStarted = 34;
	case Task_RunSynchronously_Continuation = 35;
	case Task_RunSynchronously_Promise = 36;
	case Task_RunSynchronously_TaskCompleted = 37;
	case Task_RunSynchronously_AlreadyStarted = 38;
	case AsyncMethodBuilder_InstanceNotInitialized = 39;
	case Task_ContinueWith_ESandLR = 40;
	case Task_ContinueWith_NotOnAnything = 41;
	case Task_InvalidTimerTimeSpan = 42;
	case Task_Delay_InvalidMillisecondsDelay = 43;
	case Task_Dispose_NotCompleted = 44;
	case Task_ThrowIfDisposed = 45;
	case Task_WaitMulti_NullTask = 46;
	case ArgumentException_OtherNotArrayOfCorrectLength = 47;
	case ArgumentNull_Array = 48;
	case ArgumentNull_SafeHandle = 49;
	case ArgumentOutOfRange_EndIndexStartIndex = 50;
	case ArgumentOutOfRange_Enum = 51;
	case ArgumentOutOfRange_HugeArrayNotSupported = 52;
	case Argument_AddingDuplicate = 53;
	case Argument_InvalidArgumentForComparison = 54;
	case Arg_LowerBoundsMustMatch = 55;
	case Arg_MustBeType = 56;
	case Arg_Need1DArray = 57;
	case Arg_Need2DArray = 58;
	case Arg_Need3DArray = 59;
	case Arg_NeedAtLeast1Rank = 60;
	case Arg_RankIndices = 61;
	case Arg_RanksAndBounds = 62;
	case InvalidOperation_IComparerFailed = 63;
	case NotSupported_FixedSizeCollection = 64;
	case Rank_MultiDimNotSupported = 65;
	case Arg_TypeNotSupported = 66;
	case Argument_SpansMustHaveSameLength = 67;
	case Argument_InvalidFlag = 68;
	case CancellationTokenSource_Disposed = 69;
	case Argument_AlignmentMustBePow2 = 70;
}
