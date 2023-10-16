<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SetOnCountdownMresMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Wait_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Wait_2($cancellationToken){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Wait_3($timeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Wait_4($timeout, $cancellationToken){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Wait_5($millisecondsTimeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Wait_6($millisecondsTimeout, $cancellationToken){}
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
class SetOnCountdownMres extends \System\Threading\ManualResetEventSlim implements 
	\System\IDisposable,
	\System\Threading\Tasks\ITaskCompletionAction
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $InvokeMayRunArbitraryCode;
	/**
	 * @var \System\Threading\WaitHandle
	 * @property
	 */
	public readonly $WaitHandle;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSet;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $SpinCount;
	/**
	 * @param \System\Threading\Tasks\Task $completingTask
	 * @return \System\Void|void
	 */
	public  function Invoke($completingTask){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_InvokeMayRunArbitraryCode(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Set(){}
	/**
	 * @uses SetOnCountdownMresMethodsOverride::Wait_1 ()
	 * @uses SetOnCountdownMresMethodsOverride::Wait_2 ($cancellationToken)
	 * @uses SetOnCountdownMresMethodsOverride::Wait_3 ($timeout)
	 * @uses SetOnCountdownMresMethodsOverride::Wait_4 ($timeout, $cancellationToken)
	 * @uses SetOnCountdownMresMethodsOverride::Wait_5 ($millisecondsTimeout)
	 * @uses SetOnCountdownMresMethodsOverride::Wait_6 ($millisecondsTimeout, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Wait(mixed ...$args){}
	/**
	 * @uses SetOnCountdownMresMethodsOverride::Dispose_1 ()
	 * @uses SetOnCountdownMresMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
