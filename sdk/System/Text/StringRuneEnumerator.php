<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait StringRuneEnumeratorMethodsOverride
{
	/**
	 * @return \System\Text\Rune
	 */
	#[MethodOverride] public  function get_Current_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_Current_2(){}
	/**
	 * @return \System\Text\StringRuneEnumerator
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] private  function GetEnumerator_3(){}
}
/**
 */
class StringRuneEnumerator extends \System\ValueType implements 
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator
{
	/**
	 * @var \System\Text\Rune
	 * @property
	 */
	public readonly $Current;
	/**
	 * @uses StringRuneEnumeratorMethodsOverride::get_Current_1 ()
	 * @uses StringRuneEnumeratorMethodsOverride::get_Current_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Current(mixed ...$args){}
	/**
	 * @uses StringRuneEnumeratorMethodsOverride::GetEnumerator_1 ()
	 * @uses StringRuneEnumeratorMethodsOverride::GetEnumerator_2 ()
	 * @uses StringRuneEnumeratorMethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @return \System\Boolean
	 */
	public  function MoveNext(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Dispose(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Reset(){}
}
