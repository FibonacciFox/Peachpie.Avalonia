<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait InlineDictionary_2MethodsOverride
{
	/**
	 * @return \Avalonia\Utilities\Enumerator
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
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class InlineDictionary_2 extends \System\ValueType implements 
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	/**
	 * @param \Avalonia\Utilities\TKey $key
	 * @param \Avalonia\Utilities\TValue $value
	 * @param \System\Boolean $overwrite
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetCore($key, $value, $overwrite){}
	/**
	 * @param \Avalonia\Utilities\TKey $key
	 * @param \Avalonia\Utilities\TValue $value
	 * @return \System\Void|void
	 */
	public  function Add($key, $value){}
	/**
	 * @param \Avalonia\Utilities\TKey $key
	 * @param \Avalonia\Utilities\TValue $value
	 * @return \System\Void|void
	 */
	public  function Set($key, $value){}
	/**
	 * @param \Avalonia\Utilities\TKey $key
	 * @return \Avalonia\Utilities\TValue
	 */
	public  function get_Item($key){}
	/**
	 * @param \Avalonia\Utilities\TKey $key
	 * @param \Avalonia\Utilities\TValue $value
	 * @return \System\Void|void
	 */
	public  function set_Item($key, $value){}
	/**
	 * @param \Avalonia\Utilities\TKey $key
	 * @return \System\Boolean
	 */
	public  function Remove($key){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasEntries(){}
	/**
	 * @param \Avalonia\Utilities\TKey $key
	 * @param \Avalonia\Utilities\TValue& $value
	 * @return \System\Boolean
	 */
	public  function TryGetValue($key, $value){}
	/**
	 * @param \Avalonia\Utilities\TKey $key
	 * @return \Avalonia\Utilities\TValue&
	 */
	public  function GetValueRefOrNullRef($key){}
	/**
	 * @param \Avalonia\Utilities\TKey $key
	 * @param \System\Boolean& $exists
	 * @return \Avalonia\Utilities\TValue&
	 */
	public  function GetValueRefOrAddDefault($key, $exists){}
	/**
	 * @param \Avalonia\Utilities\TKey $key
	 * @param \Avalonia\Utilities\TValue& $value
	 * @return \System\Boolean
	 */
	public  function TryGetAndRemoveValue($key, $value){}
	/**
	 * @param \Avalonia\Utilities\TKey $key
	 * @return \Avalonia\Utilities\TValue
	 */
	public  function GetAndRemove($key){}
	/**
	 * @uses InlineDictionary_2MethodsOverride::GetEnumerator_1 ()
	 * @uses InlineDictionary_2MethodsOverride::GetEnumerator_2 ()
	 * @uses InlineDictionary_2MethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
}
