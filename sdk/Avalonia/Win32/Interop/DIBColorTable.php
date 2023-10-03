<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum DIBColorTable implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case DIB_RGB_COLORS = 0;
	case DIB_PAL_COLORS = 1;
}
