<?php
namespace System\Drawing;
/**
 */
enum RotateFlipType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Rotate180FlipXY = 0;
	case RotateNoneFlipNone = 0;
	case Rotate270FlipXY = 1;
	case Rotate90FlipNone = 1;
	case Rotate180FlipNone = 2;
	case RotateNoneFlipXY = 2;
	case Rotate270FlipNone = 3;
	case Rotate90FlipXY = 3;
	case Rotate180FlipY = 4;
	case RotateNoneFlipX = 4;
	case Rotate270FlipY = 5;
	case Rotate90FlipX = 5;
	case Rotate180FlipX = 6;
	case RotateNoneFlipY = 6;
	case Rotate270FlipX = 7;
	case Rotate90FlipY = 7;
}
