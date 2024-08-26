<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MutexOverride {
	/**
	 * @param \System\Boolean|bool $initiallyOwned
	 * @param \System\String|string $name
	 * @param \System\Boolean& &$createdNew
	 */
	#[MethodOverride]public function __construct_1 ($initiallyOwned, $name, &$createdNew){}
	/**
	 * @param \System\Boolean|bool $initiallyOwned
	 * @param \System\String|string $name
	 */
	#[MethodOverride]public function __construct_2 ($initiallyOwned, $name){}
	/**
	 * @param \System\Boolean|bool $initiallyOwned
	 */
	#[MethodOverride]public function __construct_3 ($initiallyOwned){}
	/**
	 */
	#[MethodOverride]public function __construct_4 (){}
}
final class Mutex extends \System\Threading\WaitHandle implements
	\System\IDisposable
{
	use MutexOverride;
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
	 * @return \System\Threading\Mutex
	 */
	public static function OpenExisting($name){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Threading\Mutex& &$result
	 * @return \System\Boolean|bool
	 */
	public static function TryOpenExisting($name, &$result){}
	private function CreateMutexCore($initiallyOwned, $name, &$createdNew){}
	private static function OpenExistingWorker($name, &$result){}
	/**
	 * @return \System\Void|void
	 */
	public function ReleaseMutex(){}
	/**
	 * @uses MutexOverride::__construct_1 <br>public , args: ($initiallyOwned, $name, &$createdNew)<br>
	 * @uses MutexOverride::__construct_2 <br>public , args: ($initiallyOwned, $name)<br>
	 * @uses MutexOverride::__construct_3 <br>public , args: ($initiallyOwned)<br>
	 * @uses MutexOverride::__construct_4 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}