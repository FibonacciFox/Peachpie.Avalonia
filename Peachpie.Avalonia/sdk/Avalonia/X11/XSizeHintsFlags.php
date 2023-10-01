<?php
namespace Avalonia\X11;
/**
 */
enum XSizeHintsFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case USPosition = 1;
	case USSize = 2;
	case PPosition = 4;
	case PSize = 8;
	case PMinSize = 16;
	case PMaxSize = 32;
	case PResizeInc = 64;
	case PAspect = 128;
	case PAllHints = 252;
	case PBaseSize = 256;
	case PWinGravity = 512;
}
