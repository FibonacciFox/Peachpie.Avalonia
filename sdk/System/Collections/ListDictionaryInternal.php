<?php
namespace System\Collections;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ListDictionaryInternalMethodsOverride
{
	/**
	 * @return \System\Collections\IDictionaryEnumerator
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
}
/**
 */
class ListDictionaryInternal extends \System\Object implements 
	\System\Collections\IDictionary,
	\System\Collections\ICollection,
	\System\Collections\IEnumerable
{
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Item;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Collections\ICollection
	 * @property
	 */
	public readonly $Keys;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsReadOnly;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsFixedSize;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSynchronized;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $SyncRoot;
	/**
	 * @var \System\Collections\ICollection
	 * @property
	 */
	public readonly $Values;
	/**
	 * @param \System\Object|object $key
	 * @return \System\Object|object
	 */
	public  function get_Item($key){}
	/**
	 * @param \System\Object|object $key
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_Item($key, $value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @return \System\Collections\ICollection
	 */
	public  function get_Keys(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReadOnly(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsFixedSize(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSynchronized(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_SyncRoot(){}
	/**
	 * @return \System\Collections\ICollection
	 */
	public  function get_Values(){}
	/**
	 * @param \System\Object|object $key
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function Add($key, $value){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @param \System\Object|object $key
	 * @return \System\Boolean
	 */
	public  function Contains($key){}
	/**
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public  function CopyTo($array, $index){}
	/**
	 * @uses ListDictionaryInternalMethodsOverride::GetEnumerator_1 ()
	 * @uses ListDictionaryInternalMethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \System\Object|object $key
	 * @return \System\Void|void
	 */
	public  function Remove($key){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
