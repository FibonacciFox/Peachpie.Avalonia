<?php
namespace Avalonia\X11;
/**
 */
enum XiEventType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case XI_DeviceChanged = 1;
	case XI_KeyPress = 2;
	case XI_KeyRelease = 3;
	case XI_ButtonPress = 4;
	case XI_ButtonRelease = 5;
	case XI_Motion = 6;
	case XI_Enter = 7;
	case XI_Leave = 8;
	case XI_FocusIn = 9;
	case XI_FocusOut = 10;
	case XI_HierarchyChanged = 11;
	case XI_PropertyEvent = 12;
	case XI_RawKeyPress = 13;
	case XI_RawKeyRelease = 14;
	case XI_RawButtonPress = 15;
	case XI_RawButtonRelease = 16;
	case XI_RawMotion = 17;
	case XI_TouchBegin = 18;
	case XI_TouchUpdate = 19;
	case XI_TouchEnd = 20;
	case XI_TouchOwnership = 21;
	case XI_RawTouchBegin = 22;
	case XI_RawTouchUpdate = 23;
	case XI_RawTouchEnd = 24;
	case XI_BarrierHit = 25;
	case XI_BarrierLeave = 26;
	case XI_LASTEVENT = 26;
}
