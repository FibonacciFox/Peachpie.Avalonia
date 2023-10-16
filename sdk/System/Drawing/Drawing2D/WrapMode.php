<?php
namespace System\Drawing\Drawing2D;
/**
 */
enum WrapMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Tile = 0;
	case TileFlipX = 1;
	case TileFlipY = 2;
	case TileFlipXY = 3;
	case Clamp = 4;
}
