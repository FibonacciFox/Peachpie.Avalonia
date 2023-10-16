<?php
namespace System\Collections\Concurrent;
/**
 */
enum EnumerablePartitionerOptions implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case NoBuffering = 1;
}
