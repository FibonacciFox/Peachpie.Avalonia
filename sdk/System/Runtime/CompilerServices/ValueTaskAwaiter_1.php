<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ValueTaskAwaiter_1 extends \System\ValueType implements 
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
	 * @return \System\Runtime\CompilerServices\TResult
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
	 * @param \System\Runtime\CompilerServices\IAsyncStateMachineBox $box
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AwaitUnsafeOnCompleted($box){}
}
