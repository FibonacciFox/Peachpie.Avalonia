<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum SizeCommand implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Restored = 0;
	case Minimized = 1;
	case Maximized = 2;
	case MaxShow = 3;
	case MaxHide = 4;
}
