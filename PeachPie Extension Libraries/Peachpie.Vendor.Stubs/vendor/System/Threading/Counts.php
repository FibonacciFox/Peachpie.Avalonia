<?php
namespace System\Threading;
final class Counts extends \System\ValueType implements
	\System\IEquatable_1
{
	/**
	 * @property
	 * @var \System\UInt32
	 */
	public $SignalCount;
	/**
	 * @property
	 * @var \System\UInt16
	 * @since readonly
	 */
	public $WaiterCount;
	/**
	 * @property
	 * @var \System\Byte
	 * @since readonly
	 */
	public $SpinnerCount;
	/**
	 * @property
	 * @var \System\Byte
	 * @since readonly
	 */
	public $CountOfWaitersSignaledToWake;
	private function GetUInt32Value($shift){}
	private function SetUInt32Value($value, $shift){}
	private function GetUInt16Value($shift){}
	private function GetByteValue($shift){}
	/**
	 * @param \System\UInt32 $value
	 * @return \System\Void|void
	 */
	public function AddSignalCount($value){}
	/**
	 * @return \System\Void|void
	 */
	public function DecrementSignalCount(){}
	/**
	 * @return \System\Void|void
	 */
	public function IncrementWaiterCount(){}
	/**
	 * @return \System\Void|void
	 */
	public function DecrementWaiterCount(){}
	/**
	 * @return \System\Void|void
	 */
	public function InterlockedDecrementWaiterCount(){}
	/**
	 * @return \System\Void|void
	 */
	public function IncrementSpinnerCount(){}
	/**
	 * @return \System\Void|void
	 */
	public function DecrementSpinnerCount(){}
	/**
	 * @param \System\UInt32 $value
	 * @return \System\Void|void
	 */
	public function AddUpToMaxCountOfWaitersSignaledToWake($value){}
	/**
	 * @return \System\Void|void
	 */
	public function DecrementCountOfWaitersSignaledToWake(){}
	/**
	 * @param \System\Threading\LowLevelLifoSemaphore+Counts $newCounts
	 * @param \System\Threading\LowLevelLifoSemaphore+Counts $oldCounts
	 * @return \System\Threading\LowLevelLifoSemaphore+Counts
	 */
	public function InterlockedCompareExchange($newCounts, $oldCounts){}
	/**
	 * @param \System\Threading\LowLevelLifoSemaphore+Counts $lhs
	 * @param \System\Threading\LowLevelLifoSemaphore+Counts $rhs
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($lhs, $rhs){}
}