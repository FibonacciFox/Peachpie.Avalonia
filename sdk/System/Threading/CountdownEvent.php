<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CountdownEventMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_2($disposing){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Signal_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Signal_2($signalCount){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddCount_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddCount_2($signalCount){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryAddCount_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryAddCount_2($signalCount){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Reset_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Reset_2($count){}
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
}
/**
 */
class CountdownEvent extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $CurrentCount;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $InitialCount;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSet;
	/**
	 * @var \System\Threading\WaitHandle
	 * @property
	 */
	public readonly $WaitHandle;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_CurrentCount(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_InitialCount(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSet(){}
	/**
	 * @return \System\Threading\WaitHandle
	 */
	public  function get_WaitHandle(){}
	/**
	 * @uses CountdownEventMethodsOverride::Dispose_1 ()
	 * @uses CountdownEventMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses CountdownEventMethodsOverride::Signal_1 ()
	 * @uses CountdownEventMethodsOverride::Signal_2 ($signalCount)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Signal(mixed ...$args){}
	/**
	 * @uses CountdownEventMethodsOverride::AddCount_1 ()
	 * @uses CountdownEventMethodsOverride::AddCount_2 ($signalCount)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddCount(mixed ...$args){}
	/**
	 * @uses CountdownEventMethodsOverride::TryAddCount_1 ()
	 * @uses CountdownEventMethodsOverride::TryAddCount_2 ($signalCount)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TryAddCount(mixed ...$args){}
	/**
	 * @uses CountdownEventMethodsOverride::Reset_1 ()
	 * @uses CountdownEventMethodsOverride::Reset_2 ($count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Reset(mixed ...$args){}
	/**
	 * @uses CountdownEventMethodsOverride::Wait_1 ()
	 * @uses CountdownEventMethodsOverride::Wait_2 ($cancellationToken)
	 * @uses CountdownEventMethodsOverride::Wait_3 ($timeout)
	 * @uses CountdownEventMethodsOverride::Wait_4 ($timeout, $cancellationToken)
	 * @uses CountdownEventMethodsOverride::Wait_5 ($millisecondsTimeout)
	 * @uses CountdownEventMethodsOverride::Wait_6 ($millisecondsTimeout, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Wait(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
