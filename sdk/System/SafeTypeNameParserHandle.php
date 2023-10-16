<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SafeTypeNameParserHandleMethodsOverride
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
class SafeTypeNameParserHandle extends \Microsoft\Win32\SafeHandles\SafeHandleZeroOrMinusOneIsInvalid implements 
	\System\IDisposable
{
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $handle;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsInvalid;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsClosed;
	/**
	 * @param \System\IntPtr $pTypeNameParser
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Release($pTypeNameParser){}
	/**
	 * @uses SafeTypeNameParserHandleMethodsOverride::Dispose_1 ()
	 * @uses SafeTypeNameParserHandleMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
