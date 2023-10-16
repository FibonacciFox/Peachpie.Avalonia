<?php
namespace System\Buffers\Text;
/**
 */
enum ParseNumberOptions implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case AllowExponent = 1;
}
