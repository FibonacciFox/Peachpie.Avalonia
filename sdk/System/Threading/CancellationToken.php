<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CancellationTokenMethodsOverride
{
	/**
	 * @return \System\Threading\CancellationTokenRegistration
	 */
	#[MethodOverride] public  function Register_1($callback){}
	/**
	 * @return \System\Threading\CancellationTokenRegistration
	 */
	#[MethodOverride] public  function Register_2($callback, $useSynchronizationContext){}
	/**
	 * @return \System\Threading\CancellationTokenRegistration
	 */
	#[MethodOverride] public  function Register_3($callback, $state){}
	/**
	 * @return \System\Threading\CancellationTokenRegistration
	 */
	#[MethodOverride] public  function Register_4($callback, $state){}
	/**
	 * @return \System\Threading\CancellationTokenRegistration
	 */
	#[MethodOverride] public  function Register_5($callback, $state, $useSynchronizationContext){}
	/**
	 * @return \System\Threading\CancellationTokenRegistration
	 */
	#[MethodOverride] private  function Register_6($callback, $state, $useSynchronizationContext, $useExecutionContext){}
	/**
	 * @return \System\Threading\CancellationTokenRegistration
	 */
	#[MethodOverride] public  function UnsafeRegister_1($callback, $state){}
	/**
	 * @return \System\Threading\CancellationTokenRegistration
	 */
	#[MethodOverride] public  function UnsafeRegister_2($callback, $state){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($other){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
}
/**
 */
class CancellationToken extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Threading\CancellationToken
	 * @property
	 */
	public readonly $None;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCancellationRequested;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanBeCanceled;
	/**
	 * @var \System\Threading\WaitHandle
	 * @property
	 */
	public readonly $WaitHandle;
	/**
	 * @return \System\Threading\CancellationToken
	 */
	public static function get_None(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCancellationRequested(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanBeCanceled(){}
	/**
	 * @return \System\Threading\WaitHandle
	 */
	public  function get_WaitHandle(){}
	/**
	 * @uses CancellationTokenMethodsOverride::Register_1 ($callback)
	 * @uses CancellationTokenMethodsOverride::Register_2 ($callback, $useSynchronizationContext)
	 * @uses CancellationTokenMethodsOverride::Register_3 ($callback, $state)
	 * @uses CancellationTokenMethodsOverride::Register_4 ($callback, $state)
	 * @uses CancellationTokenMethodsOverride::Register_5 ($callback, $state, $useSynchronizationContext)
	 * @uses CancellationTokenMethodsOverride::Register_6 ($callback, $state, $useSynchronizationContext, $useExecutionContext)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Register(mixed ...$args){}
	/**
	 * @uses CancellationTokenMethodsOverride::UnsafeRegister_1 ($callback, $state)
	 * @uses CancellationTokenMethodsOverride::UnsafeRegister_2 ($callback, $state)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function UnsafeRegister(mixed ...$args){}
	/**
	 * @uses CancellationTokenMethodsOverride::Equals_1 ($other)
	 * @uses CancellationTokenMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Threading\CancellationToken $left
	 * @param \System\Threading\CancellationToken $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Threading\CancellationToken $left
	 * @param \System\Threading\CancellationToken $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @return \System\Void|void
	 */
	public  function ThrowIfCancellationRequested(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ThrowOperationCanceledException(){}
}
