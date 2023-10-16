<?php
namespace System\Drawing\Drawing2D;
/**
 */
enum DashStyle implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Solid = 0;
	case Dash = 1;
	case Dot = 2;
	case DashDot = 3;
	case DashDotDot = 4;
	case Custom = 5;
}
