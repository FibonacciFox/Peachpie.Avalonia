<?php
namespace System;
/**
 */
enum NumberBufferKind implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Unknown = 0;
	case Integer = 1;
	case Decimal = 2;
	case FloatingPoint = 3;
}
