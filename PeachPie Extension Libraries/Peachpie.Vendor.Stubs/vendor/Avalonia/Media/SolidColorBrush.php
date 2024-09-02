<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SolidColorBrushOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \Avalonia\Media\Color $color
	 * @param \System\Double|double $opacity
	 */
	#[MethodOverride]public function __construct_2 ($color, $opacity){}
	/**
	 * @param \System\UInt32 $color
	 */
	#[MethodOverride]public function __construct_3 ($color){}
}
final class SolidColorBrush extends \Avalonia\Media\Brush implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IBrush,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource_1,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource,
	\Avalonia\Rendering\Composition\ICompositorSerializable,
	\Avalonia\Media\ISolidColorBrush,
	\Avalonia\Media\IMutableBrush
{
	use SolidColorBrushOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\Color]
	 */
	public static $ColorProperty;
	/**
	 * @property
	 * @var \Avalonia\Media\Color
	 */
	public $Color;
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
	 * @return \Avalonia\Media\IImmutableBrush
	 */
	public function ToImmutable(){}
	private function GetForCompositor($c){}
	private function AddRefOnCompositor($c){}
	private function ReleaseOnCompositor($c){}
	private function TryGetServer($c){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 * @uses SolidColorBrushOverride::__construct_1 <br>public , args: ()<br>
	 * @uses SolidColorBrushOverride::__construct_2 <br>public , args: ($color, $opacity)<br>
	 * @uses SolidColorBrushOverride::__construct_3 <br>public , args: ($color)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}