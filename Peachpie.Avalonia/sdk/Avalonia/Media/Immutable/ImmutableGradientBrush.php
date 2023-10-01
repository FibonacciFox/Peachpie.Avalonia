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
