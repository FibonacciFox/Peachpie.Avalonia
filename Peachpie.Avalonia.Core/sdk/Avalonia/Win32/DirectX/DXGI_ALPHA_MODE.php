<?php
namespace Avalonia\Win32\DirectX;
/**
 */
enum DXGI_ALPHA_MODE implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case DXGI_ALPHA_MODE_UNSPECIFIED = 0;
	case DXGI_ALPHA_MODE_PREMULTIPLIED = 1;
	case DXGI_ALPHA_MODE_STRAIGHT = 2;
	case DXGI_ALPHA_MODE_IGNORE = 3;
	case DXGI_ALPHA_MODE_FORCE_DWORD = -1;
}
