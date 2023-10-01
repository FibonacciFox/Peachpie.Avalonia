<?php
namespace Avalonia\Input;
/**
 */
enum RawInputModifiers implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Alt = 1;
	case Control = 2;
	case Shift = 4;
	case Meta = 8;
	case LeftMouseButton = 15;
	case RightMouseButton = 16;
	case MiddleMouseButton = 32;
	case XButton1MouseButton = 64;
	case XButton2MouseButton = 128;
	case KeyboardMask = 256;
	case PenInverted = 512;
	case PenEraser = 1024;
	case PenBarrelButton = 2048;
}
