<?php
namespace Avalonia\Native\Interop;
/**
 */
enum AvnPlatformResizeReason implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case ResizeUnspecified = 0;
	case ResizeUser = 1;
	case ResizeApplication = 2;
	case ResizeLayout = 3;
	case ResizeDpiChange = 4;
}
