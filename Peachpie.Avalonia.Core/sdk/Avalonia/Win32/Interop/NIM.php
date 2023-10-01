<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum NIM implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case ADD = 0;
	case MODIFY = 1;
	case DELETE = 2;
	case SETFOCUS = 3;
	case SETVERSION = 4;
}
