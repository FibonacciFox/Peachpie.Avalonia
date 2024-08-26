<?php
namespace System\Threading\Tasks;
enum TaskStateFlags
{
	
	case Started = '65536';
	case DelegateInvoked = '131072';
	case Disposed = '262144';
	case ExceptionObservedByParent = '524288';
	case CancellationAcknowledged = '1048576';
	case Faulted = '2097152';
	case Canceled = '4194304';
	case WaitingOnChildren = '8388608';
	case RanToCompletion = '16777216';
	case WaitingForActivation = '33554432';
	case CompletionReserved = '67108864';
	case WaitCompletionNotification = '268435456';
	case ExecutionContextIsNull = '536870912';
	case TaskScheduledWasFired = '1073741824';
	case CompletedMask = '23068672';
	case OptionsMask = '65535';

}