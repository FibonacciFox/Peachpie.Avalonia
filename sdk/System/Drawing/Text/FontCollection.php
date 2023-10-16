<?php
namespace System\Drawing\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FontCollectionMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_2($disposing){}
}
/**
 */
class FontCollection extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @var \System\Drawing\FontFamily[]
	 * @property
	 */
	public readonly $Families;
	/**
	 * @return \System\Drawing\FontFamily[]
	 */
	public  function get_Families(){}
	/**
	 * @uses FontCollectionMethodsOverride::Dispose_1 ()
	 * @uses FontCollectionMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
