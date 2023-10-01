<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RefCountingSmallDictionary_1MethodsOverride
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
class RefCountingSmallDictionary_1 extends \System\ValueType implements 
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	/**
	 * @param \Avalonia\Utilities\TKey $key
	 * @return \System\Boolean
	 */
	public  function Add($key){}
	/**
	 * @param \Avalonia\Utilities\TKey $key
	 * @return \System\Boolean
	 */
	public  function Remove($key){}
	/**
	 * @uses RefCountingSmallDictionary_1MethodsOverride::GetEnumerator_1 ()
	 * @uses RefCountingSmallDictionary_1MethodsOverride::GetEnumerator_2 ()
	 * @uses RefCountingSmallDictionary_1MethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
}
