<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait GradientBrushOverride {
	/**
	 * @deprecated
	 * @return \Avalonia\Media\GradientStops
	 */
	#[MethodOverride]public function get_GradientStops_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	#[MethodOverride]private function get_GradientStops_2 (){}
}
class GradientBrush extends \Avalonia\Media\Brush implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IBrush,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource_1,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource,
	\Avalonia\Rendering\Composition\ICompositorSerializable,
	\Avalonia\Media\IGradientBrush,
	\Avalonia\Media\IMutableBrush
{
	use GradientBrushOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\GradientSpreadMethod]
	 */
	public static $SpreadMethodProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\GradientStops]
	 */
	public static $GradientStopsProperty;
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
	/**
	 * @uses GradientBrushOverride::get_GradientStops_1 <br>public , args: ()<br>
	 * @uses GradientBrushOverride::get_GradientStops_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Media\GradientStops|\System\Collections\Generic\IReadOnlyList_1|mixed|\override
	 */
	#[MethodOverridePublic]function get_GradientStops (){}
	private function GradientStopsChanged($sender, $e){}
	private function GradientStopChanged($e){}
	/**
	 * @return \Avalonia\Media\IImmutableBrush
	 */
	abstract public function ToImmutable();
	private function GetForCompositor($c){}
	private function AddRefOnCompositor($c){}
	private function ReleaseOnCompositor($c){}
	private function TryGetServer($c){}
	private function GetPropertyChangedSubscribers(){}
}