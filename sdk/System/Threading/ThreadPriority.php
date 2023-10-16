<?php
namespace System\Threading;
/**
 */
enum ThreadPriority implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Lowest = 0;
	case BelowNormal = 1;
	case Normal = 2;
	case AboveNormal = 3;
	case Highest = 4;
}
