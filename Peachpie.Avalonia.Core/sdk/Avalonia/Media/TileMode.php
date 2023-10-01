<?php
namespace Avalonia\Media;
/**
 */
enum TileMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case FlipX = 1;
	case FlipY = 2;
	case FlipXY = 3;
	case Tile = 4;
}
