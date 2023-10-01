<?php
namespace Avalonia\Rendering\Composition;
/**
 */
enum CompositionTileMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case TileX = 1;
	case TileY = 2;
	case FlipX = 3;
	case FlipY = 4;
	case Tile = 8;
	case Flip = 12;
}
