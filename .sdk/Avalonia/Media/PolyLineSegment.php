<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PolyLineSegmentOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $points [generic: Avalonia\Point]
	 */
	#[MethodOverride]public function __construct_2 ($points){}
}
final class PolyLineSegment extends \Avalonia\Media\PathSegment implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	use PolyLineSegmentOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Collections\Generic\IList_1[Avalonia\Point]]
	 */
	public static $PointsProperty;
	/**
	 * @property
	 * @var \System\Collections\Generic\IList_1[Avalonia\Point]
	 */
	public $Points;
	/**
	 * @property dublicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	private function GetPropertyChangedSubscribers(){}
	/**
	 * @uses PolyLineSegmentOverride::__construct_1 <br>public , args: ()<br>
	 * @uses PolyLineSegmentOverride::__construct_2 <br>public , args: ($points)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}