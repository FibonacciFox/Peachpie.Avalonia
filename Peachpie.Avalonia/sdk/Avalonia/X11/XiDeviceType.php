<?php
namespace Avalonia\X11;
/**
 */
enum XiDeviceType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case XIMasterPointer = 1;
	case XIMasterKeyboard = 2;
	case XISlavePointer = 3;
	case XISlaveKeyboard = 4;
	case XIFloatingSlave = 5;
}
