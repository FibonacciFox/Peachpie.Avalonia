<?php
namespace System\Resources;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RuntimeResourceSetMethodsOverride
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
	 * @return \System\Collections\IDictionaryEnumerator
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_3(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetString_1($key){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetString_2($key, $ignoreCase){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetObject_1($key){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetObject_2($key, $ignoreCase){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function GetObject_3($key, $ignoreCase, $isString){}
}
/**
 */
class RuntimeResourceSet extends \System\Resources\ResourceSet implements 
	\System\IDisposable,
	\System\Collections\IEnumerable
{
	/**
	 * @var \System\Resources\IResourceReader
	 * @field
	 */
	protected $Reader;
	/**
	 * @uses RuntimeResourceSetMethodsOverride::Dispose_1 ($disposing)
	 * @uses RuntimeResourceSetMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses RuntimeResourceSetMethodsOverride::GetEnumerator_1 ()
	 * @uses RuntimeResourceSetMethodsOverride::GetEnumerator_2 ()
	 * @uses RuntimeResourceSetMethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @uses RuntimeResourceSetMethodsOverride::GetString_1 ($key)
	 * @uses RuntimeResourceSetMethodsOverride::GetString_2 ($key, $ignoreCase)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetString(mixed ...$args){}
	/**
	 * @uses RuntimeResourceSetMethodsOverride::GetObject_1 ($key)
	 * @uses RuntimeResourceSetMethodsOverride::GetObject_2 ($key, $ignoreCase)
	 * @uses RuntimeResourceSetMethodsOverride::GetObject_3 ($key, $ignoreCase, $isString)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetObject(mixed ...$args){}
	/**
	 * @param \System\Resources\ResourceReader $reader
	 * @param \System\Int32|int $dataPos
	 * @param \System\Boolean $isString
	 * @param \System\Resources\ResourceLocator& $locator
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReadValue($reader, $dataPos, $isString, $locator){}
}
