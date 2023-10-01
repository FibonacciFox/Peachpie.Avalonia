<?php
namespace Avalonia\Controls;
/**
 */
enum SizeToContent implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Manual = 0;
	case Width = 1;
	case Height = 2;
	case WidthAndHeight = 3;
}
