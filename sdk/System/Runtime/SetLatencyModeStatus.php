<?php
namespace System\Runtime;
/**
 */
enum SetLatencyModeStatus implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Succeeded = 0;
	case NoGCInProgress = 1;
}
