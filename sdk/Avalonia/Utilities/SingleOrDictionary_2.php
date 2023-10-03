<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SingleOrDictionary_2MethodsOverride
{
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class SingleOrDictionary_2 extends \System\Object implements 
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	/**
	 * @param \Avalonia\Utilities\TKey $key
	 * @param \Avalonia\Utilities\TValue $value
	 * @return \System\Void|void
	 */
	public  function Add($key, $value){}
	/**
	 * @param \Avalonia\Utilities\TKey $key
	 * @param \Avalonia\Utilities\TValue& $value
	 * @return \System\Boolean
	 */
	public  function TryGetValue($key, $value){}
	/**
	 * @uses SingleOrDictionary_2MethodsOverride::GetEnumerator_1 ()
	 * @uses SingleOrDictionary_2MethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_Values(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
