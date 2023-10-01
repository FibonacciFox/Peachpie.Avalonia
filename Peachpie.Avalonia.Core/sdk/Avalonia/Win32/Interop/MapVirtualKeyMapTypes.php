<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum MapVirtualKeyMapTypes implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case MAPVK_VK_TO_VSC = 0;
	case MAPVK_VSC_TO_VK = 1;
	case MAPVK_VK_TO_CHAR = 2;
	case MAPVK_VSC_TO_VK_EX = 3;
}
