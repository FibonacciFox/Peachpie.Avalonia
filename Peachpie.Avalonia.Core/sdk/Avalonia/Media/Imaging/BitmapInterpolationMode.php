<?php
namespace Avalonia\Media\Imaging;
/**
 */
enum BitmapInterpolationMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Unspecified = 0;
	case None = 1;
	case LowQuality = 2;
	case MediumQuality = 3;
	case HighQuality = 4;
}
