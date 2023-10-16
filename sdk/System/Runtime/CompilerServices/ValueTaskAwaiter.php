<?php
namespace System\Runtime\CompilerServices;
/**
 */
class ValueTaskAwaiter extends \System\ValueType implements 
	\System\Runtime\CompilerServices\ICriticalNotifyCompletion,
	\System\Runtime\CompilerServices\INotifyCompletion,
	\System\Runtime\CompilerServices\IStateMachineBoxAwareAwaiter
{
	/**
	 * @var \System\Action_1[System\Object]
	 * @field
	 */
	protected readonly $s_invokeActionDelegate;
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
	 * @param \System\Runtime\CompilerServices\IAsyncStateMachineBox $box
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AwaitUnsafeOnCompleted($box){}
}
