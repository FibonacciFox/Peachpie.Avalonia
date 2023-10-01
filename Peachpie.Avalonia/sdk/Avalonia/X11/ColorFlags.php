<?php
namespace Avalonia\X11;
/**
 */
enum ColorFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case DoRed = 1;
	case DoGreen = 2;
	case DoBlue = 4;
}
