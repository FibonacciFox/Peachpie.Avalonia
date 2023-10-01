<?php
namespace Avalonia\X11;
/**
 */
enum XEventName implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case KeyPress = 2;
	case KeyRelease = 3;
	case ButtonPress = 4;
	case ButtonRelease = 5;
	case MotionNotify = 6;
	case EnterNotify = 7;
	case LeaveNotify = 8;
	case FocusIn = 9;
	case FocusOut = 10;
	case KeymapNotify = 11;
	case Expose = 12;
	case GraphicsExpose = 13;
	case NoExpose = 14;
	case VisibilityNotify = 15;
	case CreateNotify = 16;
	case DestroyNotify = 17;
	case UnmapNotify = 18;
	case MapNotify = 19;
	case MapRequest = 20;
	case ReparentNotify = 21;
	case ConfigureNotify = 22;
	case ConfigureRequest = 23;
	case GravityNotify = 24;
	case ResizeRequest = 25;
	case CirculateNotify = 26;
	case CirculateRequest = 27;
	case PropertyNotify = 28;
	case SelectionClear = 29;
	case SelectionRequest = 30;
	case SelectionNotify = 31;
	case ColormapNotify = 32;
	case ClientMessage = 33;
	case MappingNotify = 34;
	case GenericEvent = 35;
	case LASTEvent = 36;
}
