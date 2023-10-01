<?php
namespace Avalonia\X11;
/**
 */
enum XiDeviceClass implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case XIKeyClass = 0;
	case XIButtonClass = 1;
	case XIValuatorClass = 2;
	case XIScrollClass = 3;
	case XITouchClass = 8;
}
