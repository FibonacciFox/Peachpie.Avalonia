<?php
namespace Avalonia\Win32\DirectX;
/**
 */
enum DXGI_MODE_ROTATION implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case DXGI_MODE_ROTATION_UNSPECIFIED = 0;
	case DXGI_MODE_ROTATION_IDENTITY = 1;
	case DXGI_MODE_ROTATION_ROTATE90 = 2;
	case DXGI_MODE_ROTATION_ROTATE180 = 3;
	case DXGI_MODE_ROTATION_ROTATE270 = 4;
}
