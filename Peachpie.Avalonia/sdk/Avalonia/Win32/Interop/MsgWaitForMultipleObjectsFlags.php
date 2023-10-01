<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum MsgWaitForMultipleObjectsFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case MWMO_WAITALL = 1;
	case MWMO_ALERTABLE = 2;
	case MWMO_INPUTAVAILABLE = 4;
}
