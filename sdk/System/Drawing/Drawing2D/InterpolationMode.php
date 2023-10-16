<?php
namespace System\Drawing\Drawing2D;
/**
 */
enum InterpolationMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Invalid = 0;
	case Default = 1;
	case Low = 2;
	case High = 3;
	case Bilinear = 4;
	case Bicubic = 5;
	case NearestNeighbor = 6;
	case HighQualityBilinear = 7;
	case HighQualityBicubic = -1;
}
