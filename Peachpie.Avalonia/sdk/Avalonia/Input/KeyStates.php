<?php
namespace Avalonia\Input;
/**
 */
enum KeyStates implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Down = 1;
	case Toggled = 2;
}
