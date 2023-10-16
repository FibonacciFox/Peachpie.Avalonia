<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ManyElementAsyncLocalValueMapMethodsOverride
{
	/**
	 * @return \System\Collections\Generic\KeyCollection
	 */
	#[MethodOverride] public  function get_Keys_1(){}
	/**
	 * @return \System\Collections\Generic\ICollection_1
	 */
	#[MethodOverride] private  function get_Keys_2(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] private  function get_Keys_3(){}
	/**
	 * @return \System\Collections\ICollection
	 */
	#[MethodOverride] private  function get_Keys_4(){}
	/**
	 * @return \System\Collections\Generic\ValueCollection
	 */
	#[MethodOverride] public  function get_Values_1(){}
	/**
	 * @return \System\Collections\Generic\ICollection_1
	 */
	#[MethodOverride] private  function get_Values_2(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] private  function get_Values_3(){}
	/**
	 * @return \System\Collections\ICollection
	 */
	#[MethodOverride] private  function get_Values_4(){}
	/**
	 * @return \System\Object|object
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
	#[MethodOverride] private  function Add_2($keyValuePair){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Add_3($key, $value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Contains_1($keyValuePair){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Contains_2($key){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Remove_1($keyValuePair){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Remove_2($key){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Remove_3($key, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Remove_4($key){}
	/**
	 * @return \System\Collections\Generic\Enumerator
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_3(){}
	/**
	 * @return \System\Collections\IDictionaryEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_4(){}
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
	#[MethodOverride] private  function CopyTo_1($array, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_2($array, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function TrimExcess_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function TrimExcess_2($capacity){}
}
/**
 */
class ManyElementAsyncLocalValueMap extends \System\Collections\Generic\Dictionary_2 implements 
	\System\Collections\Generic\IDictionary_2,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\IDictionary,
	\System\Collections\ICollection,
	\System\Collections\Generic\IReadOnlyDictionary_2,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Runtime\Serialization\ISerializable,
	\System\Runtime\Serialization\IDeserializationCallback,
	\System\Threading\IAsyncLocalValueMap
{
	/**
	 * @var \System\Collections\Generic\IEqualityComparer_1[System\Threading\IAsyncLocal]
	 * @property
	 */
	public readonly $Comparer;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Collections\Generic\Dictionary_2+KeyCollection[System\Threading\IAsyncLocal,System\Object]
	 * @property
	 */
	public readonly $Keys;
	/**
	 * @var \System\Collections\Generic\Dictionary_2+ValueCollection[System\Threading\IAsyncLocal,System\Object]
	 * @property
	 */
	public readonly $Values;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Item;
	/**
	 * @param \System\Threading\IAsyncLocal $key
	 * @param \System\Object|object $value
	 * @param \System\Boolean $treatNullValueAsNonexistent
	 * @return \System\Threading\IAsyncLocalValueMap
	 */
	public  function Set($key, $value, $treatNullValueAsNonexistent){}
	/**
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::get_Keys_1 ()
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::get_Keys_2 ()
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::get_Keys_3 ()
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::get_Keys_4 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Keys(mixed ...$args){}
	/**
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::get_Values_1 ()
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::get_Values_2 ()
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::get_Values_3 ()
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::get_Values_4 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Values(mixed ...$args){}
	/**
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::get_Item_1 ($key)
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::get_Item_2 ($key)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::set_Item_1 ($key, $value)
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::set_Item_2 ($key, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::Add_1 ($key, $value)
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::Add_2 ($keyValuePair)
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::Add_3 ($key, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::Contains_1 ($keyValuePair)
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::Contains_2 ($key)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Contains(mixed ...$args){}
	/**
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::Remove_1 ($keyValuePair)
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::Remove_2 ($key)
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::Remove_3 ($key, $value)
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::Remove_4 ($key)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Remove(mixed ...$args){}
	/**
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::GetEnumerator_1 ()
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::GetEnumerator_2 ()
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::GetEnumerator_3 ()
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::GetEnumerator_4 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::get_IsReadOnly_1 ()
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::get_IsReadOnly_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_IsReadOnly(mixed ...$args){}
	/**
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::CopyTo_1 ($array, $index)
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::CopyTo_2 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::TrimExcess_1 ()
	 * @uses ManyElementAsyncLocalValueMapMethodsOverride::TrimExcess_2 ($capacity)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TrimExcess(mixed ...$args){}
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
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsFixedSize(){}
}
