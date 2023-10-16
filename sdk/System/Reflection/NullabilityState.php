<?php
namespace System\Reflection;
/**
 */
enum NullabilityState implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Unknown = 0;
	case NotNull = 1;
	case Nullable = 2;
}
