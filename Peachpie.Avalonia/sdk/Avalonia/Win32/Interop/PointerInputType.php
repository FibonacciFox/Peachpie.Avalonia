<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum PointerInputType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case PT_NONE = 0;
	case PT_POINTER = 1;
	case PT_TOUCH = 2;
	case PT_PEN = 3;
	case PT_MOUSE = 4;
	case PT_TOUCHPAD = 5;
}
