<?php
namespace Avalonia;
/**
 */
enum X11RenderingMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Software = 1;
	case Glx = 2;
	case Egl = 3;
}
