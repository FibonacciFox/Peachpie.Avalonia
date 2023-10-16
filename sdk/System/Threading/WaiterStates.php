<?php
namespace System\Threading;
/**
 */
enum WaiterStates implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case NoWaiters = 1;
	case WriteWaiterSignaled = 2;
	case UpgradeableReadWaiterSignaled = 4;
}
