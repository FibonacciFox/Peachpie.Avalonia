<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EventPayloadMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Add_1($key, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Add_2($payloadEntry){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Remove_1($key){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Remove_2($entry){}
}
/**
 */
class EventPayload extends \System\Object implements 
	\System\Collections\Generic\IDictionary_2,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	/**
	 * @var \System\Collections\Generic\ICollection_1[System\String]
	 * @property
	 */
	public readonly $Keys;
	/**
	 * @var \System\Collections\Generic\ICollection_1[System\Object]
	 * @property
	 */
	public readonly $Values;
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
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsReadOnly;
	/**
	 * @return \System\Collections\Generic\ICollection_1
	 */
	public  function get_Keys(){}
	/**
	 * @return \System\Collections\Generic\ICollection_1
	 */
	public  function get_Values(){}
	/**
	 * @param \System\String|string $key
	 * @return \System\Object|object
	 */
	public  function get_Item($key){}
	/**
	 * @param \System\String|string $key
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_Item($key, $value){}
	/**
	 * @uses EventPayloadMethodsOverride::Add_1 ($key, $value)
	 * @uses EventPayloadMethodsOverride::Add_2 ($payloadEntry)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @param \System\Collections\Generic\KeyValuePair_2 $entry
	 * @return \System\Boolean
	 */
	public  function Contains($entry){}
	/**
	 * @param \System\String|string $key
	 * @return \System\Boolean
	 */
	public  function ContainsKey($key){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReadOnly(){}
	/**
	 * @uses EventPayloadMethodsOverride::GetEnumerator_1 ()
	 * @uses EventPayloadMethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\KeyValuePair_2[] $payloadEntries
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public  function CopyTo($payloadEntries, $count){}
	/**
	 * @uses EventPayloadMethodsOverride::Remove_1 ($key)
	 * @uses EventPayloadMethodsOverride::Remove_2 ($entry)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Remove(mixed ...$args){}
	/**
	 * @param \System\String|string $key
	 * @param \System\Object& $value
	 * @return \System\Boolean
	 */
	public  function TryGetValue($key, $value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
