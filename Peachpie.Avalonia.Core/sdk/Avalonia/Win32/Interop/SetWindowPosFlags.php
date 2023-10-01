<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum SetWindowPosFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case SWP_ASYNCWINDOWPOS = 1;
	case SWP_DEFERERASE = 2;
	case SWP_DRAWFRAME = 4;
	case SWP_FRAMECHANGED = 8;
	case SWP_HIDEWINDOW = 16;
	case SWP_NOACTIVATE = 22;
	case SWP_NOCOPYBITS = 32;
	case SWP_NOMOVE = 32;
	case SWP_NOOWNERZORDER = 64;
	case SWP_NOREDRAW = 128;
	case SWP_NOREPOSITION = 256;
	case SWP_NOSENDCHANGING = 512;
	case SWP_NOSIZE = 512;
	case SWP_NOZORDER = 1024;
	case SWP_SHOWWINDOW = 8192;
	case SWP_RESIZE = 16384;
}
