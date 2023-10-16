<?php
namespace System\Diagnostics\Tracing;
/**
 */
enum EventChannelType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Admin = 1;
	case Operational = 2;
	case Analytic = 3;
	case Debug = 4;
}
