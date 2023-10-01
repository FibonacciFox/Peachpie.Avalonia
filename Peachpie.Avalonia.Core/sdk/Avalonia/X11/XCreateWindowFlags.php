<?php
namespace Avalonia\X11;
/**
 */
enum XCreateWindowFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case CWBackPixmap = 1;
	case CWBackPixel = 2;
	case CWBorderPixmap = 4;
	case CWBorderPixel = 8;
	case CWBitGravity = 16;
	case CWWinGravity = 32;
	case CWBackingStore = 64;
	case CWBackingPlanes = 128;
	case CWBackingPixel = 256;
	case CWOverrideRedirect = 512;
	case CWSaveUnder = 1024;
	case CWEventMask = 2048;
	case CWDontPropagate = 4096;
	case CWColormap = 8192;
	case CWCursor = 16384;
}
