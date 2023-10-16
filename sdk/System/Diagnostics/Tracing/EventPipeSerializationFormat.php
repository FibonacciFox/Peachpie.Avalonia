<?php
namespace System\Diagnostics\Tracing;
/**
 */
enum EventPipeSerializationFormat implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case NetPerf = 0;
	case NetTrace = 1;
}
