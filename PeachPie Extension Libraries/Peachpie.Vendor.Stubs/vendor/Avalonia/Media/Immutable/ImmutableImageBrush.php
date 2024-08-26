<?php
namespace Avalonia\Media\Immutable;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ImmutableDashStyleOverride {
	/**
	 * @param \Avalonia\Media\Imaging\Bitmap $source
	 * @param \Avalonia\Media\AlignmentX $alignmentX
	 * @param \Avalonia\Media\AlignmentY $alignmentY
	 * @param \System\Nullable_1 $destinationRect [generic: Avalonia\RelativeRect]
	 * @param \System\Double|double $opacity
	 * @param \Avalonia\Media\Immutable\ImmutableTransform $transform
	 * @param \Avalonia\RelativePoint $transformOrigin
	 * @param \System\Nullable_1 $sourceRect [generic: Avalonia\RelativeRect]
	 * @param \Avalonia\Media\Stretch $stretch
	 * @param \Avalonia\Media\TileMode $tileMode
	 */
	#[MethodOverride]public function __construct_1 ($source, $alignmentX, $alignmentY, $destinationRect, $opacity, $transform, $transformOrigin, $sourceRect, $stretch, $tileMode){}
	/**
	 * @param \Avalonia\Media\IImageBrush $source
	 */
	#[MethodOverride]public function __construct_2 ($source){}
}
class ImmutableImageBrush extends \Avalonia\Media\Immutable\ImmutableTileBrush implements
	\Avalonia\Media\ITileBrush,
	\Avalonia\Media\IBrush,
	\Avalonia\Media\IImmutableBrush,
	\Avalonia\Media\IImageBrush
{
	use ImmutableDashStyleOverride;
	/**
	 * @property
	 * @var \Avalonia\Media\IImageBrushSource
	 * @since readonly
	 */
	public $Source;
	/**
	 * @property
	 * @var \Avalonia\Media\AlignmentX
	 * @since readonly
	 */
	public $AlignmentX;
	/**
	 * @property
	 * @var \Avalonia\Media\AlignmentY
	 * @since readonly
	 */
	public $AlignmentY;
	/**
	 * @property
	 * @var \Avalonia\RelativeRect
	 * @since readonly
	 */
	public $DestinationRect;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Opacity;
	/**
	 * @property
	 * @var \Avalonia\Media\ITransform
	 * @since readonly
	 */
	public $Transform;
	/**
	 * @property
	 * @var \Avalonia\RelativePoint
	 * @since readonly
	 */
	public $TransformOrigin;
	/**
	 * @property
	 * @var \Avalonia\RelativeRect
	 * @since readonly
	 */
	public $SourceRect;
	/**
	 * @property
	 * @var \Avalonia\Media\Stretch
	 * @since readonly
	 */
	public $Stretch;
	/**
	 * @property
	 * @var \Avalonia\Media\TileMode
	 * @since readonly
	 */
	public $TileMode;
	/**
	 * @uses ImmutableImageBrushOverride::__construct_1 <br>public , args: ($source, $alignmentX, $alignmentY, $destinationRect, $opacity, $transform, $transformOrigin, $sourceRect, $stretch, $tileMode)<br>
	 * @uses ImmutableImageBrushOverride::__construct_2 <br>public , args: ($source)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}