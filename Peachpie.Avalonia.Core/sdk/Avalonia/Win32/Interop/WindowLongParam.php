<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum WindowLongParam implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case GWL_WNDPROC = -21;
	case GWL_HINSTANCE = -20;
	case GWL_HWNDPARENT = -16;
	case GWL_ID = -12;
	case GWL_STYLE = -8;
	case GWL_EXSTYLE = -6;
	case GWL_USERDATA = -4;
}
