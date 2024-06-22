<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ScaleTransformOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Double|double $scaleX
	 * @param \System\Double|double $scaleY
	 */
	#[MethodOverride]public function __construct_2 ($scaleX, $scaleY){}
}
final class ScaleTransform extends \Avalonia\Media\Transform implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IMutableTransform,
	\Avalonia\Media\ITransform,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource_1,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource,
	\Avalonia\Rendering\Composition\ICompositorSerializable
{
	use ScaleTransformOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $ScaleXProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $ScaleYProperty;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $ScaleX;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $ScaleY;
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
	 * @uses ScaleTransformOverride::__construct_1 <br>public , args: ()<br>
	 * @uses ScaleTransformOverride::__construct_2 <br>public , args: ($scaleX, $scaleY)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}