<?php
namespace Avalonia\Media;
final class RadialGradientBrush extends \Avalonia\Media\GradientBrush implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IBrush,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource_1,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource,
	\Avalonia\Rendering\Composition\ICompositorSerializable,
	\Avalonia\Media\IGradientBrush,
	\Avalonia\Media\IMutableBrush,
	\Avalonia\Media\IRadialGradientBrush
{
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\RelativePoint]
	 */
	public static $CenterProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\RelativePoint]
	 */
	public static $GradientOriginProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $RadiusProperty;
	/**
	 * @property
	 * @var \Avalonia\RelativePoint
	 */
	public $Center;
	/**
	 * @property
	 * @var \Avalonia\RelativePoint
	 */
	public $GradientOrigin;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Radius;
	/**
	 * @property
	 * @var \Avalonia\Media\GradientSpreadMethod
	 */
	public $SpreadMethod;
	/**
	 * @property
	 * @var \Avalonia\Media\GradientStops
	 */
	public $GradientStops;
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
	 * @property dublicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	private function GetForCompositor($c){}
	private function AddRefOnCompositor($c){}
	private function ReleaseOnCompositor($c){}
	private function TryGetServer($c){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 */
	public function __construct(){}
}