<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum HitTestValues implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case HTERROR = 0;
	case HTTRANSPARENT = 1;
	case HTNOWHERE = 2;
	case HTCLIENT = 3;
	case HTCAPTION = 4;
	case HTSYSMENU = 5;
	case HTGROWBOX = 6;
	case HTMENU = 7;
	case HTHSCROLL = 8;
	case HTVSCROLL = 9;
	case HTMINBUTTON = 10;
	case HTMAXBUTTON = 11;
	case HTLEFT = 12;
	case HTRIGHT = 13;
	case HTTOP = 14;
	case HTTOPLEFT = 15;
	case HTTOPRIGHT = 16;
	case HTBOTTOM = 17;
	case HTBOTTOMLEFT = 18;
	case HTBOTTOMRIGHT = 19;
	case HTBORDER = 20;
	case HTOBJECT = 21;
	case HTCLOSE = -2;
	case HTHELP = -1;
}
