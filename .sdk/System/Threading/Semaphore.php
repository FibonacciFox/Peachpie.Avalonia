<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SemaphoreOverride {
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
	 * @param \System\Int32|int $initialCount
	 * @param \System\Int32|int $maximumCount
	 */
	#[MethodOverride]public function __construct_1 ($initialCount, $maximumCount){}
	/**
	 * @param \System\Int32|int $initialCount
	 * @param \System\Int32|int $maximumCount
	 * @param \System\String|string $name
	 */
	#[MethodOverride]public function __construct_2 ($initialCount, $maximumCount, $name){}
	/**
	 * @param \System\Int32|int $initialCount
	 * @param \System\Int32|int $maximumCount
	 * @param \System\String|string $name
	 * @param \System\Boolean& &$createdNew
	 */
	#[MethodOverride]public function __construct_3 ($initialCount, $maximumCount, $name, &$createdNew){}
}
final class Semaphore extends \System\Threading\WaitHandle implements
	\System\IDisposable
{
	use SemaphoreOverride;
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
	/**
	 * @param \System\String|string $name
	 * @return \System\Threading\Semaphore
	 */
	public static function OpenExisting($name){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Threading\Semaphore& &$result
	 * @return \System\Boolean|bool
	 */
	public static function TryOpenExisting($name, &$result){}
	/**
	 * @uses SemaphoreOverride::Release_1 <br>public , args: ()<br>
	 * @uses SemaphoreOverride::Release_2 <br>public , args: ($releaseCount)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function Release (\override ...$args){}
	private function CreateSemaphoreCore($initialCount, $maximumCount, $name, &$createdNew){}
	private static function OpenExistingWorker($name, &$result){}
	private function ReleaseCore($releaseCount){}
	/**
	 * @uses SemaphoreOverride::__construct_1 <br>public , args: ($initialCount, $maximumCount)<br>
	 * @uses SemaphoreOverride::__construct_2 <br>public , args: ($initialCount, $maximumCount, $name)<br>
	 * @uses SemaphoreOverride::__construct_3 <br>public , args: ($initialCount, $maximumCount, $name, &$createdNew)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}