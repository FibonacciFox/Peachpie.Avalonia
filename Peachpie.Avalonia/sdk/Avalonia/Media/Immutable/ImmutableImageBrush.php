<?php
namespace Avalonia\Media\Immutable;
/**
 */
class ImmutableImageBrush extends \Avalonia\Media\Immutable\ImmutableTileBrush implements 
	\Avalonia\Media\ITileBrush,
	\Avalonia\Media\IBrush,
	\Avalonia\Media\IImmutableBrush,
	\Avalonia\Media\IImageBrush
{
	/**
	 * @return \Avalonia\Media\IImageBrushSource
	 */
	public  function get_Source(){}
}
