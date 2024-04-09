<?php
namespace System\Threading\Tasks;
enum TaskContinuationOptions
{
	
	case None = '0';
	case PreferFairness = '1';
	case LongRunning = '2';
	case AttachedToParent = '4';
	case DenyChildAttach = '8';
	case HideScheduler = '16';
	case LazyCancellation = '32';
	case RunContinuationsAsynchronously = '64';
	case NotOnRanToCompletion = '65536';
	case NotOnFaulted = '131072';
	case NotOnCanceled = '262144';
	case OnlyOnRanToCompletion = '393216';
	case OnlyOnFaulted = '327680';
	case OnlyOnCanceled = '196608';
	case ExecuteSynchronously = '524288';

}