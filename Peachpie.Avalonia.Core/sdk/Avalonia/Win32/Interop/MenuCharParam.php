<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum MenuCharParam implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case MNC_IGNORE = 0;
	case MNC_CLOSE = 1;
	case MNC_EXECUTE = 2;
	case MNC_SELECT = 3;
}
