<?php
namespace System\Drawing\Imaging;
/**
 */
enum ImageFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Scalable = 1;
	case HasAlpha = 2;
	case HasTranslucent = 4;
	case PartiallyScalable = 8;
	case ColorSpaceRgb = 16;
	case ColorSpaceCmyk = 32;
	case ColorSpaceGray = 64;
	case ColorSpaceYcbcr = 128;
	case ColorSpaceYcck = 256;
	case HasRealDpi = 4096;
	case HasRealPixelSize = 8192;
	case ReadOnly = 65536;
	case Caching = 131072;
}
