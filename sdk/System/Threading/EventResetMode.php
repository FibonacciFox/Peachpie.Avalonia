<?php
namespace System\Threading;
/**
 */
enum EventResetMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case AutoReset = 0;
	case ManualReset = 1;
}
