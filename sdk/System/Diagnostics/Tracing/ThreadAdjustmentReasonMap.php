<?php
namespace System\Diagnostics\Tracing;
/**
 */
enum ThreadAdjustmentReasonMap implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Warmup = 0;
	case Initializing = 1;
	case RandomMove = 2;
	case ClimbingMove = 3;
	case ChangePoint = 4;
	case Stabilizing = 5;
	case Starvation = 6;
	case ThreadTimedOut = 7;
}
