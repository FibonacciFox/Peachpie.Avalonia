<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SortedList_2Override {
	/**
	 * @deprecated
	 * @param \TKey $key
	 * @param \TValue $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Add_1 ($key, $value){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\KeyValuePair_2 $keyValuePair [generic: TKey,TValue]
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Add_2 ($keyValuePair){}
	/**
	 * @deprecated
	 * @param \System\Object|object $key
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Add_3 ($key, $value){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\KeyValuePair_2 $keyValuePair [generic: TKey,TValue]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function Contains_1 ($keyValuePair){}
	/**
	 * @deprecated
	 * @param \System\Object|object $key
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function Contains_2 ($key){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\KeyValuePair_2 $keyValuePair [generic: TKey,TValue]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function Remove_1 ($keyValuePair){}
	/**
	 * @deprecated
	 * @param \TKey $key
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Remove_2 ($key){}
	/**
	 * @deprecated
	 * @param \System\Object|object $key
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Remove_3 ($key){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IList_1
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
	 * @return \System\Collections\Generic\IList_1
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
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]public function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]private function GetEnumerator_2 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IDictionaryEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_3 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_4 (){}
	/**
	 * @deprecated
	 * @param \TKey $key
	 * @return \TValue
	 */
	#[MethodOverride]public function get_Item_1 ($key){}
	/**
	 * @deprecated
	 * @param \System\Object|object $key
	 * @return \System\Object|object
	 */
	#[MethodOverride]private function get_Item_2 ($key){}
	/**
	 * @deprecated
	 * @param \TKey $key
	 * @param \TValue $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function set_Item_1 ($key, $value){}
	/**
	 * @deprecated
	 * @param \System\Object|object $key
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function set_Item_2 ($key, $value){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Int32|int $capacity
	 */
	#[MethodOverride]public function __construct_2 ($capacity){}
	/**
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: TKey]
	 */
	#[MethodOverride]public function __construct_3 ($comparer){}
	/**
	 * @param \System\Int32|int $capacity
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: TKey]
	 */
	#[MethodOverride]public function __construct_4 ($capacity, $comparer){}
	/**
	 * @param \System\Collections\Generic\IDictionary_2 $dictionary [generic: TKey,TValue]
	 */
	#[MethodOverride]public function __construct_5 ($dictionary){}
	/**
	 * @param \System\Collections\Generic\IDictionary_2 $dictionary [generic: TKey,TValue]
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: TKey]
	 */
	#[MethodOverride]public function __construct_6 ($dictionary, $comparer){}
}
class SortedList_2 extends \System\Object implements
	\System\Collections\Generic\IDictionary_2,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\IDictionary,
	\System\Collections\ICollection,
	\System\Collections\Generic\IReadOnlyDictionary_2,
	\System\Collections\Generic\IReadOnlyCollection_1
{
	use SortedList_2Override;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Capacity;
	/**
	 * @property
	 * @var \System\Collections\Generic\IComparer_1[TKey]
	 * @since readonly
	 */
	public $Comparer;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Collections\Generic\IList_1[TKey]
	 * @since readonly
	 */
	public $Keys;
	/**
	 * @property
	 * @var \System\Collections\Generic\IList_1[TValue]
	 * @since readonly
	 */
	public $Values;
	/**
	 * @property
	 * @var \TValue
	 */
	public $Item;
	/**
	 * @uses SortedList_2Override::Add_1 <br>public , args: ($key, $value)<br>
	 * @uses SortedList_2Override::Add_2 <br>private , args: ($keyValuePair)<br>
	 * @uses SortedList_2Override::Add_3 <br>private , args: ($key, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Add (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses SortedList_2Override::Contains_1 <br>private , args: ($keyValuePair)<br>
	 * @uses SortedList_2Override::Contains_2 <br>private , args: ($key)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function Contains (\override ...$args){}
	/**
	 * @uses SortedList_2Override::Remove_1 <br>private , args: ($keyValuePair)<br>
	 * @uses SortedList_2Override::Remove_2 <br>public , args: ($key)<br>
	 * @uses SortedList_2Override::Remove_3 <br>private , args: ($key)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|\System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Remove (\override ...$args){}
	/**
	 * @uses SortedList_2Override::get_Keys_1 <br>public , args: ()<br>
	 * @uses SortedList_2Override::get_Keys_2 <br>private , args: ()<br>
	 * @uses SortedList_2Override::get_Keys_3 <br>private , args: ()<br>
	 * @uses SortedList_2Override::get_Keys_4 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IList_1|\System\Collections\Generic\ICollection_1|\System\Collections\ICollection|\System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function get_Keys (){}
	/**
	 * @uses SortedList_2Override::get_Values_1 <br>public , args: ()<br>
	 * @uses SortedList_2Override::get_Values_2 <br>private , args: ()<br>
	 * @uses SortedList_2Override::get_Values_3 <br>private , args: ()<br>
	 * @uses SortedList_2Override::get_Values_4 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IList_1|\System\Collections\Generic\ICollection_1|\System\Collections\ICollection|\System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function get_Values (){}
	private function GetKeyListHelper(){}
	private function GetValueListHelper(){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses SortedList_2Override::get_IsReadOnly_1 <br>private , args: ()<br>
	 * @uses SortedList_2Override::get_IsReadOnly_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function get_IsReadOnly (){}
	private function get_IsFixedSize(){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	/**
	 * @param \TKey $key
	 * @return \System\Boolean|bool
	 */
	public function ContainsKey($key){}
	/**
	 * @param \TValue $value
	 * @return \System\Boolean|bool
	 */
	public function ContainsValue($value){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses SortedList_2Override::CopyTo_1 <br>private , args: ($array, $arrayIndex)<br>
	 * @uses SortedList_2Override::CopyTo_2 <br>private , args: ($array, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function CopyTo (\override ...$args){}
	private function EnsureCapacity($min){}
	/**
	 * @param \System\Int32|int $index
	 * @return \TValue
	 */
	public function GetValueAtIndex($index){}
	/**
	 * @param \System\Int32|int $index
	 * @param \TValue $value
	 * @return \System\Void|void
	 */
	public function SetValueAtIndex($index, $value){}
	/**
	 * @uses SortedList_2Override::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses SortedList_2Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @uses SortedList_2Override::GetEnumerator_3 <br>private , args: ()<br>
	 * @uses SortedList_2Override::GetEnumerator_4 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IDictionaryEnumerator|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @param \System\Int32|int $index
	 * @return \TKey
	 */
	public function GetKeyAtIndex($index){}
	/**
	 * @uses SortedList_2Override::get_Item_1 <br>public , args: ($key)<br>
	 * @uses SortedList_2Override::get_Item_2 <br>private , args: ($key)<br>
	 * @var mixed|\override ...$args
	 * @return \TValue|\System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function get_Item (\override ...$args){}
	/**
	 * @uses SortedList_2Override::set_Item_1 <br>public , args: ($key, $value)<br>
	 * @uses SortedList_2Override::set_Item_2 <br>private , args: ($key, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function set_Item (\override ...$args){}
	/**
	 * @param \TKey $key
	 * @return \System\Int32|int
	 */
	public function IndexOfKey($key){}
	/**
	 * @param \TValue $value
	 * @return \System\Int32|int
	 */
	public function IndexOfValue($value){}
	private function Insert($index, $key, $value){}
	/**
	 * @param \TKey $key
	 * @param \TValue& &$value
	 * @return \System\Boolean|bool
	 */
	public function TryGetValue($key, &$value){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public function RemoveAt($index){}
	/**
	 * @return \System\Void|void
	 */
	public function TrimExcess(){}
	private static function IsCompatibleKey($key){}
	/**
	 * @uses SortedList_2Override::__construct_1 <br>public , args: ()<br>
	 * @uses SortedList_2Override::__construct_2 <br>public , args: ($capacity)<br>
	 * @uses SortedList_2Override::__construct_3 <br>public , args: ($comparer)<br>
	 * @uses SortedList_2Override::__construct_4 <br>public , args: ($capacity, $comparer)<br>
	 * @uses SortedList_2Override::__construct_5 <br>public , args: ($dictionary)<br>
	 * @uses SortedList_2Override::__construct_6 <br>public , args: ($dictionary, $comparer)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}