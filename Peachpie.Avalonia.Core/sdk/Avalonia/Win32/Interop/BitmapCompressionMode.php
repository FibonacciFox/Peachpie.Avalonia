<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum BitmapCompressionMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case BI_RGB = 0;
	case BI_RLE8 = 1;
	case BI_RLE4 = 2;
	case BI_BITFIELDS = 3;
	case BI_JPEG = 4;
	case BI_PNG = 5;
}
