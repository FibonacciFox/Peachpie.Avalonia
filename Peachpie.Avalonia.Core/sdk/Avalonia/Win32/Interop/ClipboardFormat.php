<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum ClipboardFormat implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case CF_TEXT = 1;
	case CF_BITMAP = 2;
	case CF_DIB = 3;
	case CF_UNICODETEXT = 13;
	case CF_HDROP = 15;
}
