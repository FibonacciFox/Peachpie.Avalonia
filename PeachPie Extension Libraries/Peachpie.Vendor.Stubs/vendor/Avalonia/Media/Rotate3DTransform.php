<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Rotate3DTransformOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Double|double $angleX
	 * @param \System\Double|double $angleY
	 * @param \System\Double|double $angleZ
	 * @param \System\Double|double $centerX
	 * @param \System\Double|double $centerY
	 * @param \System\Double|double $centerZ
	 * @param \System\Double|double $depth
	 */
	#[MethodOverride]public function __construct_2 ($angleX, $angleY, $angleZ, $centerX, $centerY, $centerZ, $depth){}
}
final class Rotate3DTransform extends \Avalonia\Media\Transform implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IMutableTransform,
	\Avalonia\Media\ITransform,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource_1,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource,
	\Avalonia\Rendering\Composition\ICompositorSerializable
{
	use Rotate3DTransformOverride;
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
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $AngleZProperty;
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
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $CenterZProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $DepthProperty;
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
	 * @var \System\Double|double
	 */
	public $AngleZ;
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
	 * @var \System\Double|double
	 */
	public $CenterZ;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Depth;
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
	 * @property dublicate
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
	 * @uses Rotate3DTransformOverride::__construct_1 <br>public , args: ()<br>
	 * @uses Rotate3DTransformOverride::__construct_2 <br>public , args: ($angleX, $angleY, $angleZ, $centerX, $centerY, $centerZ, $depth)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}