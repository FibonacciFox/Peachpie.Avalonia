<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum LayeredWindowFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case LWA_ALPHA = 1;
	case LWA_COLORKEY = 2;
}
