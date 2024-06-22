<?php
namespace Avalonia\Controls\Selection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SelectedIndexes_1Override {
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
	 */
	#[MethodOverride]public function __construct_2 ($ranges){}
}
class SelectedIndexes_1 extends \System\Object implements
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	use SelectedIndexes_1Override;

	/**
	 * @property
	 * @var \System\Int32|int
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
	 * @uses SelectedIndexes_1Override::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses SelectedIndexes_1Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $ranges [generic: Avalonia\Controls\Selection\IndexRange]
	 * @return \Avalonia\Controls\Selection\SelectedIndexes_1[T]
	 */
	public static function Create($ranges){}
	/**
	 * @uses SelectedIndexes_1Override::__construct_1 <br>public , args: ($owner)<br>
	 * @uses SelectedIndexes_1Override::__construct_2 <br>public , args: ($ranges)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}