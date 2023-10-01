<?php
namespace Avalonia\Controls;
/**
 */
enum SelectionMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Single = 0;
	case Multiple = 1;
	case Toggle = 2;
	case AlwaysSelected = 4;
}
