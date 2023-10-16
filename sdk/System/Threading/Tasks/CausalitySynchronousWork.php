<?php
namespace System\Threading\Tasks;
/**
 */
enum CausalitySynchronousWork implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case CompletionNotification = 0;
	case ProgressNotification = 1;
	case Execution = 2;
}
