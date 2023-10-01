<?php
namespace Avalonia\Automation\Provider;
/**
 */
enum ToggleState implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Off = 0;
	case On = 1;
	case Indeterminate = 2;
}
