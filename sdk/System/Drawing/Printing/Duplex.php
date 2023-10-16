<?php
namespace System\Drawing\Printing;
/**
 */
enum Duplex implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Default = 1;
	case Simplex = 2;
	case Vertical = 3;
	case Horizontal = -1;
}
