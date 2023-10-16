<?php
namespace System;
/**
 */
enum EndNoGCRegionStatus implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Succeeded = 0;
	case NotInProgress = 1;
	case GCInduced = 2;
	case AllocationExceeded = 3;
}
