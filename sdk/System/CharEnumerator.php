<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CharEnumeratorMethodsOverride
{
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_Current_1(){}
	/**
	 * @return \System\Char
	 */
	#[MethodOverride] public  function get_Current_2(){}
}
/**
 */
class CharEnumerator extends \System\Object implements 
	\System\Collections\IEnumerator,
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\ICloneable
{
	/**
	 * @var \System\Char
	 * @property
	 */
	public readonly $Current;
	/**
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @return \System\Boolean
	 */
	public  function MoveNext(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @uses CharEnumeratorMethodsOverride::get_Current_1 ()
	 * @uses CharEnumeratorMethodsOverride::get_Current_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Current(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function Reset(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
