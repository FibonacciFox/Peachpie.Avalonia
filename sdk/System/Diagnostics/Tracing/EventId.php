<?php
namespace System\Diagnostics\Tracing;
/**
 */
enum EventId implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case AppContextSwitch = 1;
	case ProcessorCount = 2;
}
