<?php
namespace Avalonia\X11;
/**
 */
enum XIMProperties implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case XIMPreeditArea = 1;
	case XIMPreeditCallbacks = 2;
	case XIMPreeditPosition = 4;
	case XIMPreeditNothing = 8;
	case XIMPreeditNone = 16;
	case XIMStatusArea = 256;
	case XIMStatusCallbacks = 512;
	case XIMStatusNothing = 1024;
	case XIMStatusNone = 2048;
}
