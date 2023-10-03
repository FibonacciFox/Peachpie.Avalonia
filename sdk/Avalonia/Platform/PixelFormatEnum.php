<?php
namespace Avalonia\Platform;
/**
 */
enum PixelFormatEnum implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Rgb565 = 0;
	case Rgba8888 = 1;
	case Bgra8888 = 2;
	case BlackWhite = 3;
	case Gray2 = 4;
	case Gray4 = 5;
	case Gray8 = 6;
	case Gray16 = 7;
	case Gray32Float = 8;
	case Rgba64 = 9;
	case Rgb24 = 10;
	case Bgr24 = 11;
}
