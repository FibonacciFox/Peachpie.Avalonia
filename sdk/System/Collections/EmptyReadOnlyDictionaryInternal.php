<?php
namespace System\Collections;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EmptyReadOnlyDictionaryInternalMethodsOverride
{
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IDictionaryEnumerator
	 */
	#[MethodOverride] public  function GetEnumerator_2(){}
}
/**
 */
class EmptyReadOnlyDictionaryInternal extends \System\Object implements 
	\System\Collections\IDictionary,
	\System\Collections\ICollection,
	\System\Collections\IEnumerable
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $SyncRoot;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSynchronized;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Item;
	/**
	 * @var \System\Collections\ICollection
	 * @property
	 */
	public readonly $Keys;
	/**
	 * @var \System\Collections\ICollection
	 * @property
	 */
	public readonly $Values;
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
	 * @uses EmptyReadOnlyDictionaryInternalMethodsOverride::GetEnumerator_1 ()
	 * @uses EmptyReadOnlyDictionaryInternalMethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public  function CopyTo($array, $index){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_SyncRoot(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSynchronized(){}
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
	 * @return \System\Collections\ICollection
	 */
	public  function get_Keys(){}
	/**
	 * @return \System\Collections\ICollection
	 */
	public  function get_Values(){}
	/**
	 * @param \System\Object|object $key
	 * @return \System\Boolean
	 */
	public  function Contains($key){}
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
	 * @return \System\Boolean
	 */
	public  function get_IsReadOnly(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsFixedSize(){}
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
