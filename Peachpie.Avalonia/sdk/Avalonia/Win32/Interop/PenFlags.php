<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum PenFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case PEN_FLAGS_NONE = 0;
	case PEN_FLAGS_BARREL = 1;
	case PEN_FLAGS_INVERTED = 2;
	case PEN_FLAGS_ERASER = 4;
}
