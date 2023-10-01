<?php
namespace Avalonia\X11;
/**
 */
enum XiDeviceEventFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case XIPointerEmulated = 65536;
}
