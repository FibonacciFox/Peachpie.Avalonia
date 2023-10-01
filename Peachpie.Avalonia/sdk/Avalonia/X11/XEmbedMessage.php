<?php
namespace Avalonia\X11;
/**
 */
enum XEmbedMessage implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case EmbeddedNotify = 0;
	case WindowActivate = 1;
	case WindowDeactivate = 2;
	case RequestFocus = 3;
	case FocusIn = 4;
	case FocusOut = 5;
	case FocusNext = 6;
	case FocusPrev = 7;
	case ModalityOn = 10;
	case ModalityOff = 11;
	case RegisterAccelerator = 12;
	case UnregisterAccelerator = 13;
	case ActivateAccelerator = 14;
}
