<?php
namespace System\Buffers;
/**
 */
enum OperationStatus implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Done = 0;
	case DestinationTooSmall = 1;
	case NeedMoreData = 2;
	case InvalidData = 3;
}
