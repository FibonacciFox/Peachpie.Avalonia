<?php
namespace System\Buffers;
/**
 */
enum BufferDroppedReason implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Full = 0;
	case OverMaximumSize = 1;
}
