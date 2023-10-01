<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum AccentState implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case ACCENT_DISABLED = 0;
	case ACCENT_ENABLE_GRADIENT = 1;
	case ACCENT_ENABLE_TRANSPARENTGRADIENT = 2;
	case ACCENT_ENABLE_BLURBEHIND = 3;
	case ACCENT_ENABLE_ACRYLIC = 4;
	case ACCENT_ENABLE_HOSTBACKDROP = 5;
	case ACCENT_INVALID_STATE = 6;
}
