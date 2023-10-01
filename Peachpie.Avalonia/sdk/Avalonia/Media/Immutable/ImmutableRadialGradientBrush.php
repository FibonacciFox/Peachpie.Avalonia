<?php
namespace Avalonia\Media\Immutable;
/**
 */
class ImmutableRadialGradientBrush extends \Avalonia\Media\Immutable\ImmutableGradientBrush implements 
	\Avalonia\Media\IGradientBrush,
	\Avalonia\Media\IBrush,
	\Avalonia\Media\IImmutableBrush,
	\Avalonia\Media\IRadialGradientBrush
{
	/**
	 * @return \Avalonia\RelativePoint
	 */
	public  function get_Center(){}
	/**
	 * @return \Avalonia\RelativePoint
	 */
	public  function get_GradientOrigin(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Radius(){}
}
