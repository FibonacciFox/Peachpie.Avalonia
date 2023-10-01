<?php
namespace Avalonia\Automation\Provider;
/**
 */
enum ScrollAmount implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case LargeDecrement = 0;
	case SmallDecrement = 1;
	case NoAmount = 2;
	case LargeIncrement = 3;
	case SmallIncrement = 4;
}
