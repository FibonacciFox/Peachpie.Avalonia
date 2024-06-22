<?php
namespace Avalonia\Collections;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AvaloniaDictionary_2Override {
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\ICollection_1
	 */
	#[MethodOverride]public function get_Keys_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\ICollection
	 */
	#[MethodOverride]private function get_Keys_2 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]private function get_Keys_3 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\ICollection_1
	 */
	#[MethodOverride]public function get_Values_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\ICollection
	 */
	#[MethodOverride]private function get_Values_2 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]private function get_Values_3 (){}
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
	 * @deprecated
	 * @param \TKey $key
	 * @param \TValue $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Add_1 ($key, $value){}
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
	 * @param \System\Collections\Generic\KeyValuePair_2 $array [generic: TKey,TValue]
	 * @param \System\Int32|int $arrayIndex
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_1 ($array, $arrayIndex){}
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
	 * @return \System\Collections\IDictionaryEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_3 (){}
	/**
	 * @deprecated
	 * @param \TKey $key
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Remove_1 ($key){}
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
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Int32|int $capacity
	 */
	#[MethodOverride]public function __construct_2 ($capacity){}
}
class AvaloniaDictionary_2 extends \System\Object implements
	\Avalonia\Collections\IAvaloniaDictionary_2,
	\System\Collections\Generic\IDictionary_2,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\Avalonia\Collections\IAvaloniaReadOnlyDictionary_2,
	\System\Collections\Generic\IReadOnlyDictionary_2,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Specialized\INotifyCollectionChanged,
	\System\ComponentModel\INotifyPropertyChanged,
	\System\Collections\IDictionary,
	\System\Collections\ICollection
{
	use AvaloniaDictionary_2Override;

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsReadOnly;
	/**
	 * @property
	 * @var \System\Collections\Generic\ICollection_1[TKey]
	 * @since readonly
	 */
	public $Keys;
	/**
	 * @property
	 * @var \System\Collections\Generic\ICollection_1[TValue]
	 * @since readonly
	 */
	public $Values;
	/**
	 * @property
	 * @var \TValue
	 */
	public $Item;
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public function add_CollectionChanged($value){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_CollectionChanged($value){}
	/**
	 * @param \System\ComponentModel\PropertyChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public function add_PropertyChanged($value){}
	/**
	 * @param \System\ComponentModel\PropertyChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_PropertyChanged($value){}
	/**
	 * @uses AvaloniaDictionary_2Override::get_Keys_1 <br>public , args: ()<br>
	 * @uses AvaloniaDictionary_2Override::get_Keys_2 <br>private , args: ()<br>
	 * @uses AvaloniaDictionary_2Override::get_Keys_3 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\ICollection_1|\System\Collections\ICollection|\System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function get_Keys (){}
	/**
	 * @uses AvaloniaDictionary_2Override::get_Values_1 <br>public , args: ()<br>
	 * @uses AvaloniaDictionary_2Override::get_Values_2 <br>private , args: ()<br>
	 * @uses AvaloniaDictionary_2Override::get_Values_3 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\ICollection_1|\System\Collections\ICollection|\System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function get_Values (){}
	private function get_IsFixedSize(){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	/**
	 * @uses AvaloniaDictionary_2Override::get_Item_1 <br>public , args: ($key)<br>
	 * @uses AvaloniaDictionary_2Override::get_Item_2 <br>private , args: ($key)<br>
	 * @var mixed|\override ...$args
	 * @return \TValue|\System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function get_Item (\override ...$args){}
	/**
	 * @uses AvaloniaDictionary_2Override::set_Item_1 <br>public , args: ($key, $value)<br>
	 * @uses AvaloniaDictionary_2Override::set_Item_2 <br>private , args: ($key, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function set_Item (\override ...$args){}
	/**
	 * @uses AvaloniaDictionary_2Override::Add_1 <br>public , args: ($key, $value)<br>
	 * @uses AvaloniaDictionary_2Override::Add_2 <br>private , args: ($item)<br>
	 * @uses AvaloniaDictionary_2Override::Add_3 <br>private , args: ($key, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Add (\override ...$args){}
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
	 * @uses AvaloniaDictionary_2Override::CopyTo_1 <br>public , args: ($array, $arrayIndex)<br>
	 * @uses AvaloniaDictionary_2Override::CopyTo_2 <br>private , args: ($array, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function CopyTo (\override ...$args){}
	/**
	 * @uses AvaloniaDictionary_2Override::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses AvaloniaDictionary_2Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @uses AvaloniaDictionary_2Override::GetEnumerator_3 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|\System\Collections\IDictionaryEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @uses AvaloniaDictionary_2Override::Remove_1 <br>public , args: ($key)<br>
	 * @uses AvaloniaDictionary_2Override::Remove_2 <br>private , args: ($item)<br>
	 * @uses AvaloniaDictionary_2Override::Remove_3 <br>private , args: ($key)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|\System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Remove (\override ...$args){}
	/**
	 * @param \TKey $key
	 * @param \TValue& &$value
	 * @return \System\Boolean|bool
	 */
	public function TryGetValue($key, &$value){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses AvaloniaDictionary_2Override::Contains_1 <br>private , args: ($item)<br>
	 * @uses AvaloniaDictionary_2Override::Contains_2 <br>private , args: ($key)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function Contains (\override ...$args){}
	private function NotifyAdd($key, $value){}
	/**
	 * @uses AvaloniaDictionary_2Override::__construct_1 <br>public , args: ()<br>
	 * @uses AvaloniaDictionary_2Override::__construct_2 <br>public , args: ($capacity)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}