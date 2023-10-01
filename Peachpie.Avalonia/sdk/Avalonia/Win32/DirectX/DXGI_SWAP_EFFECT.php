<?php
namespace Avalonia\Win32\DirectX;
/**
 */
enum DXGI_SWAP_EFFECT implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case DXGI_SWAP_EFFECT_DISCARD = 0;
	case DXGI_SWAP_EFFECT_SEQUENTIAL = 1;
	case DXGI_SWAP_EFFECT_FLIP_SEQUENTIAL = 3;
	case DXGI_SWAP_EFFECT_FLIP_DISCARD = 4;
}
