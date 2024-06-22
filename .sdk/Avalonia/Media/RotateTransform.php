<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RotateTransformOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Double|double $angle
	 */
	#[MethodOverride]public function __construct_2 ($angle){}
	/**
	 * @param \System\Double|double $angle
	 * @param \System\Double|double $centerX
	 * @param \System\Double|double $centerY
	 */
	#[MethodOverride]public function __construct_3 ($angle, $centerX, $centerY){}
}
final class RotateTransform extends \Avalonia\Media\Transform implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IMutableTransform,
	\Avalonia\Media\ITransform,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource_1,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource,
	\Avalonia\Rendering\Composition\ICompositorSerializable
{
	use RotateTransformOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $AngleProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $CenterXProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $CenterYProperty;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Angle;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $CenterX;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $CenterY;
	/**
	 * @property
	 * @var \Avalonia\Matrix
	 * @since readonly
	 */
	public $Value;
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
	private function TryGetServer($c){}
	private function AddRefOnCompositor($c){}
	private function ReleaseOnCompositor($c){}
	private function SerializeChanges($c, $writer){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 * @uses RotateTransformOverride::__construct_1 <br>public , args: ()<br>
	 * @uses RotateTransformOverride::__construct_2 <br>public , args: ($angle)<br>
	 * @uses RotateTransformOverride::__construct_3 <br>public , args: ($angle, $centerX, $centerY)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}