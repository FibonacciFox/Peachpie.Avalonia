<?php
namespace Avalonia\Media\Immutable;
/**
 */
class ImmutableConicGradientBrush extends \Avalonia\Media\Immutable\ImmutableGradientBrush implements 
	\Avalonia\Media\IGradientBrush,
	\Avalonia\Media\IBrush,
	\Avalonia\Media\IImmutableBrush,
	\Avalonia\Media\IConicGradientBrush
{
	/**
	 * @return \Avalonia\RelativePoint
	 */
	public  function get_Center(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Angle(){}
}
