<?php
namespace Avalonia\Win32\WinRT;
/**
 */
enum CompositionBitmapInterpolationMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case NearestNeighbor = 0;
	case Linear = 1;
	case MagLinearMinLinearMipLinear = 2;
	case MagLinearMinLinearMipNearest = 3;
	case MagLinearMinNearestMipLinear = 4;
	case MagLinearMinNearestMipNearest = 5;
	case MagNearestMinLinearMipLinear = 6;
	case MagNearestMinLinearMipNearest = 7;
	case MagNearestMinNearestMipLinear = 8;
	case MagNearestMinNearestMipNearest = 9;
}
