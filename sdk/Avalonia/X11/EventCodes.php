<?php
namespace Avalonia\X11;
/**
 */
enum EventCodes implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case X11 = 1;
	case Signal = 2;
}
