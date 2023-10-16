<?php
namespace System\Collections\Generic;
/**
 */
enum NodeColor implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Black = 0;
	case Red = 1;
}
