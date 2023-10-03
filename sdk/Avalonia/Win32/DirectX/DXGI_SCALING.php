<?php
namespace Avalonia\Win32\DirectX;
/**
 */
enum DXGI_SCALING implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case DXGI_SCALING_STRETCH = 0;
	case DXGI_SCALING_NONE = 1;
	case DXGI_SCALING_ASPECT_RATIO_STRETCH = 2;
}
