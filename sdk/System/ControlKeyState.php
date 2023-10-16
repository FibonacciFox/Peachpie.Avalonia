<?php
namespace System;
/**
 */
enum ControlKeyState implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case RightAltPressed = 1;
	case LeftAltPressed = 2;
	case RightCtrlPressed = 4;
	case LeftCtrlPressed = 8;
	case ShiftPressed = 16;
	case NumLockOn = 32;
	case ScrollLockOn = 64;
	case CapsLockOn = 128;
	case EnhancedKey = 256;
}
