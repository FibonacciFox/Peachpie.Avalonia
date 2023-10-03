<?php
namespace Avalonia\Layout;
/**
 */
enum Orientation implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Horizontal = 0;
	case Vertical = 1;
}
