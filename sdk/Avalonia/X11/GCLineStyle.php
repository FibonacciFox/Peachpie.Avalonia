<?php
namespace Avalonia\X11;
/**
 */
enum GCLineStyle implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case LineSolid = 0;
	case LineOnOffDash = 1;
	case LineDoubleDash = 2;
}
