<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum ModifierKeys implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case MK_NONE = 0;
	case MK_LBUTTON = 1;
	case MK_RBUTTON = 2;
	case MK_SHIFT = 4;
	case MK_CONTROL = 8;
	case MK_MBUTTON = 16;
	case MK_ALT = 32;
	case MK_XBUTTON1 = 32;
	case MK_XBUTTON2 = 64;
}
