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
	 * @var \Avalonia\RelativePoint
	 * @property
	 */
	public readonly $Center;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Angle;
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Media\IGradientStop]
	 * @property
	 */
	public readonly $GradientStops;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Opacity;
	/**
	 * @var \Avalonia\Media\ITransform
	 * @property
	 */
	public readonly $Transform;
	/**
	 * @var \Avalonia\RelativePoint
	 * @property
	 */
	public readonly $TransformOrigin;
	/**
	 * @var \Avalonia\Media\GradientSpreadMethod
	 * @property
	 */
	public readonly $SpreadMethod;
	/**
	 * @return \Avalonia\RelativePoint
	 */
	public  function get_Center(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Angle(){}
}
