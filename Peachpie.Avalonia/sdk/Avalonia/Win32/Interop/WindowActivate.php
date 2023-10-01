<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum WindowActivate implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case WA_INACTIVE = 0;
	case WA_ACTIVE = 1;
	case WA_CLICKACTIVE = 2;
}
