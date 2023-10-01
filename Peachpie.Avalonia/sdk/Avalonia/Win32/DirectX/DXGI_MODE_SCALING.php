<?php
namespace Avalonia\Win32\DirectX;
/**
 */
enum DXGI_MODE_SCALING implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case DXGI_MODE_SCALING_UNSPECIFIED = 0;
	case DXGI_MODE_SCALING_CENTERED = 1;
	case DXGI_MODE_SCALING_STRETCHED = 2;
}
