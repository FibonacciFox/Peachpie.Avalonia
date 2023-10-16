<?php
namespace System\Security\Principal;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait IdentityReferenceEnumeratorMethodsOverride
{
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_Current_1(){}
	/**
	 * @return \System\Security\Principal\IdentityReference
	 */
	#[MethodOverride] public  function get_Current_2(){}
}
/**
 */
class IdentityReferenceEnumerator extends \System\Object implements 
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator
{
	/**
	 * @var \System\Security\Principal\IdentityReference
	 * @property
	 */
	public readonly $Current;
	/**
	 * @uses IdentityReferenceEnumeratorMethodsOverride::get_Current_1 ()
	 * @uses IdentityReferenceEnumeratorMethodsOverride::get_Current_2 ()
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
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
