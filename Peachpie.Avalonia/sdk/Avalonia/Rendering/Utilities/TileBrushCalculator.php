<?php
namespace Avalonia\Rendering\Utilities;
/**
 */
class TileBrushCalculator extends \System\Object
{
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsValid(){}
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_DestinationRect(){}
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_IntermediateClip(){}
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_IntermediateSize(){}
	/**
	 * @return \Avalonia\Matrix
	 */
	public  function get_IntermediateTransform(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_NeedsIntermediate(){}
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_SourceRect(){}
	/**
	 * @param \Avalonia\Media\AlignmentX $alignmentX
	 * @param \Avalonia\Media\AlignmentY $alignmentY
	 * @param \Avalonia\Rect $sourceRect
	 * @param \Avalonia\Rect $destinationRect
	 * @param \Avalonia\Vector $scale
	 * @return \Avalonia\Vector
	 */
	public static function CalculateTranslate($alignmentX, $alignmentY, $sourceRect, $destinationRect, $scale){}
	/**
	 * @param \Avalonia\Media\TileMode $tileMode
	 * @param \Avalonia\Rect $sourceRect
	 * @param \Avalonia\Rect $destinationRect
	 * @param \Avalonia\Vector $scale
	 * @param \Avalonia\Vector $translate
	 * @param \Avalonia\Rect& $drawRect
	 * @return \Avalonia\Matrix
	 */
	public static function CalculateIntermediateTransform($tileMode, $sourceRect, $destinationRect, $scale, $translate, $drawRect){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
