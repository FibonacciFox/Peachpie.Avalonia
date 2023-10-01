<?php
namespace Avalonia\Controls;
/**
 */
enum GridResizeDirection implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Auto = 0;
	case Columns = 1;
	case Rows = 2;
}
