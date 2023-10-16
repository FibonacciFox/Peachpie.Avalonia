<?php
namespace System\IO\Pipes;
/**
 */
enum PipeDirection implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case In = 1;
	case Out = 2;
	case InOut = 3;
}
