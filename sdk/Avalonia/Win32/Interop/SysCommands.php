<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum SysCommands implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case SC_SIZE = 1;
	case SC_MOVE = 61440;
	case SC_MINIMIZE = 61455;
	case SC_MAXIMIZE = 61456;
	case SC_NEXTWINDOW = 61472;
	case SC_PREVWINDOW = 61488;
	case SC_CLOSE = 61504;
	case SC_VSCROLL = 61520;
	case SC_HSCROLL = 61536;
	case SC_MOUSEMENU = 61552;
	case SC_KEYMENU = 61568;
	case SC_ARRANGE = 61584;
	case SC_RESTORE = 61696;
	case SC_TASKLIST = 61712;
	case SC_SCREENSAVE = 61728;
	case SC_HOTKEY = 61744;
	case SC_DEFAULT = 61760;
	case SC_MONITORPOWER = 61776;
	case SC_CONTEXTHELP = 61792;
	case SC_SEPARATOR = 61808;
	case SCF_ISSECURE = 61824;
}
