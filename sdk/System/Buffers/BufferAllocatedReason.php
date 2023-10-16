<?php
namespace System\Buffers;
/**
 */
enum BufferAllocatedReason implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Pooled = 0;
	case OverMaximumSize = 1;
	case PoolExhausted = 2;
}
