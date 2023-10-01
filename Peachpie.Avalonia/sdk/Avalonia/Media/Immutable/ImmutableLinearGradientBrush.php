<?php
namespace Avalonia\Media\Immutable;
/**
 */
class ImmutableLinearGradientBrush extends \Avalonia\Media\Immutable\ImmutableGradientBrush implements 
	\Avalonia\Media\IGradientBrush,
	\Avalonia\Media\IBrush,
	\Avalonia\Media\IImmutableBrush,
	\Avalonia\Media\ILinearGradientBrush
{
	/**
	 * @return \Avalonia\RelativePoint
	 */
	public  function get_StartPoint(){}
	/**
	 * @return \Avalonia\RelativePoint
	 */
	public  function get_EndPoint(){}
}
