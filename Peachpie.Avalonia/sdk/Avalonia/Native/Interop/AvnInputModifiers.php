<?php
namespace Avalonia\Native\Interop;
/**
 */
enum AvnInputModifiers implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case AvnInputModifiersNone = 0;
	case Alt = 1;
	case Control = 2;
	case Shift = 4;
	case Windows = 8;
	case LeftMouseButton = 16;
	case RightMouseButton = 32;
	case MiddleMouseButton = 64;
	case XButton1MouseButton = 128;
	case XButton2MouseButton = 256;
}
