<?php
namespace Avalonia\X11;
/**
 */
enum NotifyMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case NotifyNormal = 0;
	case NotifyGrab = 1;
	case NotifyUngrab = 2;
}
