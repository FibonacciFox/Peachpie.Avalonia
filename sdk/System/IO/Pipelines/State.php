<?php
namespace System\IO\Pipelines;
/**
 */
enum State implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Reading = 1;
	case ReadingTentative = 2;
	case Writing = 4;
}
