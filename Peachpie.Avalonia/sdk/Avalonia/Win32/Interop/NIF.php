<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum NIF implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case MESSAGE = 1;
	case ICON = 2;
	case TIP = 4;
	case STATE = 8;
	case INFO = 16;
	case GUID = 32;
	case REALTIME = 64;
	case SHOWTIP = 128;
}
