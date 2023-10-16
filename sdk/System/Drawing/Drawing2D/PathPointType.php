<?php
namespace System\Drawing\Drawing2D;
/**
 */
enum PathPointType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Start = 0;
	case Line = 1;
	case Bezier = 3;
	case Bezier3 = 3;
	case PathTypeMask = 7;
	case DashMode = 16;
	case PathMarker = 32;
	case CloseSubpath = 128;
}
