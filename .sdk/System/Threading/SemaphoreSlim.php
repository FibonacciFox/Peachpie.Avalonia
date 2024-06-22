<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SemaphoreSlimOverride {
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Wait_1 (){}
	/**
	 * @deprecated
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Wait_2 ($cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $timeout
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Wait_3 ($timeout){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $timeout
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Wait_4 ($timeout, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $millisecondsTimeout
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Wait_5 ($millisecondsTimeout){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $millisecondsTimeout
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Wait_6 ($millisecondsTimeout, $cancellationToken){}
	/**
	 * @deprecated
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function WaitAsync_1 (){}
	/**
	 * @deprecated
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function WaitAsync_2 ($cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $millisecondsTimeout
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function WaitAsync_3 ($millisecondsTimeout){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $timeout
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function WaitAsync_4 ($timeout){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $timeout
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function WaitAsync_5 ($timeout, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $millisecondsTimeout
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function WaitAsync_6 ($millisecondsTimeout, $cancellationToken){}
	/**
	 * @deprecated
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function Release_1 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $releaseCount
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function Release_2 ($releaseCount){}
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
	 * @param \System\Int32|int $initialCount
	 */
	#[MethodOverride]public function __construct_1 ($initialCount){}
	/**
	 * @param \System\Int32|int $initialCount
	 * @param \System\Int32|int $maxCount
	 */
	#[MethodOverride]public function __construct_2 ($initialCount, $maxCount){}
}
class SemaphoreSlim extends \System\Object implements
	\System\IDisposable
{
	use SemaphoreSlimOverride;

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $CurrentCount;
	/**
	 * @property
	 * @var \System\Threading\WaitHandle
	 * @since readonly
	 */
	public $AvailableWaitHandle;
	/**
	 * @uses SemaphoreSlimOverride::Wait_1 <br>public , args: ()<br>
	 * @uses SemaphoreSlimOverride::Wait_2 <br>public , args: ($cancellationToken)<br>
	 * @uses SemaphoreSlimOverride::Wait_3 <br>public , args: ($timeout)<br>
	 * @uses SemaphoreSlimOverride::Wait_4 <br>public , args: ($timeout, $cancellationToken)<br>
	 * @uses SemaphoreSlimOverride::Wait_5 <br>public , args: ($millisecondsTimeout)<br>
	 * @uses SemaphoreSlimOverride::Wait_6 <br>public , args: ($millisecondsTimeout, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function Wait (\override ...$args){}
	private function WaitUntilCountOrTimeout($millisecondsTimeout, $startTime, $cancellationToken){}
	/**
	 * @uses SemaphoreSlimOverride::WaitAsync_1 <br>public , args: ()<br>
	 * @uses SemaphoreSlimOverride::WaitAsync_2 <br>public , args: ($cancellationToken)<br>
	 * @uses SemaphoreSlimOverride::WaitAsync_3 <br>public , args: ($millisecondsTimeout)<br>
	 * @uses SemaphoreSlimOverride::WaitAsync_4 <br>public , args: ($timeout)<br>
	 * @uses SemaphoreSlimOverride::WaitAsync_5 <br>public , args: ($timeout, $cancellationToken)<br>
	 * @uses SemaphoreSlimOverride::WaitAsync_6 <br>public , args: ($millisecondsTimeout, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task|\System\Threading\Tasks\Task_1|mixed|\override
	 */
	#[MethodOverridePublic]function WaitAsync (\override ...$args){}
	private function CreateAndAddAsyncWaiter(){}
	private function RemoveAsyncWaiter($task){}
	private function WaitUntilCountOrTimeoutAsync($asyncWaiter, $millisecondsTimeout, $cancellationToken){}
	/**
	 * @uses SemaphoreSlimOverride::Release_1 <br>public , args: ()<br>
	 * @uses SemaphoreSlimOverride::Release_2 <br>public , args: ($releaseCount)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function Release (\override ...$args){}
	/**
	 * @uses SemaphoreSlimOverride::Dispose_1 <br>public , args: ()<br>
	 * @uses SemaphoreSlimOverride::Dispose_2 <br>protected , args: ($disposing)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Dispose (\override ...$args){}
	private static function CancellationTokenCanceledEventHandler($obj){}
	private function CheckDispose(){}
	/**
	 * @uses SemaphoreSlimOverride::__construct_1 <br>public , args: ($initialCount)<br>
	 * @uses SemaphoreSlimOverride::__construct_2 <br>public , args: ($initialCount, $maxCount)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}