<?php
namespace Avalonia\X11;
/**
 */
enum NetWindowManagerState implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Remove = 0;
	case Add = 1;
	case Toggle = 2;
}
