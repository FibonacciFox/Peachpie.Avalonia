<?php
namespace Avalonia\Input;
/**
 */
enum NavigationMethod implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Unspecified = 0;
	case Tab = 1;
	case Directional = 2;
	case Pointer = 3;
}
