<?php
namespace System\IO\Pipes;
/**
 */
enum PipeOptions implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case WriteThrough = 536870912;
	case Asynchronous = 1073741824;
	case CurrentUserOnly = -2147483648;
}
