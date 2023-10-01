<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum AccentFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case DrawLeftBorder = 32;
	case DrawTopBorder = 64;
	case DrawRightBorder = 128;
	case DrawBottomBorder = 256;
}
