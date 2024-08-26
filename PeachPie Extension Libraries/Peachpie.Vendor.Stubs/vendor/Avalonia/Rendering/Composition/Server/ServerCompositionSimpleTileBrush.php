<?php
namespace Avalonia\Rendering\Composition\Server;
class ServerCompositionSimpleTileBrush extends \Avalonia\Rendering\Composition\Server\ServerCompositionSimpleBrush implements
	\Avalonia\Rendering\Composition\Server\IServerRenderResource,
	\Avalonia\Rendering\Composition\Server\IServerRenderResourceObserver,
	\System\IDisposable,
	\Avalonia\Media\IBrush
{
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfAlignmentXProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfAlignmentYProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfDestinationRectProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfSourceRectProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfStretchProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfTileModeProperty;
	/**
	 * @property
	 * @var \Avalonia\Media\AlignmentX
	 */
	public $AlignmentX;
	/**
	 * @property
	 * @var \Avalonia\Media\AlignmentY
	 */
	public $AlignmentY;
	/**
	 * @property
	 * @var \Avalonia\RelativeRect
	 */
	public $DestinationRect;
	/**
	 * @property
	 * @var \Avalonia\RelativeRect
	 */
	public $SourceRect;
	/**
	 * @property
	 * @var \Avalonia\Media\Stretch
	 */
	public $Stretch;
	/**
	 * @property
	 * @var \Avalonia\Media\TileMode
	 */
	public $TileMode;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Opacity;
	/**
	 * @property
	 * @var \Avalonia\RelativePoint
	 */
	public $TransformOrigin;
	/**
	 * @property
	 * @var \Avalonia\Media\ITransform
	 */
	public $Transform;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsDisposed;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Server\ServerCompositor
	 * @since readonly
	 */
	public $Compositor;

}