<?php
namespace System\Threading;
/**
 */
enum PendingBlockingAdjustment implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Immediately = 1;
	case WithDelayIfNecessary = 2;
}
