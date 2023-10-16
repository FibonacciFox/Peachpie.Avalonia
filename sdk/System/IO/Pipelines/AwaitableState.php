<?php
namespace System\IO\Pipelines;
/**
 */
enum AwaitableState implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Completed = 1;
	case Running = 2;
	case Canceled = 4;
	case UseSynchronizationContext = 8;
}
