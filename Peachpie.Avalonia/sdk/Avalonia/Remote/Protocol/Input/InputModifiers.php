<?php
namespace Avalonia\Remote\Protocol\Input;
/**
 */
enum InputModifiers implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Alt = 0;
	case Control = 1;
	case Shift = 2;
	case Windows = 3;
	case LeftMouseButton = 4;
	case RightMouseButton = 5;
	case MiddleMouseButton = 6;
}
