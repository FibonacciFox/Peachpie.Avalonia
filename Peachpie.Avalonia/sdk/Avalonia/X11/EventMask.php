<?php
namespace Avalonia\X11;
/**
 */
enum EventMask implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case NoEventMask = 0;
	case KeyPressMask = 1;
	case KeyReleaseMask = 2;
	case ButtonPressMask = 4;
	case ButtonReleaseMask = 8;
	case EnterWindowMask = 16;
	case LeaveWindowMask = 32;
	case PointerMotionMask = 64;
	case PointerMotionHintMask = 128;
	case Button1MotionMask = 256;
	case Button2MotionMask = 512;
	case Button3MotionMask = 1024;
	case Button4MotionMask = 2048;
	case Button5MotionMask = 4096;
	case ButtonMotionMask = 8192;
	case KeymapStateMask = 16384;
	case ExposureMask = 32768;
	case VisibilityChangeMask = 65536;
	case StructureNotifyMask = 131072;
	case ResizeRedirectMask = 262144;
	case SubstructureNotifyMask = 524288;
	case SubstructureRedirectMask = 1048576;
	case FocusChangeMask = 2097152;
	case PropertyChangeMask = 4194304;
	case ColormapChangeMask = 8388608;
	case OwnerGrabButtonMask = 16777216;
}
