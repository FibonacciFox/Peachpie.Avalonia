<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
enum WindowVisualState implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Normal = 0;
	case Maximized = 1;
	case Minimized = 2;
}
