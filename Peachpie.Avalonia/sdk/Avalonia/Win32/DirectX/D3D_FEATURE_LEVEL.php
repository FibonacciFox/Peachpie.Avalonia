<?php
namespace Avalonia\Win32\DirectX;
/**
 */
enum D3D_FEATURE_LEVEL implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case D3D_FEATURE_LEVEL_1_0_CORE = 4096;
	case D3D_FEATURE_LEVEL_9_1 = 37120;
	case D3D_FEATURE_LEVEL_9_2 = 37376;
	case D3D_FEATURE_LEVEL_9_3 = 37632;
	case D3D_FEATURE_LEVEL_10_0 = 40960;
	case D3D_FEATURE_LEVEL_10_1 = 41216;
	case D3D_FEATURE_LEVEL_11_0 = 45056;
	case D3D_FEATURE_LEVEL_11_1 = 45312;
	case D3D_FEATURE_LEVEL_12_0 = 49152;
	case D3D_FEATURE_LEVEL_12_1 = 49408;
	case D3D_FEATURE_LEVEL_12_2 = 49664;
}
