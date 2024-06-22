<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CancellationTokenSourceOverride {
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Cancel_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $throwOnFirstException
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Cancel_2 ($throwOnFirstException){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $delay
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CancelAfter_1 ($delay){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $millisecondsDelay
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CancelAfter_2 ($millisecondsDelay){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $millisecondsDelay
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function CancelAfter_3 ($millisecondsDelay){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Dispose_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $disposing
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function Dispose_2 ($disposing){}
	/**
	 * @deprecated
	 * @param \System\Threading\CancellationToken $token1
	 * @param \System\Threading\CancellationToken $token2
	 * @return \System\Threading\CancellationTokenSource
	 */
	#[MethodOverride]public static function CreateLinkedTokenSource_1 ($token1, $token2){}
	/**
	 * @deprecated
	 * @param \System\Threading\CancellationToken $token
	 * @return \System\Threading\CancellationTokenSource
	 */
	#[MethodOverride]public static function CreateLinkedTokenSource_2 ($token){}
	/**
	 * @deprecated
	 * @param \System\Threading\CancellationToken ...$tokens
	 * @return \System\Threading\CancellationTokenSource
	 */
	#[MethodOverride]public static function CreateLinkedTokenSource_3 (...$tokens){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\TimeSpan $delay
	 */
	#[MethodOverride]public function __construct_2 ($delay){}
	/**
	 * @param \System\Int32|int $millisecondsDelay
	 */
	#[MethodOverride]public function __construct_3 ($millisecondsDelay){}
}
class CancellationTokenSource extends \System\Object implements
	\System\IDisposable
{
	use CancellationTokenSourceOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\Threading\CancellationTokenSource
	 */
	protected static $s_canceledSource;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Threading\CancellationTokenSource
	 */
	protected static $s_neverCanceledSource;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCancellationRequested;
	/**
	 * @property
	 * @var \System\Threading\CancellationToken
	 * @since readonly
	 */
	public $Token;
	private static function TimerCallback($state){}
	private function InitializeWithTimer($millisecondsDelay){}
	/**
	 * @uses CancellationTokenSourceOverride::Cancel_1 <br>public , args: ()<br>
	 * @uses CancellationTokenSourceOverride::Cancel_2 <br>public , args: ($throwOnFirstException)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Cancel (\override ...$args){}
	/**
	 * @uses CancellationTokenSourceOverride::CancelAfter_1 <br>public , args: ($delay)<br>
	 * @uses CancellationTokenSourceOverride::CancelAfter_2 <br>public , args: ($millisecondsDelay)<br>
	 * @uses CancellationTokenSourceOverride::CancelAfter_3 <br>private , args: ($millisecondsDelay)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function CancelAfter (\override ...$args){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function TryReset(){}
	/**
	 * @uses CancellationTokenSourceOverride::Dispose_1 <br>public , args: ()<br>
	 * @uses CancellationTokenSourceOverride::Dispose_2 <br>protected , args: ($disposing)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Dispose (\override ...$args){}
	private function ThrowIfDisposed(){}
	/**
	 * @param \System\Delegate $callback
	 * @param \System\Object|object $stateForCallback
	 * @param \System\Threading\SynchronizationContext $syncContext
	 * @param \System\Threading\ExecutionContext $executionContext
	 * @return \System\Threading\CancellationTokenRegistration
	 */
	protected function Register($callback, $stateForCallback, $syncContext, $executionContext){}
	private function NotifyCancellation($throwOnFirstException){}
	private function ExecuteCallbackHandlers($throwOnFirstException){}
	/**
	 * @uses CancellationTokenSourceOverride::CreateLinkedTokenSource_1 <br>public , args: ($token1, $token2)<br>
	 * @uses CancellationTokenSourceOverride::CreateLinkedTokenSource_2 <br>public , args: ($token)<br>
	 * @uses CancellationTokenSourceOverride::CreateLinkedTokenSource_3 <br>public , args: (...$tokens)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\CancellationTokenSource|mixed|\override
	 */
	#[MethodOverridePublic]function CreateLinkedTokenSource (\override ...$args){}
	private static function Invoke($d, $state, $source){}
	/**
	 * @uses CancellationTokenSourceOverride::__construct_1 <br>public , args: ()<br>
	 * @uses CancellationTokenSourceOverride::__construct_2 <br>public , args: ($delay)<br>
	 * @uses CancellationTokenSourceOverride::__construct_3 <br>public , args: ($millisecondsDelay)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}