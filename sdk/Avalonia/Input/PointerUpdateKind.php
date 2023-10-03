<?php
namespace Avalonia\Input;
/**
 */
enum PointerUpdateKind implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case LeftButtonPressed = 0;
	case MiddleButtonPressed = 1;
	case RightButtonPressed = 2;
	case XButton1Pressed = 3;
	case XButton2Pressed = 4;
	case LeftButtonReleased = 5;
	case MiddleButtonReleased = 6;
	case RightButtonReleased = 7;
	case XButton1Released = 8;
	case XButton2Released = 9;
	case Other = 10;
}
