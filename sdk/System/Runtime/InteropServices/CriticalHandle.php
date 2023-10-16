<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CriticalHandleMethodsOverride
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
class CriticalHandle extends \System\Runtime\ConstrainedExecution\CriticalFinalizerObject implements 
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
	public readonly $IsClosed;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsInvalid;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Cleanup(){}
	/**
	 * @param \System\IntPtr $handle
	 * @return \System\Void|void
	 */
	protected  function SetHandle($handle){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsClosed(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsInvalid(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Close(){}
	/**
	 * @uses CriticalHandleMethodsOverride::Dispose_1 ()
	 * @uses CriticalHandleMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function SetHandleAsInvalid(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function ReleaseHandle(){}
}
