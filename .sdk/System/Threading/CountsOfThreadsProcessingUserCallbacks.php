<?php
namespace System\Threading;
final class CountsOfThreadsProcessingUserCallbacks extends \System\ValueType implements
	\System\IEquatable_1
{
	/**
	 * @property
	 * @var \System\Int16
	 * @since readonly
	 */
	public $Current;
	/**
	 * @property
	 * @var \System\Int16
	 * @since readonly
	 */
	public $HighWatermark;
	private function GetInt16Value($shift){}
	private function SetInt16Value($value, $shift){}
	/**
	 * @return \System\Void|void
	 */
	public function IncrementCurrent(){}
	/**
	 * @return \System\Void|void
	 */
	public function DecrementCurrent(){}
	/**
	 * @return \System\Void|void
	 */
	public function ResetHighWatermark(){}
	/**
	 * @param \System\Threading\PortableThreadPool+CountsOfThreadsProcessingUserCallbacks $newCounts
	 * @param \System\Threading\PortableThreadPool+CountsOfThreadsProcessingUserCallbacks $oldCounts
	 * @return \System\Threading\PortableThreadPool+CountsOfThreadsProcessingUserCallbacks
	 */
	public function InterlockedCompareExchange($newCounts, $oldCounts){}
	/**
	 * @param \System\Threading\PortableThreadPool+CountsOfThreadsProcessingUserCallbacks $lhs
	 * @param \System\Threading\PortableThreadPool+CountsOfThreadsProcessingUserCallbacks $rhs
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($lhs, $rhs){}
}