<?php
namespace System\Threading;
/**
 */
class PreAllocatedOverlapped extends \System\Object implements 
	\System\IDisposable,
	\System\Threading\IDeferredDisposable
{
	/**
	 * @var \System\Threading\ThreadPoolBoundHandleOverlapped
	 * @field
	 */
	protected readonly $_overlapped;
	/**
	 * @param \System\Threading\IOCompletionCallback $callback
	 * @param \System\Object|object $state
	 * @param \System\Object|object $pinData
	 * @return \System\Threading\PreAllocatedOverlapped
	 */
	public static function UnsafeCreate($callback, $state, $pinData){}
	/**
	 * @return \System\Boolean
	 */
	protected  function AddRef(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Release(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Boolean $disposed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnFinalRelease($disposed){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
