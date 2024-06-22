<?php
namespace Avalonia\Media;
class TileBrush extends \Avalonia\Media\Brush implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IBrush,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource_1,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource,
	\Avalonia\Rendering\Composition\ICompositorSerializable,
	\Avalonia\Media\ITileBrush
{

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\AlignmentX]
	 */
	public static $AlignmentXProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\AlignmentY]
	 */
	public static $AlignmentYProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\RelativeRect]
	 */
	public static $DestinationRectProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\RelativeRect]
	 */
	public static $SourceRectProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\Stretch]
	 */
	public static $StretchProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\TileMode]
	 */
	public static $TileModeProperty;
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
	 * @var \Avalonia\Media\ITransform
	 */
	public $Transform;
	/**
	 * @property
	 * @var \Avalonia\RelativePoint
	 */
	public $TransformOrigin;
	/**
	 * @property
	 * @var \Avalonia\Animation\Transitions
	 */
	public $Transitions;
	/**
	 * @property duplicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	private function GetForCompositor($c){}
	private function AddRefOnCompositor($c){}
	private function ReleaseOnCompositor($c){}
	private function TryGetServer($c){}
	private function GetPropertyChangedSubscribers(){}
}