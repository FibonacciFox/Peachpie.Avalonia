<?php
namespace Avalonia\Controls;
/**
 */
enum WindowState implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Normal = 0;
	case Minimized = 1;
	case Maximized = 2;
	case FullScreen = 3;
}
