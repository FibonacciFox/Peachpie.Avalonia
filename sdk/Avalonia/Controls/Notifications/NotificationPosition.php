<?php
namespace Avalonia\Controls\Notifications;
/**
 */
enum NotificationPosition implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case TopLeft = 0;
	case TopRight = 1;
	case BottomLeft = 2;
	case BottomRight = 3;
}
