<?php
namespace Avalonia\Controls\Selection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SelectedItems_1Override {
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
	/**
	 * @param \Avalonia\Controls\Selection\SelectionModel_1 $owner [generic: T]
	 */
	#[MethodOverride]public function __construct_1 ($owner){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $ranges [generic: Avalonia\Controls\Selection\IndexRange]
	 * @param \Avalonia\Controls\ItemsSourceView_1 $items [generic: T]
	 */
	#[MethodOverride]public function __construct_2 ($ranges, $items){}
}
class SelectedItems_1 extends \System\Object implements
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	use SelectedItems_1Override;
	/**
	 * @property
	 * @var \T|object
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
	 * @uses SelectedItems_1Override::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses SelectedItems_1Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $ranges [generic: Avalonia\Controls\Selection\IndexRange]
	 * @param \Avalonia\Controls\ItemsSourceView_1 $items [generic: T]
	 * @return \Avalonia\Controls\Selection\SelectedItems_1[T]
	 */
	public static function Create($ranges, $items){}
	/**
	 * @uses SelectedItems_1Override::__construct_1 <br>public , args: ($owner)<br>
	 * @uses SelectedItems_1Override::__construct_2 <br>public , args: ($ranges, $items)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}