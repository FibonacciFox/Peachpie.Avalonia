<?php
namespace System\Diagnostics\Tracing;
/**
 */
enum EventActivityOptions implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Disable = 2;
	case Recursive = 4;
	case Detachable = 8;
}
