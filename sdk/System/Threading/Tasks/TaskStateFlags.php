<?php
namespace System\Threading\Tasks;
/**
 */
enum TaskStateFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Started = 65535;
	case DelegateInvoked = 65536;
	case Disposed = 131072;
	case ExceptionObservedByParent = 262144;
	case CancellationAcknowledged = 524288;
	case Faulted = 1048576;
	case Canceled = 2097152;
	case WaitingOnChildren = 4194304;
	case RanToCompletion = 8388608;
	case WaitingForActivation = 16777216;
	case CompletionReserved = 23068672;
	case WaitCompletionNotification = 33554432;
	case ExecutionContextIsNull = 67108864;
	case TaskScheduledWasFired = 268435456;
	case CompletedMask = 536870912;
	case OptionsMask = 1073741824;
}
