<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SkewTransformOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Double|double $angleX
	 * @param \System\Double|double $angleY
	 */
	#[MethodOverride]public function __construct_2 ($angleX, $angleY){}
}
final class SkewTransform extends \Avalonia\Media\Transform implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IMutableTransform,
	\Avalonia\Media\ITransform,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource_1,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource,
	\Avalonia\Rendering\Composition\ICompositorSerializable
{
	use SkewTransformOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $AngleXProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $AngleYProperty;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $AngleX;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $AngleY;
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
	 * @uses SkewTransformOverride::__construct_1 <br>public , args: ()<br>
	 * @uses SkewTransformOverride::__construct_2 <br>public , args: ($angleX, $angleY)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}