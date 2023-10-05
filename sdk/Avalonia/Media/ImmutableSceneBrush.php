<?php
namespace Avalonia\Media;
/**
 */
class ImmutableSceneBrush extends \Avalonia\Media\Immutable\ImmutableTileBrush implements 
	\Avalonia\Media\ITileBrush,
	\Avalonia\Media\IBrush,
	\Avalonia\Media\IImmutableBrush
{
	/**
	 * @var \Avalonia\Media\AlignmentX
	 * @property
	 */
	public readonly $AlignmentX;
	/**
	 * @var \Avalonia\Media\AlignmentY
	 * @property
	 */
	public readonly $AlignmentY;
	/**
	 * @var \Avalonia\RelativeRect
	 * @property
	 */
	public readonly $DestinationRect;
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
	 * @var \Avalonia\RelativeRect
	 * @property
	 */
	public readonly $SourceRect;
	/**
	 * @var \Avalonia\Media\Stretch
	 * @property
	 */
	public readonly $Stretch;
	/**
	 * @var \Avalonia\Media\TileMode
	 * @property
	 */
	public readonly $TileMode;
}
