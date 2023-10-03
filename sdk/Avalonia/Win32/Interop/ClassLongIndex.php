<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum ClassLongIndex implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case GCLP_MENUNAME = -34;
	case GCLP_HBRBACKGROUND = -32;
	case GCLP_HCURSOR = -26;
	case GCLP_HICON = -24;
	case GCLP_HMODULE = -20;
	case GCL_CBWNDEXTRA = -18;
	case GCL_CBCLSEXTRA = -16;
	case GCLP_WNDPROC = -14;
	case GCL_STYLE = -12;
	case GCLP_HICONSM = -10;
	case GCW_ATOM = -8;
}
