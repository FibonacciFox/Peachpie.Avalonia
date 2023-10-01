<?php
namespace Avalonia\Native\Interop;
/**
 */
enum AvnWindowState implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Normal = 0;
	case Minimized = 1;
	case Maximized = 2;
	case FullScreen = 3;
}
