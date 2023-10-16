<?php
namespace System\Threading\Tasks\Sources;
/**
 */
enum ValueTaskSourceOnCompletedFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case UseSchedulingContext = 1;
	case FlowExecutionContext = 2;
}
