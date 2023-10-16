<?php
namespace System\Threading\Tasks;
/**
 */
enum InternalTaskOptions implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case InternalOptionsMask = 512;
	case ContinuationTask = 1024;
	case PromiseTask = 4096;
	case LazyCancellation = 8192;
	case QueuedByRuntime = 16384;
	case DoNotDispose = 65280;
}
