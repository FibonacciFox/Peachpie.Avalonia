<?php
namespace Avalonia\X11;
/**
 */
enum MapState implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case IsUnmapped = 0;
	case IsUnviewable = 1;
	case IsViewable = 2;
}
