<?php
namespace System\IO\Strategies;
/**
 */
class AsyncCopyToAwaitable extends \System\Object implements 
	\System\Runtime\CompilerServices\ICriticalNotifyCompletion,
	\System\Runtime\CompilerServices\INotifyCompletion
{
	/**
	 * @var \Microsoft\Win32\SafeHandles\SafeFileHandle
	 * @field
	 */
	protected readonly $_fileHandle;
	/**
	 * @var \System\Int64
	 * @field
	 */
	protected $_position;
	/**
	 * @var \System\Threading\NativeOverlapped*
	 * @field
	 */
	protected $_nativeOverlapped;
	/**
	 * @var \System\Action
	 * @field
	 */
	protected $_continuation;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	protected $_errorCode;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	protected $_numBytes;
	/**
	 * @var \System\Threading\IOCompletionCallback
	 * @field
	 */
	protected readonly $s_callback;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCompleted;
	/**
	 * @return \System\Object|object
	 */
	protected  function get_CancellationLock(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function ResetForNextOperation(){}
	/**
	 * @param \System\UInt32 $errorCode
	 * @param \System\UInt32 $numBytes
	 * @param \System\Threading\NativeOverlapped* $pOVERLAP
	 * @return \System\Void|void
	 */
	protected static function IOCallback($errorCode, $numBytes, $pOVERLAP){}
	/**
	 * @return \System\Void|void
	 */
	protected  function MarkCompleted(){}
	/**
	 * @return \System\IO\Strategies\AsyncCopyToAwaitable
	 */
	public  function GetAwaiter(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCompleted(){}
	/**
	 * @return \System\Void|void
	 */
	public  function GetResult(){}
	/**
	 * @param \System\Action $continuation
	 * @return \System\Void|void
	 */
	public  function OnCompleted($continuation){}
	/**
	 * @param \System\Action $continuation
	 * @return \System\Void|void
	 */
	public  function UnsafeOnCompleted($continuation){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
