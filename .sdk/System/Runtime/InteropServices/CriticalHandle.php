<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CriticalHandleOverride {
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
class CriticalHandle extends \System\Runtime\ConstrainedExecution\CriticalFinalizerObject implements
	\System\IDisposable
{
	use CriticalHandleOverride;
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
	private function Cleanup(){}
	/**
	 * @param \System\IntPtr $handle
	 * @return \System\Void|void
	 */
	protected function SetHandle($handle){}
	/**
	 * @return \System\Void|void
	 */
	public function Close(){}
	/**
	 * @uses CriticalHandleOverride::Dispose_1 <br>public , args: ()<br>
	 * @uses CriticalHandleOverride::Dispose_2 <br>protected , args: ($disposing)<br>
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
}