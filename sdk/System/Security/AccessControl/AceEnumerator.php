<?php
namespace System\Security\AccessControl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AceEnumeratorMethodsOverride
{
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_Current_1(){}
	/**
	 * @return \System\Security\AccessControl\GenericAce
	 */
	#[MethodOverride] public  function get_Current_2(){}
}
/**
 */
class AceEnumerator extends \System\Object implements 
	\System\Collections\IEnumerator
{
	/**
	 * @var \System\Security\AccessControl\GenericAce
	 * @property
	 */
	public readonly $Current;
	/**
	 * @uses AceEnumeratorMethodsOverride::get_Current_1 ()
	 * @uses AceEnumeratorMethodsOverride::get_Current_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Current(mixed ...$args){}
	/**
	 * @return \System\Boolean
	 */
	public  function MoveNext(){}
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
