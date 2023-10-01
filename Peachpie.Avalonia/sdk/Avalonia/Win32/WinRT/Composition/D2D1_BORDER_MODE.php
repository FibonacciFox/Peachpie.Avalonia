<?php
namespace Avalonia\Win32\WinRT\Composition;
/**
 */
enum D2D1_BORDER_MODE implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case D2D1_BORDER_MODE_SOFT = 0;
	case D2D1_BORDER_MODE_HARD = 1;
	case D2D1_BORDER_MODE_FORCE_DWORD = 2;
}
