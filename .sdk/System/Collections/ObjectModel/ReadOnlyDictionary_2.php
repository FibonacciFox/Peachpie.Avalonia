<?php
namespace System\Collections\ObjectModel;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ReadOnlyDictionary_2Override {
	/**
	 * @deprecated
	 * @return \System\Collections\ObjectModel\ReadOnlyDictionary_2
	 */
	#[MethodOverride]public function get_Keys_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\ICollection_1
	 */
	#[MethodOverride]private function get_Keys_2 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\ICollection
	 */
	#[MethodOverride]private function get_Keys_3 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]private function get_Keys_4 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\ObjectModel\ReadOnlyDictionary_2
	 */
	#[MethodOverride]public function get_Values_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\ICollection_1
	 */
	#[MethodOverride]private function get_Values_2 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\ICollection
	 */
	#[MethodOverride]private function get_Values_3 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]private function get_Values_4 (){}
	/**
	 * @deprecated
	 * @param \TKey $key
	 * @return \TValue
	 */
	#[MethodOverride]public function get_Item_1 ($key){}
	/**
	 * @deprecated
	 * @param \TKey $key
	 * @return \TValue
	 */
	#[MethodOverride]private function get_Item_2 ($key){}
	/**
	 * @deprecated
	 * @param \System\Object|object $key
	 * @return \System\Object|object
	 */
	#[MethodOverride]private function get_Item_3 ($key){}
	/**
	 * @deprecated
	 * @param \TKey $key
	 * @param \TValue $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Add_1 ($key, $value){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\KeyValuePair_2 $item [generic: TKey,TValue]
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Add_2 ($item){}
	/**
	 * @deprecated
	 * @param \System\Object|object $key
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Add_3 ($key, $value){}
	/**
	 * @deprecated
	 * @param \TKey $key
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function Remove_1 ($key){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\KeyValuePair_2 $item [generic: TKey,TValue]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function Remove_2 ($item){}
	/**
	 * @deprecated
	 * @param \System\Object|object $key
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Remove_3 ($key){}
	/**
	 * @deprecated
	 * @param \TKey $key
	 * @param \TValue $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function set_Item_1 ($key, $value){}
	/**
	 * @deprecated
	 * @param \System\Object|object $key
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function set_Item_2 ($key, $value){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\KeyValuePair_2 $item [generic: TKey,TValue]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function Contains_1 ($item){}
	/**
	 * @deprecated
	 * @param \System\Object|object $key
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function Contains_2 ($key){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\KeyValuePair_2 $array [generic: TKey,TValue]
	 * @param \System\Int32|int $arrayIndex
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function CopyTo_1 ($array, $arrayIndex){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function CopyTo_2 ($array, $index){}
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
	 * @return \System\Collections\IDictionaryEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_3 (){}
}
class ReadOnlyDictionary_2 extends \System\Object implements
	\System\Collections\Generic\IDictionary_2,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\IDictionary,
	\System\Collections\ICollection,
	\System\Collections\Generic\IReadOnlyDictionary_2,
	\System\Collections\Generic\IReadOnlyCollection_1
{
	use ReadOnlyDictionary_2Override;

	/**
	 * @property
	 * @var \System\Collections\ObjectModel\ReadOnlyDictionary_2+KeyCollection[TKey,TValue]
	 * @since readonly
	 */
	public $Keys;
	/**
	 * @property
	 * @var \System\Collections\ObjectModel\ReadOnlyDictionary_2+ValueCollection[TKey,TValue]
	 * @since readonly
	 */
	public $Values;
	/**
	 * @property
	 * @var \TValue
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
	 * @uses ReadOnlyDictionary_2Override::get_Keys_1 <br>public , args: ()<br>
	 * @uses ReadOnlyDictionary_2Override::get_Keys_2 <br>private , args: ()<br>
	 * @uses ReadOnlyDictionary_2Override::get_Keys_3 <br>private , args: ()<br>
	 * @uses ReadOnlyDictionary_2Override::get_Keys_4 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\ObjectModel\ReadOnlyDictionary_2|\System\Collections\Generic\ICollection_1|\System\Collections\ICollection|\System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function get_Keys (){}
	/**
	 * @uses ReadOnlyDictionary_2Override::get_Values_1 <br>public , args: ()<br>
	 * @uses ReadOnlyDictionary_2Override::get_Values_2 <br>private , args: ()<br>
	 * @uses ReadOnlyDictionary_2Override::get_Values_3 <br>private , args: ()<br>
	 * @uses ReadOnlyDictionary_2Override::get_Values_4 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\ObjectModel\ReadOnlyDictionary_2|\System\Collections\Generic\ICollection_1|\System\Collections\ICollection|\System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function get_Values (){}
	/**
	 * @param \TKey $key
	 * @return \System\Boolean|bool
	 */
	public function ContainsKey($key){}
	/**
	 * @param \TKey $key
	 * @param \TValue& &$value
	 * @return \System\Boolean|bool
	 */
	public function TryGetValue($key, &$value){}
	/**
	 * @uses ReadOnlyDictionary_2Override::get_Item_1 <br>public , args: ($key)<br>
	 * @uses ReadOnlyDictionary_2Override::get_Item_2 <br>private , args: ($key)<br>
	 * @uses ReadOnlyDictionary_2Override::get_Item_3 <br>private , args: ($key)<br>
	 * @var mixed|\override ...$args
	 * @return \TValue|\System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function get_Item (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ReadOnlyDictionary_2Override::Add_1 <br>private , args: ($key, $value)<br>
	 * @uses ReadOnlyDictionary_2Override::Add_2 <br>private , args: ($item)<br>
	 * @uses ReadOnlyDictionary_2Override::Add_3 <br>private , args: ($key, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function Add (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ReadOnlyDictionary_2Override::Remove_1 <br>private , args: ($key)<br>
	 * @uses ReadOnlyDictionary_2Override::Remove_2 <br>private , args: ($item)<br>
	 * @uses ReadOnlyDictionary_2Override::Remove_3 <br>private , args: ($key)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|\System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function Remove (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ReadOnlyDictionary_2Override::set_Item_1 <br>private , args: ($key, $value)<br>
	 * @uses ReadOnlyDictionary_2Override::set_Item_2 <br>private , args: ($key, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function set_Item (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ReadOnlyDictionary_2Override::Contains_1 <br>private , args: ($item)<br>
	 * @uses ReadOnlyDictionary_2Override::Contains_2 <br>private , args: ($key)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function Contains (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ReadOnlyDictionary_2Override::CopyTo_1 <br>private , args: ($array, $arrayIndex)<br>
	 * @uses ReadOnlyDictionary_2Override::CopyTo_2 <br>private , args: ($array, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function CopyTo (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ReadOnlyDictionary_2Override::get_IsReadOnly_1 <br>private , args: ()<br>
	 * @uses ReadOnlyDictionary_2Override::get_IsReadOnly_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function get_IsReadOnly (){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ReadOnlyDictionary_2Override::Clear_1 <br>private , args: ()<br>
	 * @uses ReadOnlyDictionary_2Override::Clear_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function Clear (){}
	/**
	 * @uses ReadOnlyDictionary_2Override::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses ReadOnlyDictionary_2Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @uses ReadOnlyDictionary_2Override::GetEnumerator_3 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|\System\Collections\IDictionaryEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	private static function IsCompatibleKey($key){}
	private function get_IsFixedSize(){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	/**
	 * @param \System\Collections\Generic\IDictionary_2 $dictionary [generic: TKey,TValue]
	 */
	public function __construct($dictionary){}
}