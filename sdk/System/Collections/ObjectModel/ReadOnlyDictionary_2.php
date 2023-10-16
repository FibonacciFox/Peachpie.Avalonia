<?php
namespace System\Collections\ObjectModel;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ReadOnlyDictionary_2MethodsOverride
{
	/**
	 * @return \System\Collections\ObjectModel\KeyCollection
	 */
	#[MethodOverride] public  function get_Keys_1(){}
	/**
	 * @return \System\Collections\Generic\ICollection_1
	 */
	#[MethodOverride] private  function get_Keys_2(){}
	/**
	 * @return \System\Collections\ICollection
	 */
	#[MethodOverride] private  function get_Keys_3(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] private  function get_Keys_4(){}
	/**
	 * @return \System\Collections\ObjectModel\ValueCollection
	 */
	#[MethodOverride] public  function get_Values_1(){}
	/**
	 * @return \System\Collections\Generic\ICollection_1
	 */
	#[MethodOverride] private  function get_Values_2(){}
	/**
	 * @return \System\Collections\ICollection
	 */
	#[MethodOverride] private  function get_Values_3(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] private  function get_Values_4(){}
	/**
	 * @return \System\Collections\ObjectModel\TValue
	 */
	#[MethodOverride] public  function get_Item_1($key){}
	/**
	 * @return \System\Collections\ObjectModel\TValue
	 */
	#[MethodOverride] private  function get_Item_2($key){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_Item_3($key){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Add_1($key, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Add_2($item){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Add_3($key, $value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Remove_1($key){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Remove_2($item){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Remove_3($key){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function set_Item_1($key, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function set_Item_2($key, $value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Contains_1($item){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Contains_2($key){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_1($array, $arrayIndex){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_2($array, $index){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsReadOnly_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsReadOnly_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Clear_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Clear_2(){}
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
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
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
	/**
	 * @var \System\Collections\ObjectModel\ReadOnlyDictionary_2+KeyCollection[TKey,TValue]
	 * @property
	 */
	public readonly $Keys;
	/**
	 * @var \System\Collections\ObjectModel\ReadOnlyDictionary_2+ValueCollection[TKey,TValue]
	 * @property
	 */
	public readonly $Values;
	/**
	 * @var \TValue
	 * @property
	 */
	public readonly $Item;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @return \System\Collections\Generic\IDictionary_2
	 */
	protected  function get_Dictionary(){}
	/**
	 * @uses ReadOnlyDictionary_2MethodsOverride::get_Keys_1 ()
	 * @uses ReadOnlyDictionary_2MethodsOverride::get_Keys_2 ()
	 * @uses ReadOnlyDictionary_2MethodsOverride::get_Keys_3 ()
	 * @uses ReadOnlyDictionary_2MethodsOverride::get_Keys_4 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Keys(mixed ...$args){}
	/**
	 * @uses ReadOnlyDictionary_2MethodsOverride::get_Values_1 ()
	 * @uses ReadOnlyDictionary_2MethodsOverride::get_Values_2 ()
	 * @uses ReadOnlyDictionary_2MethodsOverride::get_Values_3 ()
	 * @uses ReadOnlyDictionary_2MethodsOverride::get_Values_4 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Values(mixed ...$args){}
	/**
	 * @param \System\Collections\ObjectModel\TKey $key
	 * @return \System\Boolean
	 */
	public  function ContainsKey($key){}
	/**
	 * @param \System\Collections\ObjectModel\TKey $key
	 * @param \System\Collections\ObjectModel\TValue& $value
	 * @return \System\Boolean
	 */
	public  function TryGetValue($key, $value){}
	/**
	 * @uses ReadOnlyDictionary_2MethodsOverride::get_Item_1 ($key)
	 * @uses ReadOnlyDictionary_2MethodsOverride::get_Item_2 ($key)
	 * @uses ReadOnlyDictionary_2MethodsOverride::get_Item_3 ($key)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses ReadOnlyDictionary_2MethodsOverride::Add_1 ($key, $value)
	 * @uses ReadOnlyDictionary_2MethodsOverride::Add_2 ($item)
	 * @uses ReadOnlyDictionary_2MethodsOverride::Add_3 ($key, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @uses ReadOnlyDictionary_2MethodsOverride::Remove_1 ($key)
	 * @uses ReadOnlyDictionary_2MethodsOverride::Remove_2 ($item)
	 * @uses ReadOnlyDictionary_2MethodsOverride::Remove_3 ($key)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Remove(mixed ...$args){}
	/**
	 * @uses ReadOnlyDictionary_2MethodsOverride::set_Item_1 ($key, $value)
	 * @uses ReadOnlyDictionary_2MethodsOverride::set_Item_2 ($key, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @uses ReadOnlyDictionary_2MethodsOverride::Contains_1 ($item)
	 * @uses ReadOnlyDictionary_2MethodsOverride::Contains_2 ($key)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Contains(mixed ...$args){}
	/**
	 * @uses ReadOnlyDictionary_2MethodsOverride::CopyTo_1 ($array, $arrayIndex)
	 * @uses ReadOnlyDictionary_2MethodsOverride::CopyTo_2 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses ReadOnlyDictionary_2MethodsOverride::get_IsReadOnly_1 ()
	 * @uses ReadOnlyDictionary_2MethodsOverride::get_IsReadOnly_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_IsReadOnly(mixed ...$args){}
	/**
	 * @uses ReadOnlyDictionary_2MethodsOverride::Clear_1 ()
	 * @uses ReadOnlyDictionary_2MethodsOverride::Clear_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Clear(mixed ...$args){}
	/**
	 * @uses ReadOnlyDictionary_2MethodsOverride::GetEnumerator_1 ()
	 * @uses ReadOnlyDictionary_2MethodsOverride::GetEnumerator_2 ()
	 * @uses ReadOnlyDictionary_2MethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \System\Object|object $key
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsCompatibleKey($key){}
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
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
