<?php
namespace System\Threading\Tasks;
/**
 */
enum TaskStatus implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Created = 0;
	case WaitingForActivation = 1;
	case WaitingToRun = 2;
	case Running = 3;
	case WaitingForChildrenToComplete = 4;
	case RanToCompletion = 5;
	case Canceled = 6;
	case Faulted = 7;
}
