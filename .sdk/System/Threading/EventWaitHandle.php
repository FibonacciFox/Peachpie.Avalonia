<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EventWaitHandleOverride {
	/**
	 * @deprecated
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Set_1 (){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeWaitHandle $waitHandle
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function Set_2 ($waitHandle){}
	/**
	 * @param \System\Boolean|bool $initialState
	 * @param \System\Threading\EventResetMode $mode
	 */
	#[MethodOverride]public function __construct_1 ($initialState, $mode){}
	/**
	 * @param \System\Boolean|bool $initialState
	 * @param \System\Threading\EventResetMode $mode
	 * @param \System\String|string $name
	 */
	#[MethodOverride]public function __construct_2 ($initialState, $mode, $name){}
	/**
	 * @param \System\Boolean|bool $initialState
	 * @param \System\Threading\EventResetMode $mode
	 * @param \System\String|string $name
	 * @param \System\Boolean& &$createdNew
	 */
	#[MethodOverride]public function __construct_3 ($initialState, $mode, $name, &$createdNew){}
}
class EventWaitHandle extends \System\Threading\WaitHandle implements
	\System\IDisposable
{
	use EventWaitHandleOverride;
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
	 * @return \System\Threading\EventWaitHandle
	 */
	public static function OpenExisting($name){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Threading\EventWaitHandle& &$result
	 * @return \System\Boolean|bool
	 */
	public static function TryOpenExisting($name, &$result){}
	private function CreateEventCore($initialState, $mode, $name, &$createdNew){}
	private static function OpenExistingWorker($name, &$result){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function Reset(){}
	/**
	 * @uses EventWaitHandleOverride::Set_1 <br>public , args: ()<br>
	 * @uses EventWaitHandleOverride::Set_2 <br>protected , args: ($waitHandle)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function Set (\override ...$args){}
	/**
	 * @uses EventWaitHandleOverride::__construct_1 <br>public , args: ($initialState, $mode)<br>
	 * @uses EventWaitHandleOverride::__construct_2 <br>public , args: ($initialState, $mode, $name)<br>
	 * @uses EventWaitHandleOverride::__construct_3 <br>public , args: ($initialState, $mode, $name, &$createdNew)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}