<?php
namespace System\Buffers;
/**
 */
enum MemoryPressure implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Low = 0;
	case Medium = 1;
	case High = 2;
}
