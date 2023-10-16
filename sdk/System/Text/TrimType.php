<?php
namespace System\Text;
/**
 */
enum TrimType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Head = 1;
	case Tail = 2;
	case Both = 3;
}
