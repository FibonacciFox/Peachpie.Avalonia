<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ManualResetEventSlimMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Set_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Set_2($duringCancellation){}
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
class ManualResetEventSlim extends \System\Object implements 
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
	public $IsSet;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $SpinCount;
	/**
	 * @return \System\Threading\WaitHandle
	 */
	public  function get_WaitHandle(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSet(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_IsSet($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_SpinCount(){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_SpinCount($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Waiters(){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Waiters($value){}
	/**
	 * @param \System\Boolean $initialState
	 * @param \System\Int32|int $spinCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Initialize($initialState, $spinCount){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureLockObjectCreated(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function LazyInitializeEvent(){}
	/**
	 * @uses ManualResetEventSlimMethodsOverride::Set_1 ()
	 * @uses ManualResetEventSlimMethodsOverride::Set_2 ($duringCancellation)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Set(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function Reset(){}
	/**
	 * @uses ManualResetEventSlimMethodsOverride::Wait_1 ()
	 * @uses ManualResetEventSlimMethodsOverride::Wait_2 ($cancellationToken)
	 * @uses ManualResetEventSlimMethodsOverride::Wait_3 ($timeout)
	 * @uses ManualResetEventSlimMethodsOverride::Wait_4 ($timeout, $cancellationToken)
	 * @uses ManualResetEventSlimMethodsOverride::Wait_5 ($millisecondsTimeout)
	 * @uses ManualResetEventSlimMethodsOverride::Wait_6 ($millisecondsTimeout, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Wait(mixed ...$args){}
	/**
	 * @uses ManualResetEventSlimMethodsOverride::Dispose_1 ()
	 * @uses ManualResetEventSlimMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ThrowIfDisposed(){}
	/**
	 * @param \System\Object|object $obj
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CancellationTokenCallback($obj){}
	/**
	 * @param \System\Int32|int $newBits
	 * @param \System\Int32|int $updateBitsMask
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateStateAtomically($newBits, $updateBitsMask){}
	/**
	 * @param \System\Int32|int $state
	 * @param \System\Int32|int $mask
	 * @param \System\Int32|int $rightBitShiftCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ExtractStatePortionAndShiftRight($state, $mask, $rightBitShiftCount){}
	/**
	 * @param \System\Int32|int $state
	 * @param \System\Int32|int $mask
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ExtractStatePortion($state, $mask){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
