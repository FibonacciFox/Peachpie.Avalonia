<?php
namespace Avalonia\Input;
/**
 */
enum StandardCursorType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Arrow = 0;
	case Ibeam = 1;
	case Wait = 2;
	case Cross = 3;
	case UpArrow = 4;
	case SizeWestEast = 5;
	case SizeNorthSouth = 6;
	case SizeAll = 7;
	case No = 8;
	case Hand = 9;
	case AppStarting = 10;
	case Help = 11;
	case TopSide = 12;
	case BottomSide = 13;
	case LeftSide = 14;
	case RightSide = 15;
	case TopLeftCorner = 16;
	case TopRightCorner = 17;
	case BottomLeftCorner = 18;
	case BottomRightCorner = 19;
	case DragMove = 20;
	case DragCopy = 21;
	case DragLink = 22;
	case None = 23;
}
