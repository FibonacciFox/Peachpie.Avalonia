<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum DEVICECAP implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case HORZRES = 8;
	case DESKTOPHORZRES = 118;
}
