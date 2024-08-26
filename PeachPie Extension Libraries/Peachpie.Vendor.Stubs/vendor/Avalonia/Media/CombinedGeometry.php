<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CombinedGeometryOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \Avalonia\Media\Geometry $geometry1
	 * @param \Avalonia\Media\Geometry $geometry2
	 */
	#[MethodOverride]public function __construct_2 ($geometry1, $geometry2){}
	/**
	 * @param \Avalonia\Media\GeometryCombineMode $combineMode
	 * @param \Avalonia\Media\Geometry $geometry1
	 * @param \Avalonia\Media\Geometry $geometry2
	 */
	#[MethodOverride]public function __construct_3 ($combineMode, $geometry1, $geometry2){}
	/**
	 * @param \Avalonia\Media\GeometryCombineMode $combineMode
	 * @param \Avalonia\Media\Geometry $geometry1
	 * @param \Avalonia\Media\Geometry $geometry2
	 * @param \Avalonia\Media\Transform $transform
	 */
	#[MethodOverride]public function __construct_4 ($combineMode, $geometry1, $geometry2, $transform){}
}
class CombinedGeometry extends \Avalonia\Media\Geometry implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	use CombinedGeometryOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\Geometry]
	 */
	public static $Geometry1Property;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\Geometry]
	 */
	public static $Geometry2Property;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\GeometryCombineMode]
	 */
	public static $GeometryCombineModeProperty;
	/**
	 * @property
	 * @var \Avalonia\Media\Geometry
	 */
	public $Geometry1;
	/**
	 * @property
	 * @var \Avalonia\Media\Geometry
	 */
	public $Geometry2;
	/**
	 * @property
	 * @var \Avalonia\Media\GeometryCombineMode
	 */
	public $GeometryCombineMode;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 * @since readonly
	 */
	public $Bounds;
	/**
	 * @property
	 * @var \Avalonia\Media\Transform
	 */
	public $Transform;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $ContourLength;
	/**
	 * @property dublicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	private function GetPropertyChangedSubscribers(){}
	/**
	 * @uses CombinedGeometryOverride::__construct_1 <br>public , args: ()<br>
	 * @uses CombinedGeometryOverride::__construct_2 <br>public , args: ($geometry1, $geometry2)<br>
	 * @uses CombinedGeometryOverride::__construct_3 <br>public , args: ($combineMode, $geometry1, $geometry2)<br>
	 * @uses CombinedGeometryOverride::__construct_4 <br>public , args: ($combineMode, $geometry1, $geometry2, $transform)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}