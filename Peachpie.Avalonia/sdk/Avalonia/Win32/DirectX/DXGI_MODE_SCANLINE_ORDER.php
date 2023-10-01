<?php
namespace Avalonia\Win32\DirectX;
/**
 */
enum DXGI_MODE_SCANLINE_ORDER implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case DXGI_MODE_SCANLINE_ORDER_UNSPECIFIED = 0;
	case DXGI_MODE_SCANLINE_ORDER_PROGRESSIVE = 1;
	case DXGI_MODE_SCANLINE_ORDER_UPPER_FIELD_FIRST = 2;
	case DXGI_MODE_SCANLINE_ORDER_LOWER_FIELD_FIRST = 3;
}
