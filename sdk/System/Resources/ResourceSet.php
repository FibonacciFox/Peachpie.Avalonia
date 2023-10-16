<?php
namespace System\Resources;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ResourceSetMethodsOverride
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
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetString_1($name){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetString_2($name, $ignoreCase){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetObject_1($name){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetObject_2($name, $ignoreCase){}
}
/**
 */
class ResourceSet extends \System\Object implements 
	\System\IDisposable,
	\System\Collections\IEnumerable
{
	/**
	 * @var \System\Resources\IResourceReader
	 * @field
	 */
	protected $Reader;
	/**
	 * @return \System\Void|void
	 */
	public  function Close(){}
	/**
	 * @uses ResourceSetMethodsOverride::Dispose_1 ($disposing)
	 * @uses ResourceSetMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @return \System\Type
	 */
	public  function GetDefaultReader(){}
	/**
	 * @return \System\Type
	 */
	public  function GetDefaultWriter(){}
	/**
	 * @uses ResourceSetMethodsOverride::GetEnumerator_1 ()
	 * @uses ResourceSetMethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetEnumeratorHelper(){}
	/**
	 * @uses ResourceSetMethodsOverride::GetString_1 ($name)
	 * @uses ResourceSetMethodsOverride::GetString_2 ($name, $ignoreCase)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetString(mixed ...$args){}
	/**
	 * @uses ResourceSetMethodsOverride::GetObject_1 ($name)
	 * @uses ResourceSetMethodsOverride::GetObject_2 ($name, $ignoreCase)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetObject(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	protected  function ReadResources(){}
	/**
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetObjectInternal($name){}
	/**
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetCaseInsensitiveObjectInternal($name){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
