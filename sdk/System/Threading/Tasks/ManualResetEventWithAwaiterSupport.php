<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ManualResetEventWithAwaiterSupportMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Wait_1($awaiter){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Wait_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Wait_3($cancellationToken){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Wait_4($timeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Wait_5($timeout, $cancellationToken){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Wait_6($millisecondsTimeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Wait_7($millisecondsTimeout, $cancellationToken){}
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
class ManualResetEventWithAwaiterSupport extends \System\Threading\ManualResetEventSlim implements 
	\System\IDisposable
{
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
	 * @uses ManualResetEventWithAwaiterSupportMethodsOverride::Wait_1 ($awaiter)
	 * @uses ManualResetEventWithAwaiterSupportMethodsOverride::Wait_2 ()
	 * @uses ManualResetEventWithAwaiterSupportMethodsOverride::Wait_3 ($cancellationToken)
	 * @uses ManualResetEventWithAwaiterSupportMethodsOverride::Wait_4 ($timeout)
	 * @uses ManualResetEventWithAwaiterSupportMethodsOverride::Wait_5 ($timeout, $cancellationToken)
	 * @uses ManualResetEventWithAwaiterSupportMethodsOverride::Wait_6 ($millisecondsTimeout)
	 * @uses ManualResetEventWithAwaiterSupportMethodsOverride::Wait_7 ($millisecondsTimeout, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Wait(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function Set(){}
	/**
	 * @uses ManualResetEventWithAwaiterSupportMethodsOverride::Dispose_1 ()
	 * @uses ManualResetEventWithAwaiterSupportMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
