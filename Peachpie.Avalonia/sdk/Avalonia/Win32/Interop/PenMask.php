<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum PenMask implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case PEN_MASK_NONE = 0;
	case PEN_MASK_PRESSURE = 1;
	case PEN_MASK_ROTATION = 2;
	case PEN_MASK_TILT_X = 4;
	case PEN_MASK_TILT_Y = 8;
}
