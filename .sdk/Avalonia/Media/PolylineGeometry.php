<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PolylineGeometryOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $points [generic: Avalonia\Point]
	 * @param \System\Boolean|bool $isFilled
	 */
	#[MethodOverride]public function __construct_2 ($points, $isFilled){}
}
class PolylineGeometry extends \Avalonia\Media\Geometry implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	use PolylineGeometryOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Media\PolylineGeometry,System\Collections\Generic\IList_1[Avalonia\Point]]
	 */
	public static $PointsProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $IsFilledProperty;
	/**
	 * @property
	 * @var \System\Collections\Generic\IList_1[Avalonia\Point]
	 */
	public $Points;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsFilled;
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
	private function OnPointsChanged($newValue){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 * @uses PolylineGeometryOverride::__construct_1 <br>public , args: ()<br>
	 * @uses PolylineGeometryOverride::__construct_2 <br>public , args: ($points, $isFilled)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}