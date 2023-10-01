<?php
namespace Avalonia\X11;
/**
 */
enum GCCapStyle implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case CapNotLast = 0;
	case CapButt = 1;
	case CapRound = 2;
	case CapProjecting = 3;
}
