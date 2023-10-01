<?php
namespace Avalonia\Win32;
/**
 */
enum CustomWindowsMessage implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case WM_TRAYICON = 2048;
	case WM_TRAYMOUSE = 33792;
}
