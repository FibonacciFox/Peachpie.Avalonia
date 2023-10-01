<?php
namespace Avalonia\Native\Interop;
/**
 */
enum AvnPixelFormat implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case kAvnRgb565 = 0;
	case kAvnRgba8888 = 1;
	case kAvnBgra8888 = 2;
}
