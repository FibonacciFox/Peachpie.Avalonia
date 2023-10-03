<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum MouseActivate implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case MA_ACTIVATE = 1;
	case MA_ACTIVATEANDEAT = 2;
	case MA_NOACTIVATE = 3;
	case MA_NOACTIVATEANDEAT = 4;
}
