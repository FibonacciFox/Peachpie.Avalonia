<?php
namespace Avalonia\Media\Immutable;
/**
 */
class ImmutableGradientBrush extends \System\Object implements 
	\Avalonia\Media\IGradientBrush,
	\Avalonia\Media\IBrush,
	\Avalonia\Media\IImmutableBrush
{
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
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_GradientStops(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Opacity(){}
	/**
	 * @return \Avalonia\Media\ITransform
	 */
	public  function get_Transform(){}
	/**
	 * @return \Avalonia\RelativePoint
	 */
	public  function get_TransformOrigin(){}
	/**
	 * @return \Avalonia\Media\GradientSpreadMethod
	 */
	public  function get_SpreadMethod(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
