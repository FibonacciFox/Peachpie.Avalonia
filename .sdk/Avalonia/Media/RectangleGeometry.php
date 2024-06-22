<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RectangleGeometryOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \Avalonia\Rect $rect
	 */
	#[MethodOverride]public function __construct_2 ($rect){}
}
class RectangleGeometry extends \Avalonia\Media\Geometry implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	use RectangleGeometryOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Rect]
	 */
	public static $RectProperty;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 */
	public $Rect;
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
	 * @property duplicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	private function GetPropertyChangedSubscribers(){}
	/**
	 * @uses RectangleGeometryOverride::__construct_1 <br>public , args: ()<br>
	 * @uses RectangleGeometryOverride::__construct_2 <br>public , args: ($rect)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}