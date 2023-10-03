<?php
namespace Avalonia\Input\Raw;
/**
 */
enum RawPointerEventType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case LeaveWindow = 0;
	case LeftButtonDown = 1;
	case LeftButtonUp = 2;
	case RightButtonDown = 3;
	case RightButtonUp = 4;
	case MiddleButtonDown = 5;
	case MiddleButtonUp = 6;
	case XButton1Down = 7;
	case XButton1Up = 8;
	case XButton2Down = 9;
	case XButton2Up = 10;
	case Move = 11;
	case Wheel = 12;
	case NonClientLeftButtonDown = 13;
	case TouchBegin = 14;
	case TouchUpdate = 15;
	case TouchEnd = 16;
	case TouchCancel = 17;
	case Magnify = 18;
	case Rotate = 19;
	case Swipe = 20;
}
