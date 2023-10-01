<?php
namespace Avalonia\Win32\DirectX;
/**
 */
enum D3D_DRIVER_TYPE implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case D3D_DRIVER_TYPE_UNKNOWN = 0;
	case D3D_DRIVER_TYPE_HARDWARE = 1;
	case D3D_DRIVER_TYPE_REFERENCE = 2;
	case D3D_DRIVER_TYPE_NULL = 3;
	case D3D_DRIVER_TYPE_SOFTWARE = 4;
	case D3D_DRIVER_TYPE_WARP = 5;
}
