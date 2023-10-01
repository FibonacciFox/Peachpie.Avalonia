<?php
namespace Avalonia\X11;
/**
 */
enum XWindowClass implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case InputOutput = 1;
	case InputOnly = 2;
}
