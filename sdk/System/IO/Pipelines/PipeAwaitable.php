<?php
namespace System\IO\Pipelines;
/**
 */
class PipeAwaitable extends \System\ValueType
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCompleted;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsRunning;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_CancellationToken(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCompleted(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsRunning(){}
	/**
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Action_1 $callback
	 * @param \System\Object|object $state
	 * @return \System\Void|void
	 */
	public  function BeginOperation($cancellationToken, $callback, $state){}
	/**
	 * @param \System\IO\Pipelines\CompletionData& $completionData
	 * @return \System\Void|void
	 */
	public  function Complete($completionData){}
	/**
	 * @param \System\IO\Pipelines\CompletionData& $completionData
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ExtractCompletion($completionData){}
	/**
	 * @return \System\Void|void
	 */
	public  function SetUncompleted(){}
	/**
	 * @param \System\Action_1 $continuation
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\Sources\ValueTaskSourceOnCompletedFlags $flags
	 * @param \System\IO\Pipelines\CompletionData& $completionData
	 * @param \System\Boolean& $doubleCompletion
	 * @return \System\Void|void
	 */
	public  function OnCompleted($continuation, $state, $flags, $completionData, $doubleCompletion){}
	/**
	 * @param \System\IO\Pipelines\CompletionData& $completionData
	 * @return \System\Void|void
	 */
	public  function Cancel($completionData){}
	/**
	 * @param \System\IO\Pipelines\CompletionData& $completionData
	 * @return \System\Void|void
	 */
	public  function CancellationTokenFired($completionData){}
	/**
	 * @return \System\Boolean
	 */
	public  function ObserveCancellation(){}
	/**
	 * @param \System\Threading\CancellationToken& $cancellationToken
	 * @return \System\Threading\CancellationTokenRegistration
	 */
	public  function ReleaseCancellationTokenRegistration($cancellationToken){}
}
