<?php
namespace System\Threading;
/**
 */
class ExecutionContext extends \System\Object implements 
	\System\IDisposable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\Threading\ExecutionContext
	 * @field
	 */
	protected readonly $Default;
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public  function GetObjectData($info, $context){}
	/**
	 * @return \System\Threading\ExecutionContext
	 */
	public static function Capture(){}
	/**
	 * @return \System\Threading\ExecutionContext
	 */
	protected static function CaptureForRestore(){}
	/**
	 * @param \System\Boolean $isFlowSuppressed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ShallowClone($isFlowSuppressed){}
	/**
	 * @return \System\Threading\AsyncFlowControl
	 */
	public static function SuppressFlow(){}
	/**
	 * @return \System\Void|void
	 */
	public static function RestoreFlow(){}
	/**
	 * @return \System\Boolean
	 */
	public static function IsFlowSuppressed(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_HasChangeNotifications(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsDefault(){}
	/**
	 * @param \System\Threading\ExecutionContext $executionContext
	 * @param \System\Threading\ContextCallback $callback
	 * @param \System\Object|object $state
	 * @return \System\Void|void
	 */
	public static function Run($executionContext, $callback, $state){}
	/**
	 * @param \System\Threading\ExecutionContext $executionContext
	 * @param \System\Threading\ContextCallback $callback
	 * @param \System\Object|object $state
	 * @return \System\Void|void
	 */
	protected static function RunInternal($executionContext, $callback, $state){}
	/**
	 * @param \System\Threading\ExecutionContext $executionContext
	 * @return \System\Void|void
	 */
	public static function Restore($executionContext){}
	/**
	 * @param \System\Threading\ExecutionContext $executionContext
	 * @return \System\Void|void
	 */
	protected static function RestoreInternal($executionContext){}
	/**
	 * @param \System\Threading\Thread $threadPoolThread
	 * @param \System\Threading\ExecutionContext $executionContext
	 * @param \System\Threading\ContextCallback $callback
	 * @param \System\Object|object $state
	 * @return \System\Void|void
	 */
	protected static function RunFromThreadPoolDispatchLoop($threadPoolThread, $executionContext, $callback, $state){}
	/**
	 * @param \System\Threading\ExecutionContext $executionContext
	 * @param \System\Action_1 $callback
	 * @param \System\Threading\TState& $state
	 * @return \System\Void|void
	 */
	protected static function RunForThreadPoolUnsafe($executionContext, $callback, $state){}
	/**
	 * @param \System\Threading\Thread $currentThread
	 * @param \System\Threading\ExecutionContext $contextToRestore
	 * @param \System\Threading\ExecutionContext $currentContext
	 * @return \System\Void|void
	 */
	protected static function RestoreChangedContextToThread($currentThread, $contextToRestore, $currentContext){}
	/**
	 * @param \System\Threading\Thread $currentThread
	 * @return \System\Void|void
	 */
	protected static function ResetThreadPoolThread($currentThread){}
	/**
	 * @param \System\Threading\ExecutionContext $previousExecutionCtx
	 * @param \System\Threading\ExecutionContext $nextExecutionCtx
	 * @return \System\Void|void
	 */
	protected static function OnValuesChanged($previousExecutionCtx, $nextExecutionCtx){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowNullContext(){}
	/**
	 * @param \System\Threading\IAsyncLocal $local
	 * @return \System\Object|object
	 */
	protected static function GetLocalValue($local){}
	/**
	 * @param \System\Threading\IAsyncLocal $local
	 * @param \System\Object|object $newValue
	 * @param \System\Boolean $needChangeNotifications
	 * @return \System\Void|void
	 */
	protected static function SetLocalValue($local, $newValue, $needChangeNotifications){}
	/**
	 * @return \System\Threading\ExecutionContext
	 */
	public  function CreateCopy(){}
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
