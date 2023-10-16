<?php
namespace System\Runtime\CompilerServices;
/**
 */
class YieldAwaiter extends \System\ValueType implements 
	\System\Runtime\CompilerServices\ICriticalNotifyCompletion,
	\System\Runtime\CompilerServices\INotifyCompletion,
	\System\Runtime\CompilerServices\IStateMachineBoxAwareAwaiter
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCompleted;
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCompleted(){}
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
	 * @param \System\Action $continuation
	 * @param \System\Boolean $flowContext
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function QueueContinuation($continuation, $flowContext){}
	/**
	 * @param \System\Runtime\CompilerServices\IAsyncStateMachineBox $box
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AwaitUnsafeOnCompleted($box){}
	/**
	 * @param \System\Action $continuation
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function OutputCorrelationEtwEvent($continuation){}
	/**
	 * @param \System\Object|object $state
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RunAction($state){}
	/**
	 * @return \System\Void|void
	 */
	public  function GetResult(){}
}
