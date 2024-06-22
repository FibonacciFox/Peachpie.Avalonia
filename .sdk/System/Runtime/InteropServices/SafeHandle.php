<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SafeHandleOverride {
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
}
class SafeHandle extends \System\Runtime\ConstrainedExecution\CriticalFinalizerObject implements
	\System\IDisposable
{
	use SafeHandleOverride;

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
	public $IsClosed;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsInvalid;
	/**
	 * @param \System\IntPtr $handle
	 * @return \System\Void|void
	 */
	protected function SetHandle($handle){}
	/**
	 * @return \System\IntPtr
	 */
	public function DangerousGetHandle(){}
	/**
	 * @return \System\Void|void
	 */
	public function Close(){}
	/**
	 * @uses SafeHandleOverride::Dispose_1 <br>public , args: ()<br>
	 * @uses SafeHandleOverride::Dispose_2 <br>protected , args: ($disposing)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Dispose (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public function SetHandleAsInvalid(){}
	/**
	 * @return \System\Boolean|bool
	 */
	abstract protected function ReleaseHandle();
	/**
	 * @param \System\Boolean& $success
	 * @return \System\Void|void
	 */
	public function DangerousAddRef($success){}
	/**
	 * @return \System\Void|void
	 */
	public function DangerousRelease(){}
	private function InternalRelease($disposeOrFinalizeOperation){}
}