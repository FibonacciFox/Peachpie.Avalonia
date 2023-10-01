<?php
namespace Avalonia\X11;
/**
 */
enum Gravity implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case ForgetGravity = 0;
	case NorthWestGravity = 1;
	case NorthGravity = 2;
	case NorthEastGravity = 3;
	case WestGravity = 4;
	case CenterGravity = 5;
	case EastGravity = 6;
	case SouthWestGravity = 7;
	case SouthGravity = 8;
	case SouthEastGravity = 9;
	case StaticGravity = 10;
}
