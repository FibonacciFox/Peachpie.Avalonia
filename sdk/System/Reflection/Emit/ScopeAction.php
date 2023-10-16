<?php
namespace System\Reflection\Emit;
/**
 */
enum ScopeAction implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Open = 1;
	case Close = -1;
}
