<?php
namespace Avalonia\Controls;
/**
 */
enum ClickMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Release = 0;
	case Press = 1;
}
