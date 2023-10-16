<?php
namespace System\IO\Pipelines;
/**
 */
enum ExceptionArgument implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case minimumSize = 0;
	case bytes = 1;
	case callback = 2;
	case options = 3;
	case pauseWriterThreshold = 4;
	case resumeWriterThreshold = 5;
	case sizeHint = 6;
}
