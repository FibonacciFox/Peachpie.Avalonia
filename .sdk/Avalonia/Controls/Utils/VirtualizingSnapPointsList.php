<?php
namespace Avalonia\Controls\Utils;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait VirtualizingSnapPointsListOverride {
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]public function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_2 (){}
}
class VirtualizingSnapPointsList extends \System\Object implements
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	use VirtualizingSnapPointsListOverride;

	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Item;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @uses VirtualizingSnapPointsListOverride::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses VirtualizingSnapPointsListOverride::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @param \Avalonia\Controls\Utils\RealizedStackElements $realizedElements
	 * @param \System\Int32|int $count
	 * @param \Avalonia\Layout\Orientation $orientation
	 * @param \Avalonia\Layout\Orientation $parentOrientation
	 * @param \Avalonia\Controls\Primitives\SnapPointsAlignment $snapPointsAlignment
	 * @param \System\Double|double $size
	 */
	public function __construct($realizedElements, $count, $orientation, $parentOrientation, $snapPointsAlignment, $size){}
}