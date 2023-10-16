<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ConditionalWeakTable_2MethodsOverride
{
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] private  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ConditionalWeakTable_2 extends \System\Object implements 
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	/**
	 * @param \System\Runtime\CompilerServices\TKey $key
	 * @param \System\Runtime\CompilerServices\TValue& $value
	 * @return \System\Boolean
	 */
	public  function TryGetValue($key, $value){}
	/**
	 * @param \System\Runtime\CompilerServices\TKey $key
	 * @param \System\Runtime\CompilerServices\TValue $value
	 * @return \System\Void|void
	 */
	public  function Add($key, $value){}
	/**
	 * @param \System\Runtime\CompilerServices\TKey $key
	 * @param \System\Runtime\CompilerServices\TValue $value
	 * @return \System\Boolean
	 */
	public  function TryAdd($key, $value){}
	/**
	 * @param \System\Runtime\CompilerServices\TKey $key
	 * @param \System\Runtime\CompilerServices\TValue $value
	 * @return \System\Void|void
	 */
	public  function AddOrUpdate($key, $value){}
	/**
	 * @param \System\Runtime\CompilerServices\TKey $key
	 * @return \System\Boolean
	 */
	public  function Remove($key){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @param \System\Runtime\CompilerServices\TKey $key
	 * @param \System\Runtime\CompilerServices\CreateValueCallback $createValueCallback
	 * @return \System\Runtime\CompilerServices\TValue
	 */
	public  function GetValue($key, $createValueCallback){}
	/**
	 * @param \System\Runtime\CompilerServices\TKey $key
	 * @param \System\Runtime\CompilerServices\CreateValueCallback $createValueCallback
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetValueLocked($key, $createValueCallback){}
	/**
	 * @param \System\Runtime\CompilerServices\TKey $key
	 * @return \System\Runtime\CompilerServices\TValue
	 */
	public  function GetOrCreateValue($key){}
	/**
	 * @uses ConditionalWeakTable_2MethodsOverride::GetEnumerator_1 ()
	 * @uses ConditionalWeakTable_2MethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \System\Runtime\CompilerServices\TKey $key
	 * @param \System\Runtime\CompilerServices\TValue $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateEntry($key, $value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
