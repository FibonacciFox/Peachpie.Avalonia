<?php
namespace System\Diagnostics\Tracing;
/**
 */
enum EventChannel implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Admin = 16;
	case Operational = 17;
	case Analytic = 18;
	case Debug = 19;
}
