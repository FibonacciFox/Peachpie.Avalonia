<?php
namespace System\Reflection\Emit;
/**
 */
enum PackingSize implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Unspecified = 0;
	case Size1 = 1;
	case Size2 = 2;
	case Size4 = 4;
	case Size8 = 8;
	case Size16 = 16;
	case Size32 = 32;
	case Size64 = 64;
	case Size128 = 128;
}
