<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum TouchMask implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case TOUCH_MASK_NONE = 0;
	case TOUCH_MASK_CONTACTAREA = 1;
	case TOUCH_MASK_ORIENTATION = 2;
	case TOUCH_MASK_PRESSURE = 4;
}
