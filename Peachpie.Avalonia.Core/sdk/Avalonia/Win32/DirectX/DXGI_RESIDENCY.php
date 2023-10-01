<?php
namespace Avalonia\Win32\DirectX;
/**
 */
enum DXGI_RESIDENCY implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case DXGI_RESIDENCY_FULLY_RESIDENT = 1;
	case DXGI_RESIDENCY_RESIDENT_IN_SHARED_MEMORY = 2;
	case DXGI_RESIDENCY_EVICTED_TO_DISK = 3;
}
