<?php
namespace System\Diagnostics;
/**
 */
enum TraceFormat implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Normal = 0;
	case TrailingNewLine = 1;
}
