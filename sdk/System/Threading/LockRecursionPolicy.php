<?php
namespace System\Threading;
/**
 */
enum LockRecursionPolicy implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case NoRecursion = 0;
	case SupportsRecursion = 1;
}
