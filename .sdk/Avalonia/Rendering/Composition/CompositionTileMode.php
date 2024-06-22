<?php
namespace Avalonia\Rendering\Composition;
enum CompositionTileMode
{

	
	case None = '0';
	case TileX = '1';
	case TileY = '2';
	case FlipX = '4';
	case FlipY = '8';
	case Tile = '3';
	case Flip = '12';

}