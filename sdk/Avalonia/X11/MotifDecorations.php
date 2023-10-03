<?php
namespace Avalonia\X11;
/**
 */
enum MotifDecorations implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case All = 1;
	case Border = 2;
	case ResizeH = 4;
	case Title = 8;
	case Menu = 16;
	case Minimize = 32;
	case Maximize = 64;
}
