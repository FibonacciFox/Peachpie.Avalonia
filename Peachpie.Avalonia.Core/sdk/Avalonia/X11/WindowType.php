<?php
namespace Avalonia\X11;
/**
 */
enum WindowType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Client = 1;
	case Whole = 2;
	case Both = 3;
}
