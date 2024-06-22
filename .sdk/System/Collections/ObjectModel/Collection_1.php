<?php
namespace System\Collections\ObjectModel;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Collection_1Override {
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @return \T|object
	 */
	#[MethodOverride]public function get_Item_1 ($index){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @return \System\Object|object
	 */
	#[MethodOverride]private function get_Item_2 ($index){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function set_Item_1 ($index, $value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function set_Item_2 ($index, $value){}
	/**
	 * @deprecated
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Add_1 ($item){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function Add_2 ($value){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_1 ($array, $index){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function CopyTo_2 ($array, $index){}
	/**
	 * @deprecated
	 * @param \T|object $item
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Contains_1 ($item){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function Contains_2 ($value){}
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
	 * @deprecated
	 * @param \T|object $item
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_1 ($item){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function IndexOf_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Insert_1 ($index, $item){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Insert_2 ($index, $value){}
	/**
	 * @deprecated
	 * @param \T|object $item
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Remove_1 ($item){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Remove_2 ($value){}
	/**
	 * @deprecated
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function get_IsReadOnly_1 (){}
	/**
	 * @deprecated
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function get_IsReadOnly_2 (){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Collections\Generic\IList_1 $list [generic: T]
	 */
	#[MethodOverride]public function __construct_2 ($list){}
}
class Collection_1 extends \System\Object implements
	\System\Collections\Generic\IList_1,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\IList,
	\System\Collections\ICollection,
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1
{
	use Collection_1Override;

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \T|object
	 */
	public $Item;
	/**
	 * @uses Collection_1Override::get_Item_1 <br>public , args: ($index)<br>
	 * @uses Collection_1Override::get_Item_2 <br>private , args: ($index)<br>
	 * @var mixed|\override ...$args
	 * @return \T|object|\System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function get_Item (\override ...$args){}
	/**
	 * @uses Collection_1Override::set_Item_1 <br>public , args: ($index, $value)<br>
	 * @uses Collection_1Override::set_Item_2 <br>private , args: ($index, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function set_Item (\override ...$args){}
	/**
	 * @uses Collection_1Override::Add_1 <br>public , args: ($item)<br>
	 * @uses Collection_1Override::Add_2 <br>private , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function Add (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	/**
	 * @uses Collection_1Override::CopyTo_1 <br>public , args: ($array, $index)<br>
	 * @uses Collection_1Override::CopyTo_2 <br>private , args: ($array, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function CopyTo (\override ...$args){}
	/**
	 * @uses Collection_1Override::Contains_1 <br>public , args: ($item)<br>
	 * @uses Collection_1Override::Contains_2 <br>private , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function Contains (\override ...$args){}
	/**
	 * @uses Collection_1Override::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses Collection_1Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @uses Collection_1Override::IndexOf_1 <br>public , args: ($item)<br>
	 * @uses Collection_1Override::IndexOf_2 <br>private , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function IndexOf (\override ...$args){}
	/**
	 * @uses Collection_1Override::Insert_1 <br>public , args: ($index, $item)<br>
	 * @uses Collection_1Override::Insert_2 <br>private , args: ($index, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Insert (\override ...$args){}
	/**
	 * @uses Collection_1Override::Remove_1 <br>public , args: ($item)<br>
	 * @uses Collection_1Override::Remove_2 <br>private , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|\System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Remove (\override ...$args){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public function RemoveAt($index){}
	/**
	 * @return \System\Void|void
	 */
	protected function ClearItems(){}
	/**
	 * @param \System\Int32|int $index
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	protected function InsertItem($index, $item){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	protected function RemoveItem($index){}
	/**
	 * @param \System\Int32|int $index
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	protected function SetItem($index, $item){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses Collection_1Override::get_IsReadOnly_1 <br>private , args: ()<br>
	 * @uses Collection_1Override::get_IsReadOnly_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function get_IsReadOnly (){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	private function get_IsFixedSize(){}
	private static function IsCompatibleObject($value){}
	/**
	 * @uses Collection_1Override::__construct_1 <br>public , args: ()<br>
	 * @uses Collection_1Override::__construct_2 <br>public , args: ($list)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}