<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum OpenFileNameFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case OFN_ALLOWMULTISELECT = 2;
	case OFN_EXPLORER = 4;
	case OFN_HIDEREADONLY = 512;
	case OFN_NOREADONLYRETURN = 32768;
	case OFN_OVERWRITEPROMPT = 524288;
}
