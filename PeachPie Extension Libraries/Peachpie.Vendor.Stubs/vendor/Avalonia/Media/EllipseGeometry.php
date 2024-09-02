<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EllipseGeometryOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \Avalonia\Rect $rect
	 */
	#[MethodOverride]public function __construct_2 ($rect){}
}
class EllipseGeometry extends \Avalonia\Media\Geometry implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	use EllipseGeometryOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Rect]
	 */
	public static $RectProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $RadiusXProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $RadiusYProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Point]
	 */
	public static $CenterProperty;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 */
	public $Rect;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $RadiusX;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $RadiusY;
	/**
	 * @property
	 * @var \Avalonia\Point
	 */
	public $Center;
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
	 * @uses EllipseGeometryOverride::__construct_1 <br>public , args: ()<br>
	 * @uses EllipseGeometryOverride::__construct_2 <br>public , args: ($rect)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}