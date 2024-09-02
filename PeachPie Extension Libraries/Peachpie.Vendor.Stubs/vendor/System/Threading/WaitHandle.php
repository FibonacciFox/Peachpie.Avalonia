<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait WaitHandleOverride {
	/**
	 * @deprecated
	 * @param \System\Span_1 $waitHandles [generic: System\IntPtr]
	 * @param \System\Boolean|bool $waitAll
	 * @param \System\Int32|int $millisecondsTimeout
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function WaitMultipleIgnoringSyncContext_1 ($waitHandles, $waitAll, $millisecondsTimeout){}
	/**
	 * @deprecated
	 * @param \System\IntPtr* $waitHandles
	 * @param \System\Int32|int $numHandles
	 * @param \System\Boolean|bool $waitAll
	 * @param \System\Int32|int $millisecondsTimeout
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function WaitMultipleIgnoringSyncContext_2 ($waitHandles, $numHandles, $waitAll, $millisecondsTimeout){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $explicitDisposing
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function Dispose_1 ($explicitDisposing){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Dispose_2 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $millisecondsTimeout
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function WaitOne_1 ($millisecondsTimeout){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $timeout
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function WaitOne_2 ($timeout){}
	/**
	 * @deprecated
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function WaitOne_3 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $millisecondsTimeout
	 * @param \System\Boolean|bool $exitContext
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function WaitOne_4 ($millisecondsTimeout, $exitContext){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $timeout
	 * @param \System\Boolean|bool $exitContext
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function WaitOne_5 ($timeout, $exitContext){}
	/**
	 * @deprecated
	 * @param \System\Threading\WaitHandle $waitHandles
	 * @param \System\Boolean|bool $waitAll
	 * @param \System\Int32|int $millisecondsTimeout
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function WaitMultiple_1 ($waitHandles, $waitAll, $millisecondsTimeout){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $waitHandles [generic: System\Threading\WaitHandle]
	 * @param \System\Boolean|bool $waitAll
	 * @param \System\Int32|int $millisecondsTimeout
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function WaitMultiple_2 ($waitHandles, $waitAll, $millisecondsTimeout){}
	/**
	 * @deprecated
	 * @param \System\Threading\WaitHandle $toSignal
	 * @param \System\Threading\WaitHandle $toWaitOn
	 * @param \System\Int32|int $millisecondsTimeout
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function SignalAndWait_1 ($toSignal, $toWaitOn, $millisecondsTimeout){}
	/**
	 * @deprecated
	 * @param \System\Threading\WaitHandle $toSignal
	 * @param \System\Threading\WaitHandle $toWaitOn
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function SignalAndWait_2 ($toSignal, $toWaitOn){}
	/**
	 * @deprecated
	 * @param \System\Threading\WaitHandle $toSignal
	 * @param \System\Threading\WaitHandle $toWaitOn
	 * @param \System\TimeSpan $timeout
	 * @param \System\Boolean|bool $exitContext
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function SignalAndWait_3 ($toSignal, $toWaitOn, $timeout, $exitContext){}
	/**
	 * @deprecated
	 * @param \System\Threading\WaitHandle $toSignal
	 * @param \System\Threading\WaitHandle $toWaitOn
	 * @param \System\Int32|int $millisecondsTimeout
	 * @param \System\Boolean|bool $exitContext
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function SignalAndWait_4 ($toSignal, $toWaitOn, $millisecondsTimeout, $exitContext){}
	/**
	 * @deprecated
	 * @param \System\Threading\WaitHandle $waitHandles
	 * @param \System\Int32|int $millisecondsTimeout
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function WaitAll_1 ($waitHandles, $millisecondsTimeout){}
	/**
	 * @deprecated
	 * @param \System\Threading\WaitHandle $waitHandles
	 * @param \System\TimeSpan $timeout
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function WaitAll_2 ($waitHandles, $timeout){}
	/**
	 * @deprecated
	 * @param \System\Threading\WaitHandle $waitHandles
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function WaitAll_3 ($waitHandles){}
	/**
	 * @deprecated
	 * @param \System\Threading\WaitHandle $waitHandles
	 * @param \System\Int32|int $millisecondsTimeout
	 * @param \System\Boolean|bool $exitContext
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function WaitAll_4 ($waitHandles, $millisecondsTimeout, $exitContext){}
	/**
	 * @deprecated
	 * @param \System\Threading\WaitHandle $waitHandles
	 * @param \System\TimeSpan $timeout
	 * @param \System\Boolean|bool $exitContext
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function WaitAll_5 ($waitHandles, $timeout, $exitContext){}
	/**
	 * @deprecated
	 * @param \System\Threading\WaitHandle $waitHandles
	 * @param \System\Int32|int $millisecondsTimeout
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function WaitAny_1 ($waitHandles, $millisecondsTimeout){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $safeWaitHandles [generic: Microsoft\Win32\SafeHandles\SafeWaitHandle]
	 * @param \System\Int32|int $millisecondsTimeout
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function WaitAny_2 ($safeWaitHandles, $millisecondsTimeout){}
	/**
	 * @deprecated
	 * @param \System\Threading\WaitHandle $waitHandles
	 * @param \System\TimeSpan $timeout
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function WaitAny_3 ($waitHandles, $timeout){}
	/**
	 * @deprecated
	 * @param \System\Threading\WaitHandle $waitHandles
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function WaitAny_4 ($waitHandles){}
	/**
	 * @deprecated
	 * @param \System\Threading\WaitHandle $waitHandles
	 * @param \System\Int32|int $millisecondsTimeout
	 * @param \System\Boolean|bool $exitContext
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function WaitAny_5 ($waitHandles, $millisecondsTimeout, $exitContext){}
	/**
	 * @deprecated
	 * @param \System\Threading\WaitHandle $waitHandles
	 * @param \System\TimeSpan $timeout
	 * @param \System\Boolean|bool $exitContext
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function WaitAny_6 ($waitHandles, $timeout, $exitContext){}
}
class WaitHandle extends \System\MarshalByRefObject implements
	\System\IDisposable
{
	use WaitHandleOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \System\IntPtr
	 */
	protected static $InvalidHandle;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const MaxWaitHandles = '64';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const WaitSuccess = '0';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const WaitAbandoned = '128';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const WaitTimeout = '258';
	/**
	 * @property
	 * @var \System\IntPtr
	 */
	public $Handle;
	/**
	 * @property
	 * @var \Microsoft\Win32\SafeHandles\SafeWaitHandle
	 */
	public $SafeWaitHandle;
	private static function WaitOneCore($waitHandle, $millisecondsTimeout){}
	/**
	 * @uses WaitHandleOverride::WaitMultipleIgnoringSyncContext_1 <br>protected , args: ($waitHandles, $waitAll, $millisecondsTimeout)<br>
	 * @uses WaitHandleOverride::WaitMultipleIgnoringSyncContext_2 <br>private , args: ($waitHandles, $numHandles, $waitAll, $millisecondsTimeout)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverrideProtected]function WaitMultipleIgnoringSyncContext (\override ...$args){}
	private static function SignalAndWaitCore($waitHandleToSignal, $waitHandleToWaitOn, $millisecondsTimeout){}
	private static function SignalAndWaitNative($waitHandleToSignal, $waitHandleToWaitOn, $millisecondsTimeout){}
	/**
	 * @param \System\TimeSpan $timeout
	 * @return \System\Int32|int
	 */
	protected static function ToTimeoutMilliseconds($timeout){}
	/**
	 * @return \System\Void|void
	 */
	public function Close(){}
	/**
	 * @uses WaitHandleOverride::Dispose_1 <br>protected , args: ($explicitDisposing)<br>
	 * @uses WaitHandleOverride::Dispose_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Dispose (\override ...$args){}
	/**
	 * @uses WaitHandleOverride::WaitOne_1 <br>public , args: ($millisecondsTimeout)<br>
	 * @uses WaitHandleOverride::WaitOne_2 <br>public , args: ($timeout)<br>
	 * @uses WaitHandleOverride::WaitOne_3 <br>public , args: ()<br>
	 * @uses WaitHandleOverride::WaitOne_4 <br>public , args: ($millisecondsTimeout, $exitContext)<br>
	 * @uses WaitHandleOverride::WaitOne_5 <br>public , args: ($timeout, $exitContext)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function WaitOne (\override ...$args){}
	private function WaitOneNoCheck($millisecondsTimeout){}
	private static function RentSafeWaitHandleArray($capacity){}
	private static function ReturnSafeWaitHandleArray($safeWaitHandles){}
	private static function ObtainSafeWaitHandles($waitHandles, $safeWaitHandles, $unsafeWaitHandles){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses WaitHandleOverride::WaitMultiple_1 <br>private , args: ($waitHandles, $waitAll, $millisecondsTimeout)<br>
	 * @uses WaitHandleOverride::WaitMultiple_2 <br>private , args: ($waitHandles, $waitAll, $millisecondsTimeout)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePrivate]function WaitMultiple (\override ...$args){}
	private static function WaitAnyMultiple($safeWaitHandles, $millisecondsTimeout){}
	/**
	 * @uses WaitHandleOverride::SignalAndWait_1 <br>private , args: ($toSignal, $toWaitOn, $millisecondsTimeout)<br>
	 * @uses WaitHandleOverride::SignalAndWait_2 <br>public , args: ($toSignal, $toWaitOn)<br>
	 * @uses WaitHandleOverride::SignalAndWait_3 <br>public , args: ($toSignal, $toWaitOn, $timeout, $exitContext)<br>
	 * @uses WaitHandleOverride::SignalAndWait_4 <br>public , args: ($toSignal, $toWaitOn, $millisecondsTimeout, $exitContext)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function SignalAndWait (\override ...$args){}
	/**
	 * @uses WaitHandleOverride::WaitAll_1 <br>public , args: ($waitHandles, $millisecondsTimeout)<br>
	 * @uses WaitHandleOverride::WaitAll_2 <br>public , args: ($waitHandles, $timeout)<br>
	 * @uses WaitHandleOverride::WaitAll_3 <br>public , args: ($waitHandles)<br>
	 * @uses WaitHandleOverride::WaitAll_4 <br>public , args: ($waitHandles, $millisecondsTimeout, $exitContext)<br>
	 * @uses WaitHandleOverride::WaitAll_5 <br>public , args: ($waitHandles, $timeout, $exitContext)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function WaitAll (\override ...$args){}
	/**
	 * @uses WaitHandleOverride::WaitAny_1 <br>public , args: ($waitHandles, $millisecondsTimeout)<br>
	 * @uses WaitHandleOverride::WaitAny_2 <br>protected , args: ($safeWaitHandles, $millisecondsTimeout)<br>
	 * @uses WaitHandleOverride::WaitAny_3 <br>public , args: ($waitHandles, $timeout)<br>
	 * @uses WaitHandleOverride::WaitAny_4 <br>public , args: ($waitHandles)<br>
	 * @uses WaitHandleOverride::WaitAny_5 <br>public , args: ($waitHandles, $millisecondsTimeout, $exitContext)<br>
	 * @uses WaitHandleOverride::WaitAny_6 <br>public , args: ($waitHandles, $timeout, $exitContext)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function WaitAny (\override ...$args){}
}