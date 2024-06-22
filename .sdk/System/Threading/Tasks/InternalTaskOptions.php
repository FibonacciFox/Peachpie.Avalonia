<?php
namespace System\Threading\Tasks;
enum InternalTaskOptions
{

	
	case None = '0';
	case InternalOptionsMask = '65280';
	case ContinuationTask = '512';
	case PromiseTask = '1024';
	case LazyCancellation = '4096';
	case QueuedByRuntime = '8192';
	case DoNotDispose = '16384';

}