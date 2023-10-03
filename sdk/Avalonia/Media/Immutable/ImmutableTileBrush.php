<?php
namespace Avalonia\Media\Immutable;
/**
 */
class ImmutableTileBrush extends \System\Object implements 
	\Avalonia\Media\ITileBrush,
	\Avalonia\Media\IBrush,
	\Avalonia\Media\IImmutableBrush
{
	/**
	 * @return \Avalonia\Media\AlignmentX
	 */
	public  function get_AlignmentX(){}
	/**
	 * @return \Avalonia\Media\AlignmentY
	 */
	public  function get_AlignmentY(){}
	/**
	 * @return \Avalonia\RelativeRect
	 */
	public  function get_DestinationRect(){}
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
	 * @return \Avalonia\RelativeRect
	 */
	public  function get_SourceRect(){}
	/**
	 * @return \Avalonia\Media\Stretch
	 */
	public  function get_Stretch(){}
	/**
	 * @return \Avalonia\Media\TileMode
	 */
	public  function get_TileMode(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
