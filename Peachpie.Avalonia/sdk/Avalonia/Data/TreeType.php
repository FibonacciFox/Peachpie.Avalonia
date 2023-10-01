<?php
namespace Avalonia\Data;
/**
 */
enum TreeType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Visual = 0;
	case Logical = 1;
}
