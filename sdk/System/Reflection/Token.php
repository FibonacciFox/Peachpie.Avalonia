<?php
namespace System\Reflection;
/**
 */
enum Token implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Equals = 1;
	case Comma = 2;
	case String = 3;
	case End = 4;
}
