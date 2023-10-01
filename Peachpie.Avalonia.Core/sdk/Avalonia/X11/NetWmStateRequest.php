<?php
namespace Avalonia\X11;
/**
 */
enum NetWmStateRequest implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case _NET_WM_STATE_REMOVE = 0;
	case _NET_WM_STATE_ADD = 1;
	case _NET_WM_STATE_TOGGLE = 2;
}
