<?php
namespace Avalonia\X11;
/**
 */
enum SetWindowValuemask implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Nothing = 0;
	case BackPixmap = 1;
	case BackPixel = 2;
	case BorderPixmap = 4;
	case BorderPixel = 8;
	case BitGravity = 16;
	case WinGravity = 32;
	case BackingStore = 64;
	case BackingPlanes = 128;
	case BackingPixel = 256;
	case OverrideRedirect = 512;
	case SaveUnder = 1024;
	case EventMask = 2048;
	case DontPropagate = 4096;
	case ColorMap = 8192;
	case Cursor = 16384;
}
