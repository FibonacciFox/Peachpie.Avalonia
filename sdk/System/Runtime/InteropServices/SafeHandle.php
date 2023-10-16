<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SafeHandleMethodsOverride
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
class SafeHandle extends \System\Runtime\ConstrainedExecution\CriticalFinalizerObject implements 
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
	 * @return \System\Boolean
	 */
	protected  function get_OwnsHandle(){}
	/**
	 * @param \System\IntPtr $handle
	 * @return \System\Void|void
	 */
	protected  function SetHandle($handle){}
	/**
	 * @return \System\IntPtr
	 */
	public  function DangerousGetHandle(){}
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
	 * @uses SafeHandleMethodsOverride::Dispose_1 ()
	 * @uses SafeHandleMethodsOverride::Dispose_2 ($disposing)
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
	/**
	 * @param \System\Boolean& $success
	 * @return \System\Void|void
	 */
	public  function DangerousAddRef($success){}
	/**
	 * @return \System\Void|void
	 */
	public  function DangerousRelease(){}
	/**
	 * @param \System\Boolean $disposeOrFinalizeOperation
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalRelease($disposeOrFinalizeOperation){}
}
