<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ContainerMethodsOverride
{
	/**
	 * @return \System\Runtime\CompilerServices\Container
	 */
	#[MethodOverride] protected  function Resize_1(){}
	/**
	 * @return \System\Runtime\CompilerServices\Container
	 */
	#[MethodOverride] protected  function Resize_2($newSize){}
}
/**
 */
class Container extends \System\Object
{
	/**
	 * @return \System\Boolean
	 */
	protected  function get_HasCapacity(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_FirstFreeEntry(){}
	/**
	 * @param \System\Runtime\CompilerServices\TKey $key
	 * @param \System\Runtime\CompilerServices\TValue $value
	 * @return \System\Void|void
	 */
	protected  function CreateEntryNoResize($key, $value){}
	/**
	 * @param \System\Runtime\CompilerServices\TKey $key
	 * @param \System\Runtime\CompilerServices\TValue& $value
	 * @return \System\Boolean
	 */
	protected  function TryGetValueWorker($key, $value){}
	/**
	 * @param \System\Runtime\CompilerServices\TKey $key
	 * @param \System\Object& $value
	 * @return \System\Int32|int
	 */
	protected  function FindEntry($key, $value){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Runtime\CompilerServices\TKey& $key
	 * @param \System\Runtime\CompilerServices\TValue& $value
	 * @return \System\Boolean
	 */
	protected  function TryGetEntry($index, $key, $value){}
	/**
	 * @return \System\Void|void
	 */
	protected  function RemoveAllKeys(){}
	/**
	 * @param \System\Runtime\CompilerServices\TKey $key
	 * @return \System\Boolean
	 */
	protected  function Remove($key){}
	/**
	 * @param \System\Int32|int $entryIndex
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RemoveIndex($entryIndex){}
	/**
	 * @param \System\Int32|int $entryIndex
	 * @param \System\Runtime\CompilerServices\TValue $newValue
	 * @return \System\Void|void
	 */
	protected  function UpdateValue($entryIndex, $newValue){}
	/**
	 * @uses ContainerMethodsOverride::Resize_1 ()
	 * @uses ContainerMethodsOverride::Resize_2 ($newSize)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Resize(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function VerifyIntegrity(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
