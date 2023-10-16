<?php
namespace System\Threading\Tasks;
/**
 */
enum TaskCreationOptions implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case PreferFairness = 1;
	case LongRunning = 2;
	case AttachedToParent = 4;
	case DenyChildAttach = 8;
	case HideScheduler = 16;
	case RunContinuationsAsynchronously = 64;
}
