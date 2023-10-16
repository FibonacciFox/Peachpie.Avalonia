<?php
namespace System\IO\Enumeration;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FileSystemEnumerable_1MethodsOverride
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
class FileSystemEnumerable_1 extends \System\Object implements 
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	/**
	 * @var \System\IO\Enumeration\FileSystemEnumerable_1+FindPredicate[TResult]
	 * @property
	 */
	public $ShouldIncludePredicate;
	/**
	 * @var \System\IO\Enumeration\FileSystemEnumerable_1+FindPredicate[TResult]
	 * @property
	 */
	public $ShouldRecursePredicate;
	/**
	 * @return \System\IO\Enumeration\FindPredicate
	 */
	public  function get_ShouldIncludePredicate(){}
	/**
	 * @param \System\IO\Enumeration\FindPredicate $value
	 * @return \System\Void|void
	 */
	public  function set_ShouldIncludePredicate($value){}
	/**
	 * @return \System\IO\Enumeration\FindPredicate
	 */
	public  function get_ShouldRecursePredicate(){}
	/**
	 * @param \System\IO\Enumeration\FindPredicate $value
	 * @return \System\Void|void
	 */
	public  function set_ShouldRecursePredicate($value){}
	/**
	 * @uses FileSystemEnumerable_1MethodsOverride::GetEnumerator_1 ()
	 * @uses FileSystemEnumerable_1MethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
