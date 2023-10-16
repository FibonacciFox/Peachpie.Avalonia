<?php
namespace System\Security\AccessControl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TlsContentsMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Dispose_2($disposing){}
}
/**
 */
class TlsContents extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $ReferenceCountValue;
	/**
	 * @var \Microsoft\Win32\SafeHandles\SafeTokenHandle
	 * @property
	 */
	public readonly $ThreadHandle;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsImpersonating;
	/**
	 * @uses TlsContentsMethodsOverride::Dispose_1 ()
	 * @uses TlsContentsMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function IncrementReferenceCount(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function DecrementReferenceCount(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_ReferenceCountValue(){}
	/**
	 * @return \Microsoft\Win32\SafeHandles\SafeTokenHandle
	 */
	public  function get_ThreadHandle(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsImpersonating(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
