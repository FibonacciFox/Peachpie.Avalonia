<?php
namespace System\Runtime;
/**
 */
enum GCLatencyMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Batch = 0;
	case Interactive = 1;
	case LowLatency = 2;
	case SustainedLowLatency = 3;
	case NoGCRegion = 4;
}
