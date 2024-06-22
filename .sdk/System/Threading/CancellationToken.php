<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CancellationTokenOverride {
	/**
	 * @deprecated
	 * @param \System\Action $callback
	 * @return \System\Threading\CancellationTokenRegistration
	 */
	#[MethodOverride]public function Register_1 ($callback){}
	/**
	 * @deprecated
	 * @param \System\Action $callback
	 * @param \System\Boolean|bool $useSynchronizationContext
	 * @return \System\Threading\CancellationTokenRegistration
	 */
	#[MethodOverride]public function Register_2 ($callback, $useSynchronizationContext){}
	/**
	 * @deprecated
	 * @param \System\Action_1 $callback [generic: System\Object]
	 * @param \System\Object|object $state
	 * @return \System\Threading\CancellationTokenRegistration
	 */
	#[MethodOverride]public function Register_3 ($callback, $state){}
	/**
	 * @deprecated
	 * @param \System\Action_2 $callback [generic: System\Object,System\Threading\CancellationToken]
	 * @param \System\Object|object $state
	 * @return \System\Threading\CancellationTokenRegistration
	 */
	#[MethodOverride]public function Register_4 ($callback, $state){}
	/**
	 * @deprecated
	 * @param \System\Action_1 $callback [generic: System\Object]
	 * @param \System\Object|object $state
	 * @param \System\Boolean|bool $useSynchronizationContext
	 * @return \System\Threading\CancellationTokenRegistration
	 */
	#[MethodOverride]public function Register_5 ($callback, $state, $useSynchronizationContext){}
	/**
	 * @deprecated
	 * @param \System\Delegate $callback
	 * @param \System\Object|object $state
	 * @param \System\Boolean|bool $useSynchronizationContext
	 * @param \System\Boolean|bool $useExecutionContext
	 * @return \System\Threading\CancellationTokenRegistration
	 */
	#[MethodOverride]private function Register_6 ($callback, $state, $useSynchronizationContext, $useExecutionContext){}
	/**
	 * @deprecated
	 * @param \System\Action_1 $callback [generic: System\Object]
	 * @param \System\Object|object $state
	 * @return \System\Threading\CancellationTokenRegistration
	 */
	#[MethodOverride]public function UnsafeRegister_1 ($callback, $state){}
	/**
	 * @deprecated
	 * @param \System\Action_2 $callback [generic: System\Object,System\Threading\CancellationToken]
	 * @param \System\Object|object $state
	 * @return \System\Threading\CancellationTokenRegistration
	 */
	#[MethodOverride]public function UnsafeRegister_2 ($callback, $state){}
}
final class CancellationToken extends \System\ValueType implements
	\System\IEquatable_1
{
	use CancellationTokenOverride;

	/**
	 * @property
	 * @var \System\Threading\CancellationToken
	 * @since readonly
	 */
	public $None;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCancellationRequested;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CanBeCanceled;
	/**
	 * @property
	 * @var \System\Threading\WaitHandle
	 * @since readonly
	 */
	public $WaitHandle;
	/**
	 * @uses CancellationTokenOverride::Register_1 <br>public , args: ($callback)<br>
	 * @uses CancellationTokenOverride::Register_2 <br>public , args: ($callback, $useSynchronizationContext)<br>
	 * @uses CancellationTokenOverride::Register_3 <br>public , args: ($callback, $state)<br>
	 * @uses CancellationTokenOverride::Register_4 <br>public , args: ($callback, $state)<br>
	 * @uses CancellationTokenOverride::Register_5 <br>public , args: ($callback, $state, $useSynchronizationContext)<br>
	 * @uses CancellationTokenOverride::Register_6 <br>private , args: ($callback, $state, $useSynchronizationContext, $useExecutionContext)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\CancellationTokenRegistration|mixed|\override
	 */
	#[MethodOverridePublic]function Register (\override ...$args){}
	/**
	 * @uses CancellationTokenOverride::UnsafeRegister_1 <br>public , args: ($callback, $state)<br>
	 * @uses CancellationTokenOverride::UnsafeRegister_2 <br>public , args: ($callback, $state)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\CancellationTokenRegistration|mixed|\override
	 */
	#[MethodOverridePublic]function UnsafeRegister (\override ...$args){}
	/**
	 * @param \System\Threading\CancellationToken $left
	 * @param \System\Threading\CancellationToken $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Threading\CancellationToken $left
	 * @param \System\Threading\CancellationToken $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @return \System\Void|void
	 */
	public function ThrowIfCancellationRequested(){}
	private function ThrowOperationCanceledException(){}
	/**
	 * @param \System\Boolean|bool $canceled
	 */
	public function __construct($canceled){}
}