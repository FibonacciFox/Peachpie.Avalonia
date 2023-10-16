<?php
namespace System\Runtime;
/**
 */
enum GCLargeObjectHeapCompactionMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Default = 1;
	case CompactOnce = 2;
}
