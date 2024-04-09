<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ManualResetEventSlimOverride {
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Set_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $duringCancellation
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Set_2 ($duringCancellation){}
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
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Boolean|bool $initialState
	 */
	#[MethodOverride]public function __construct_2 ($initialState){}
	/**
	 * @param \System\Boolean|bool $initialState
	 * @param \System\Int32|int $spinCount
	 */
	#[MethodOverride]public function __construct_3 ($initialState, $spinCount){}
}
class ManualResetEventSlim extends \System\Object implements
	\System\IDisposable
{
	use ManualResetEventSlimOverride;
	/**
	 * @property
	 * @var \System\Threading\WaitHandle
	 * @since readonly
	 */
	public $WaitHandle;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsSet;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $SpinCount;
	private function Initialize($initialState, $spinCount){}
	private function EnsureLockObjectCreated(){}
	private function LazyInitializeEvent(){}
	/**
	 * @uses ManualResetEventSlimOverride::Set_1 <br>public , args: ()<br>
	 * @uses ManualResetEventSlimOverride::Set_2 <br>private , args: ($duringCancellation)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Set (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public function Reset(){}
	/**
	 * @uses ManualResetEventSlimOverride::Wait_1 <br>public , args: ()<br>
	 * @uses ManualResetEventSlimOverride::Wait_2 <br>public , args: ($cancellationToken)<br>
	 * @uses ManualResetEventSlimOverride::Wait_3 <br>public , args: ($timeout)<br>
	 * @uses ManualResetEventSlimOverride::Wait_4 <br>public , args: ($timeout, $cancellationToken)<br>
	 * @uses ManualResetEventSlimOverride::Wait_5 <br>public , args: ($millisecondsTimeout)<br>
	 * @uses ManualResetEventSlimOverride::Wait_6 <br>public , args: ($millisecondsTimeout, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function Wait (\override ...$args){}
	/**
	 * @uses ManualResetEventSlimOverride::Dispose_1 <br>public , args: ()<br>
	 * @uses ManualResetEventSlimOverride::Dispose_2 <br>protected , args: ($disposing)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Dispose (\override ...$args){}
	private function ThrowIfDisposed(){}
	private static function CancellationTokenCallback($obj){}
	private function UpdateStateAtomically($newBits, $updateBitsMask){}
	private static function ExtractStatePortionAndShiftRight($state, $mask, $rightBitShiftCount){}
	private static function ExtractStatePortion($state, $mask){}
	/**
	 * @uses ManualResetEventSlimOverride::__construct_1 <br>public , args: ()<br>
	 * @uses ManualResetEventSlimOverride::__construct_2 <br>public , args: ($initialState)<br>
	 * @uses ManualResetEventSlimOverride::__construct_3 <br>public , args: ($initialState, $spinCount)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}