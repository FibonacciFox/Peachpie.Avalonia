<?php
namespace Avalonia\X11;
/**
 */
enum GrabMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case GrabModeSync = 0;
	case GrabModeAsync = 1;
}
