<?php
namespace Microsoft\Win32\SafeHandles;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SafeWaitHandleOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\IntPtr $existingHandle
	 * @param \System\Boolean|bool $ownsHandle
	 */
	#[MethodOverride]public function __construct_2 ($existingHandle, $ownsHandle){}
}
final class SafeWaitHandle extends \Microsoft\Win32\SafeHandles\SafeHandleZeroOrMinusOneIsInvalid implements
	\System\IDisposable
{
	use SafeWaitHandleOverride;
	/**
	 * @field
	 * @var \System\IntPtr
	 */
	protected $handle;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsInvalid;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsClosed;
	/**
	 * @uses SafeWaitHandleOverride::__construct_1 <br>public , args: ()<br>
	 * @uses SafeWaitHandleOverride::__construct_2 <br>public , args: ($existingHandle, $ownsHandle)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}