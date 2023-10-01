<?php
namespace Avalonia\X11;
/**
 */
enum SystrayRequest implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case SYSTEM_TRAY_REQUEST_DOCK = 0;
	case SYSTEM_TRAY_BEGIN_MESSAGE = 1;
	case SYSTEM_TRAY_CANCEL_MESSAGE = 2;
}
