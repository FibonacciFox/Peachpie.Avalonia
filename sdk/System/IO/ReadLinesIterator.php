<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ReadLinesIteratorMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_1($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2(){}
	/**
	 * @return \System\IO\ReadLinesIterator
	 */
	#[MethodOverride] protected static function CreateIterator_1($path, $encoding){}
	/**
	 * @return \System\IO\ReadLinesIterator
	 */
	#[MethodOverride] private static function CreateIterator_2($path, $encoding, $reader){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function get_Current_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_Current_2(){}
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
 */
class ReadLinesIterator extends \System\IO\Iterator_1 implements 
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $state;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $current;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Current;
	/**
	 * @uses ReadLinesIteratorMethodsOverride::Dispose_1 ($disposing)
	 * @uses ReadLinesIteratorMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses ReadLinesIteratorMethodsOverride::CreateIterator_1 ($path, $encoding)
	 * @uses ReadLinesIteratorMethodsOverride::CreateIterator_2 ($path, $encoding, $reader)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CreateIterator(mixed ...$args){}
	/**
	 * @uses ReadLinesIteratorMethodsOverride::get_Current_1 ()
	 * @uses ReadLinesIteratorMethodsOverride::get_Current_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Current(mixed ...$args){}
	/**
	 * @uses ReadLinesIteratorMethodsOverride::GetEnumerator_1 ()
	 * @uses ReadLinesIteratorMethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Reset(){}
}
