<?php
namespace Avalonia\X11;
/**
 */
enum SendEventValues implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case PointerWindow = 0;
	case InputFocus = 1;
}
