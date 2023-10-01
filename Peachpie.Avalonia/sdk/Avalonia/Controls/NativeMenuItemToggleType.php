<?php
namespace Avalonia\Controls;
/**
 */
enum NativeMenuItemToggleType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case CheckBox = 1;
	case Radio = 2;
}
