<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum PixelFormatDescriptorFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case PFD_DOUBLEBUFFER = 1;
	case PFD_STEREO = 2;
	case PFD_DRAW_TO_WINDOW = 4;
	case PFD_DRAW_TO_BITMAP = 8;
	case PFD_SUPPORT_GDI = 16;
	case PFD_SUPPORT_OPENGL = 32;
	case PFD_GENERIC_FORMAT = 64;
	case PFD_NEED_PALETTE = 128;
	case PFD_NEED_SYSTEM_PALETTE = 256;
	case PFD_SWAP_EXCHANGE = 512;
	case PFD_SWAP_COPY = 1024;
	case PFD_SWAP_LAYER_BUFFERS = 2048;
	case PFD_GENERIC_ACCELERATED = 4096;
	case PFD_SUPPORT_DIRECTDRAW = 8192;
	case PFD_DEPTH_DONTCARE = 536870912;
	case PFD_DOUBLEBUFFER_DONTCARE = 1073741824;
	case PFD_STEREO_DONTCARE = 2147483648;
}
