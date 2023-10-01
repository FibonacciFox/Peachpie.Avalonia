<?php
namespace Avalonia\Win32\DirectX;
/**
 */
enum D3D11_USAGE implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case D3D11_USAGE_DEFAULT = 0;
	case D3D11_USAGE_IMMUTABLE = 1;
	case D3D11_USAGE_DYNAMIC = 2;
	case D3D11_USAGE_STAGING = 3;
}
