<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum DwmWindowAttribute implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case DWMWA_NCRENDERING_ENABLED = 1;
	case DWMWA_NCRENDERING_POLICY = 2;
	case DWMWA_TRANSITIONS_FORCEDISABLED = 3;
	case DWMWA_ALLOW_NCPAINT = 4;
	case DWMWA_CAPTION_BUTTON_BOUNDS = 5;
	case DWMWA_NONCLIENT_RTL_LAYOUT = 6;
	case DWMWA_FORCE_ICONIC_REPRESENTATION = 7;
	case DWMWA_FLIP3D_POLICY = 8;
	case DWMWA_EXTENDED_FRAME_BOUNDS = 9;
	case DWMWA_HAS_ICONIC_BITMAP = 10;
	case DWMWA_DISALLOW_PEEK = 11;
	case DWMWA_EXCLUDED_FROM_PEEK = 12;
	case DWMWA_CLOAK = 13;
	case DWMWA_CLOAKED = 14;
	case DWMWA_FREEZE_REPRESENTATION = 15;
	case DWMWA_PASSIVE_UPDATE_MODE = 16;
	case DWMWA_USE_HOSTBACKDROPBRUSH = 17;
	case DWMWA_USE_IMMERSIVE_DARK_MODE = 20;
	case DWMWA_WINDOW_CORNER_PREFERENCE = 33;
	case DWMWA_BORDER_COLOR = 34;
	case DWMWA_CAPTION_COLOR = 35;
	case DWMWA_TEXT_COLOR = 36;
	case DWMWA_VISIBLE_FRAME_BORDER_THICKNESS = 37;
	case DWMWA_LAST = 38;
}
