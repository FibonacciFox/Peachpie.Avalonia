<?php
namespace System\Threading;
/**
 */
enum ThreadState implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Running = 0;
	case StopRequested = 1;
	case SuspendRequested = 2;
	case Background = 4;
	case Unstarted = 8;
	case Stopped = 16;
	case WaitSleepJoin = 32;
	case Suspended = 64;
	case AbortRequested = 128;
	case Aborted = 256;
}
