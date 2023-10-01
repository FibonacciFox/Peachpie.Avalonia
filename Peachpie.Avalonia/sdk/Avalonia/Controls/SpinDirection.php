<?php
namespace Avalonia\Controls;
/**
 */
enum SpinDirection implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Increase = 0;
	case Decrease = 1;
}
