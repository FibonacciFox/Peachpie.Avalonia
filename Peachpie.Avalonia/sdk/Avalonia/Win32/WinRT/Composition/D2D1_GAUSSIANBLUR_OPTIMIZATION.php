<?php
namespace Avalonia\Win32\WinRT\Composition;
/**
 */
enum D2D1_GAUSSIANBLUR_OPTIMIZATION implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case D2D1_GAUSSIANBLUR_OPTIMIZATION_SPEED = 0;
	case D2D1_GAUSSIANBLUR_OPTIMIZATION_BALANCED = 1;
	case D2D1_GAUSSIANBLUR_OPTIMIZATION_QUALITY = 2;
	case D2D1_GAUSSIANBLUR_OPTIMIZATION_FORCE_DWORD = 3;
}
