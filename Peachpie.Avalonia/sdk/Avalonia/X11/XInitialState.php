<?php
namespace Avalonia\X11;
/**
 */
enum XInitialState implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case DontCareState = 0;
	case NormalState = 1;
	case ZoomState = 2;
	case IconicState = 3;
	case InactiveState = 4;
}
