<?php
namespace Avalonia\X11;
/**
 */
enum XiScrollType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Vertical = 1;
	case Horizontal = 2;
}
