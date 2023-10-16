<?php
namespace System\IO\Pipes;
/**
 */
enum PipeTransmissionMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Byte = 0;
	case Message = 1;
}
