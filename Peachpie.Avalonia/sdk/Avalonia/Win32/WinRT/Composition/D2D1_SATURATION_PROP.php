<?php
namespace Avalonia\Win32\WinRT\Composition;
/**
 */
enum D2D1_SATURATION_PROP implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case D2D1_SATURATION_PROP_SATURATION = 0;
	case D2D1_SATURATION_PROP_FORCE_DWORD = 1;
}
