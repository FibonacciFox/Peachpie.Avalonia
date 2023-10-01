<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
enum SynchronizedInputType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case KeyUp = 1;
	case KeyDown = 2;
	case MouseLeftButtonUp = 4;
	case MouseLeftButtonDown = 8;
	case MouseRightButtonUp = 16;
	case MouseRightButtonDown = 32;
}
