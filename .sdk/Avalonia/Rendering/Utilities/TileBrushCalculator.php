<?php
namespace Avalonia\Rendering\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait LayoutPassTimingOverride {
	/**
	 * @param \Avalonia\Media\ITileBrush $brush
	 * @param \Avalonia\Size $contentSize
	 * @param \Avalonia\Size $targetSize
	 */
	#[MethodOverride]public function __construct_1 ($brush, $contentSize, $targetSize){}
	/**
	 * @param \Avalonia\Media\TileMode $tileMode
	 * @param \Avalonia\Media\Stretch $stretch
	 * @param \Avalonia\Media\AlignmentX $alignmentX
	 * @param \Avalonia\Media\AlignmentY $alignmentY
	 * @param \Avalonia\RelativeRect $sourceRect
	 * @param \Avalonia\RelativeRect $destinationRect
	 * @param \Avalonia\Size $contentSize
	 * @param \Avalonia\Size $targetSize
	 */
	#[MethodOverride]public function __construct_2 ($tileMode, $stretch, $alignmentX, $alignmentY, $sourceRect, $destinationRect, $contentSize, $targetSize){}
}
class TileBrushCalculator extends \System\Object
{
	use LayoutPassTimingOverride;

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsValid;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 * @since readonly
	 */
	public $DestinationRect;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 * @since readonly
	 */
	public $IntermediateClip;
	/**
	 * @property
	 * @var \Avalonia\Size
	 * @since readonly
	 */
	public $IntermediateSize;
	/**
	 * @property
	 * @var \Avalonia\Matrix
	 * @since readonly
	 */
	public $IntermediateTransform;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $NeedsIntermediate;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 * @since readonly
	 */
	public $SourceRect;
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
	 * @param \Avalonia\Rect& &$drawRect
	 * @return \Avalonia\Matrix
	 */
	public static function CalculateIntermediateTransform($tileMode, $sourceRect, $destinationRect, $scale, $translate, &$drawRect){}
	/**
	 * @uses TileBrushCalculatorOverride::__construct_1 <br>public , args: ($brush, $contentSize, $targetSize)<br>
	 * @uses TileBrushCalculatorOverride::__construct_2 <br>public , args: ($tileMode, $stretch, $alignmentX, $alignmentY, $sourceRect, $destinationRect, $contentSize, $targetSize)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}