<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum QueueStatusFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case QS_KEY = 1;
	case QS_MOUSEMOVE = 2;
	case QS_MOUSEBUTTON = 4;
	case QS_POSTMESSAGE = 6;
	case QS_TIMER = 7;
	case QS_PAINT = 8;
	case QS_SENDMESSAGE = 16;
	case QS_HOTKEY = 32;
	case QS_ALLPOSTMESSAGE = 64;
	case QS_EVENT = 128;
	case QS_MOUSE = 191;
	case QS_INPUT = 255;
	case QS_ALLEVENTS = 256;
	case QS_ALLINPUT = 8192;
}
