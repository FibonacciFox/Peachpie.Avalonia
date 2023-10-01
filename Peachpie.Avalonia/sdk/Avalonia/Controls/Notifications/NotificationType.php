<?php
namespace Avalonia\Controls\Notifications;
/**
 */
enum NotificationType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Information = 0;
	case Success = 1;
	case Warning = 2;
	case Error = 3;
}
