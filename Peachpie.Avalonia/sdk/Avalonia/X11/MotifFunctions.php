<?php
namespace Avalonia\X11;
/**
 */
enum MotifFunctions implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case All = 1;
	case Resize = 2;
	case Move = 4;
	case Minimize = 8;
	case Maximize = 16;
	case Close = 32;
}
