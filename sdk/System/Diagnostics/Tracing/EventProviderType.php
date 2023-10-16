<?php
namespace System\Diagnostics\Tracing;
/**
 */
enum EventProviderType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case ETW = 1;
	case EventPipe = 2;
}
