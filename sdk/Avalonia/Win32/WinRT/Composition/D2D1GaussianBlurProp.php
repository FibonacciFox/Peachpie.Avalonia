<?php
namespace Avalonia\Win32\WinRT\Composition;
/**
 */
enum D2D1GaussianBlurProp implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case D2D1_GAUSSIANBLUR_PROP_STANDARD_DEVIATION = 0;
	case D2D1_GAUSSIANBLUR_PROP_OPTIMIZATION = 1;
	case D2D1_GAUSSIANBLUR_PROP_BORDER_MODE = 2;
	case D2D1_GAUSSIANBLUR_PROP_FORCE_DWORD = 3;
}
