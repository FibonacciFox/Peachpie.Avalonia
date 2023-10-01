<?php
namespace Avalonia\Native\Interop;
/**
 */
enum AvnStandardCursorType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case CursorArrow = 0;
	case CursorIbeam = 1;
	case CursorWait = 2;
	case CursorCross = 3;
	case CursorUpArrow = 4;
	case CursorSizeWestEast = 5;
	case CursorSizeNorthSouth = 6;
	case CursorSizeAll = 7;
	case CursorNo = 8;
	case CursorHand = 9;
	case CursorAppStarting = 10;
	case CursorHelp = 11;
	case CursorTopSide = 12;
	case CursorBottomSize = 13;
	case CursorLeftSide = 14;
	case CursorRightSide = 15;
	case CursorTopLeftCorner = 16;
	case CursorTopRightCorner = 17;
	case CursorBottomLeftCorner = 18;
	case CursorBottomRightCorner = 19;
	case CursorDragMove = 20;
	case CursorDragCopy = 21;
	case CursorDragLink = 22;
	case CursorNone = 23;
}
