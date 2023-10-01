<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
enum WindowInteractionState implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Running = 0;
	case Closing = 1;
	case ReadyForUserInteraction = 2;
	case BlockedByModalWindow = 3;
	case NotResponding = 4;
}
