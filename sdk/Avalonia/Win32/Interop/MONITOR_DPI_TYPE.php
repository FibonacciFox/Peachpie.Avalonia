<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum MONITOR_DPI_TYPE implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case MDT_EFFECTIVE_DPI = 0;
	case MDT_ANGULAR_DPI = 0;
	case MDT_RAW_DPI = 1;
	case MDT_DEFAULT = 2;
}
