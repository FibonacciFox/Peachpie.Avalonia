<?php
namespace System\Collections\ObjectModel;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ReadOnlyCollection_1Override {
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @return \T|object
	 */
	#[MethodOverride]public function get_Item_1 ($index){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @return \T|object
	 */
	#[MethodOverride]private function get_Item_2 ($index){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @return \System\Object|object
	 */
	#[MethodOverride]private function get_Item_3 ($index){}
	/**
	 * @deprecated
	 * @param \T|object $value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Contains_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function Contains_2 ($value){}
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
	 * @param \T|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function IndexOf_2 ($value){}
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
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function set_Item_1 ($index, $value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function set_Item_2 ($index, $value){}
	/**
	 * @deprecated
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Add_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function Add_2 ($value){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Clear_1 (){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Clear_2 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Insert_1 ($index, $value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Insert_2 ($index, $value){}
	/**
	 * @deprecated
	 * @param \T|object $value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function Remove_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Remove_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function RemoveAt_1 ($index){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function RemoveAt_2 ($index){}
}
class ReadOnlyCollection_1 extends \System\Object implements
	\System\Collections\Generic\IList_1,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\IList,
	\System\Collections\ICollection,
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1
{
	use ReadOnlyCollection_1Override;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \T|object
	 * @since readonly
	 */
	public $Item;
	/**
	 * @uses ReadOnlyCollection_1Override::get_Item_1 <br>public , args: ($index)<br>
	 * @uses ReadOnlyCollection_1Override::get_Item_2 <br>private , args: ($index)<br>
	 * @uses ReadOnlyCollection_1Override::get_Item_3 <br>private , args: ($index)<br>
	 * @var mixed|\override ...$args
	 * @return \T|object|\System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function get_Item (\override ...$args){}
	/**
	 * @uses ReadOnlyCollection_1Override::Contains_1 <br>public , args: ($value)<br>
	 * @uses ReadOnlyCollection_1Override::Contains_2 <br>private , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function Contains (\override ...$args){}
	/**
	 * @uses ReadOnlyCollection_1Override::CopyTo_1 <br>public , args: ($array, $index)<br>
	 * @uses ReadOnlyCollection_1Override::CopyTo_2 <br>private , args: ($array, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function CopyTo (\override ...$args){}
	/**
	 * @uses ReadOnlyCollection_1Override::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses ReadOnlyCollection_1Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @uses ReadOnlyCollection_1Override::IndexOf_1 <br>public , args: ($value)<br>
	 * @uses ReadOnlyCollection_1Override::IndexOf_2 <br>private , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function IndexOf (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ReadOnlyCollection_1Override::get_IsReadOnly_1 <br>private , args: ()<br>
	 * @uses ReadOnlyCollection_1Override::get_IsReadOnly_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function get_IsReadOnly (){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ReadOnlyCollection_1Override::set_Item_1 <br>private , args: ($index, $value)<br>
	 * @uses ReadOnlyCollection_1Override::set_Item_2 <br>private , args: ($index, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function set_Item (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ReadOnlyCollection_1Override::Add_1 <br>private , args: ($value)<br>
	 * @uses ReadOnlyCollection_1Override::Add_2 <br>private , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\Int32|int|mixed|\override
	 */
	#[MethodOverridePrivate]function Add (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ReadOnlyCollection_1Override::Clear_1 <br>private , args: ()<br>
	 * @uses ReadOnlyCollection_1Override::Clear_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function Clear (){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ReadOnlyCollection_1Override::Insert_1 <br>private , args: ($index, $value)<br>
	 * @uses ReadOnlyCollection_1Override::Insert_2 <br>private , args: ($index, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function Insert (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ReadOnlyCollection_1Override::Remove_1 <br>private , args: ($value)<br>
	 * @uses ReadOnlyCollection_1Override::Remove_2 <br>private , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|\System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function Remove (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ReadOnlyCollection_1Override::RemoveAt_1 <br>private , args: ($index)<br>
	 * @uses ReadOnlyCollection_1Override::RemoveAt_2 <br>private , args: ($index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function RemoveAt (\override ...$args){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	private function get_IsFixedSize(){}
	private static function IsCompatibleObject($value){}
	/**
	 * @param \System\Collections\Generic\IList_1 $list [generic: T]
	 */
	public function __construct($list){}
}