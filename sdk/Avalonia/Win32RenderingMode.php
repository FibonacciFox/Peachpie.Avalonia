<?php
namespace Avalonia;
/**
 */
enum Win32RenderingMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Software = 1;
	case AngleEgl = 2;
	case Wgl = 3;
}
