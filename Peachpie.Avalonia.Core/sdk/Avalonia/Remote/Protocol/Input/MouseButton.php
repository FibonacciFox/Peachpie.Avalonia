<?php
namespace Avalonia\Remote\Protocol\Input;
/**
 */
enum MouseButton implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Left = 1;
	case Right = 2;
	case Middle = 3;
}
