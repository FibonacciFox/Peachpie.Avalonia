<?php
namespace Avalonia\Controls;
/**
 */
enum GridUnitType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Auto = 0;
	case Pixel = 1;
	case Star = 2;
}
