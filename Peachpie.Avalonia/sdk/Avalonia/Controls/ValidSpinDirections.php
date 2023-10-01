<?php
namespace Avalonia\Controls;
/**
 */
enum ValidSpinDirections implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Increase = 1;
	case Decrease = 2;
}
