<?php
namespace Avalonia\X11;
/**
 */
enum MotifFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Functions = 1;
	case Decorations = 2;
	case InputMode = 4;
	case Status = 8;
}
