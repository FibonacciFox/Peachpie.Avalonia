<?php
namespace Avalonia\Input;
/**
 */
enum NavigationDirection implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Next = 0;
	case Previous = 1;
	case First = 2;
	case Last = 3;
	case Left = 4;
	case Right = 5;
	case Up = 6;
	case Down = 7;
	case PageUp = 8;
	case PageDown = 9;
}
