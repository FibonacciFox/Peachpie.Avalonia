<?php
namespace Avalonia\Native\Interop;
/**
 */
enum AvnWindowEdge implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case WindowEdgeNorthWest = 0;
	case WindowEdgeNorth = 1;
	case WindowEdgeNorthEast = 2;
	case WindowEdgeWest = 3;
	case WindowEdgeEast = 4;
	case WindowEdgeSouthWest = 5;
	case WindowEdgeSouth = 6;
	case WindowEdgeSouthEast = 7;
}
