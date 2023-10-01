<?php
namespace Avalonia\Rendering\Composition\Transport;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BatchStreamReaderMethodsOverride
{
	/**
	 * @return \Avalonia\Rendering\Composition\Transport\T
	 */
	#[MethodOverride] public  function ReadObject_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function ReadObject_2(){}
}
/**
 */
class BatchStreamReader extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @return \Avalonia\Rendering\Composition\Transport\T
	 */
	public  function Read(){}
	/**
	 * @uses BatchStreamReaderMethodsOverride::ReadObject_1 ()
	 * @uses BatchStreamReaderMethodsOverride::ReadObject_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadObject(mixed ...$args){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsObjectEof(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsStructEof(){}
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
