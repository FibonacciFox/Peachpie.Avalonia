<?php
namespace Avalonia\Media;
final class LinearGradientBrush extends \Avalonia\Media\GradientBrush implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IBrush,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource_1,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource,
	\Avalonia\Rendering\Composition\ICompositorSerializable,
	\Avalonia\Media\IGradientBrush,
	\Avalonia\Media\IMutableBrush,
	\Avalonia\Media\ILinearGradientBrush
{

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\RelativePoint]
	 */
	public static $StartPointProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\RelativePoint]
	 */
	public static $EndPointProperty;
	/**
	 * @property
	 * @var \Avalonia\RelativePoint
	 */
	public $StartPoint;
	/**
	 * @property
	 * @var \Avalonia\RelativePoint
	 */
	public $EndPoint;
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
	 * @property duplicate
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