<?php
namespace System\IO\Pipelines;
/**
 */
class PipeCompletion extends \System\ValueType
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
	public readonly $IsFaulted;
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCompleted(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsFaulted(){}
	/**
	 * @param \System\Exception $exception
	 * @return \System\IO\Pipelines\PipeCompletionCallbacks
	 */
	public  function TryComplete($exception){}
	/**
	 * @param \System\Action_2 $callback
	 * @param \System\Object|object $state
	 * @return \System\IO\Pipelines\PipeCompletionCallbacks
	 */
	public  function AddCallback($callback, $state){}
	/**
	 * @return \System\Boolean
	 */
	public  function IsCompletedOrThrow(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetCallbacks(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Reset(){}
}
