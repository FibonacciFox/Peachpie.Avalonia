<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum PROCESS_DPI_AWARENESS implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case PROCESS_DPI_UNAWARE = 0;
	case PROCESS_SYSTEM_DPI_AWARE = 1;
	case PROCESS_PER_MONITOR_DPI_AWARE = 2;
}
