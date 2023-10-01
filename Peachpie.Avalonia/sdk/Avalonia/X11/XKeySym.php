<?php
namespace Avalonia\X11;
/**
 */
enum XKeySym implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case XK_BackSpace = 65288;
	case XK_Tab = 65289;
	case XK_Clear = 65291;
	case XK_Return = 65293;
	case XK_Home = 65360;
	case XK_Left = 65361;
	case XK_Up = 65362;
	case XK_Right = 65363;
	case XK_Down = 65364;
	case XK_Page_Up = 65365;
	case XK_Page_Down = 65366;
	case XK_End = 65367;
	case XK_Begin = 65368;
	case XK_Menu = 65383;
	case XK_Shift_L = 65505;
	case XK_Shift_R = 65506;
	case XK_Control_L = 65507;
	case XK_Control_R = 65508;
	case XK_Caps_Lock = 65509;
	case XK_Shift_Lock = 65510;
	case XK_Meta_L = 65511;
	case XK_Meta_R = 65512;
	case XK_Alt_L = 65513;
	case XK_Alt_R = 65514;
	case XK_Super_L = 65515;
	case XK_Super_R = 65516;
	case XK_Hyper_L = 65517;
	case XK_Hyper_R = 65518;
}
