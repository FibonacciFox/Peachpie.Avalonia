<?php
namespace Avalonia\Collections;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AvaloniaDictionary_2MethodsOverride
{
	/**
	 * @return \System\Collections\Generic\ICollection_1
	 */
	#[MethodOverride] public  function get_Keys_1(){}
	/**
	 * @return \System\Collections\ICollection
	 */
	#[MethodOverride] private  function get_Keys_2(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] private  function get_Keys_3(){}
	/**
	 * @return \System\Collections\Generic\ICollection_1
	 */
	#[MethodOverride] public  function get_Values_1(){}
	/**
	 * @return \System\Collections\ICollection
	 */
	#[MethodOverride] private  function get_Values_2(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] private  function get_Values_3(){}
	/**
	 * @return \Avalonia\Collections\TValue
	 */
	#[MethodOverride] public  function get_Item_1($key){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_Item_2($key){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Item_1($key, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function set_Item_2($key, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Add_1($key, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Add_2($item){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Add_3($key, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($array, $arrayIndex){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_2($array, $index){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
	/**
	 * @return \System\Collections\IDictionaryEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_3(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Remove_1($key){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Remove_2($item){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Remove_3($key){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Contains_1($item){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Contains_2($key){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
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
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_CollectionChanged($value){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_CollectionChanged($value){}
	/**
	 * @param \System\ComponentModel\PropertyChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_PropertyChanged($value){}
	/**
	 * @param \System\ComponentModel\PropertyChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_PropertyChanged($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReadOnly(){}
	/**
	 * @uses AvaloniaDictionary_2MethodsOverride::get_Keys_1 ()
	 * @uses AvaloniaDictionary_2MethodsOverride::get_Keys_2 ()
	 * @uses AvaloniaDictionary_2MethodsOverride::get_Keys_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Keys(mixed ...$args){}
	/**
	 * @uses AvaloniaDictionary_2MethodsOverride::get_Values_1 ()
	 * @uses AvaloniaDictionary_2MethodsOverride::get_Values_2 ()
	 * @uses AvaloniaDictionary_2MethodsOverride::get_Values_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Values(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsFixedSize(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsSynchronized(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_SyncRoot(){}
	/**
	 * @uses AvaloniaDictionary_2MethodsOverride::get_Item_1 ($key)
	 * @uses AvaloniaDictionary_2MethodsOverride::get_Item_2 ($key)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses AvaloniaDictionary_2MethodsOverride::set_Item_1 ($key, $value)
	 * @uses AvaloniaDictionary_2MethodsOverride::set_Item_2 ($key, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses AvaloniaDictionary_2MethodsOverride::Add_1 ($key, $value)
	 * @uses AvaloniaDictionary_2MethodsOverride::Add_2 ($item)
	 * @uses AvaloniaDictionary_2MethodsOverride::Add_3 ($key, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @param \Avalonia\Collections\TKey $key
	 * @return \System\Boolean
	 */
	public  function ContainsKey($key){}
	/**
	 * @uses AvaloniaDictionary_2MethodsOverride::CopyTo_1 ($array, $arrayIndex)
	 * @uses AvaloniaDictionary_2MethodsOverride::CopyTo_2 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses AvaloniaDictionary_2MethodsOverride::GetEnumerator_1 ()
	 * @uses AvaloniaDictionary_2MethodsOverride::GetEnumerator_2 ()
	 * @uses AvaloniaDictionary_2MethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @uses AvaloniaDictionary_2MethodsOverride::Remove_1 ($key)
	 * @uses AvaloniaDictionary_2MethodsOverride::Remove_2 ($item)
	 * @uses AvaloniaDictionary_2MethodsOverride::Remove_3 ($key)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Remove(mixed ...$args){}
	/**
	 * @param \Avalonia\Collections\TKey $key
	 * @param \Avalonia\Collections\TValue& $value
	 * @return \System\Boolean
	 */
	public  function TryGetValue($key, $value){}
	/**
	 * @uses AvaloniaDictionary_2MethodsOverride::Contains_1 ($item)
	 * @uses AvaloniaDictionary_2MethodsOverride::Contains_2 ($key)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Contains(mixed ...$args){}
	/**
	 * @param \Avalonia\Collections\TKey $key
	 * @param \Avalonia\Collections\TValue $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NotifyAdd($key, $value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
