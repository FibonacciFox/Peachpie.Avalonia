<?php
namespace System\IO\Pipelines;
/**
 */
enum ResultFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Canceled = 1;
	case Completed = 2;
}
