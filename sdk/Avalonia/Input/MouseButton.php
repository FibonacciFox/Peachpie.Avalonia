<?php
namespace Avalonia\Input;
/**
 */
enum MouseButton implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Left = 1;
	case Right = 2;
	case Middle = 3;
	case XButton1 = 4;
	case XButton2 = 5;
}
