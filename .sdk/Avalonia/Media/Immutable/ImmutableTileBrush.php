<?php
namespace Avalonia\Media\Immutable;
class ImmutableTileBrush extends \System\Object implements
	\Avalonia\Media\ITileBrush,
	\Avalonia\Media\IBrush,
	\Avalonia\Media\IImmutableBrush
{

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

}