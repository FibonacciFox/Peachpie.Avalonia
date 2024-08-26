<?php
namespace System\Threading;
final class LowLevelSpinWaiter extends \System\ValueType
{

	/**
	 * @param \System\Func_2 $condition [generic: System\Object,System\Boolean]
	 * @param \System\Object|object $state
	 * @param \System\Int32|int $spinCount
	 * @param \System\Int32|int $sleep0Threshold
	 * @return \System\Boolean|bool
	 */
	public function SpinWaitForCondition($condition, $state, $spinCount, $sleep0Threshold){}
	/**
	 * @param \System\Int32|int $spinIndex
	 * @param \System\Int32|int $sleep0Threshold
	 * @param \System\Int32|int $processorCount
	 * @return \System\Void|void
	 */
	public static function Wait($spinIndex, $sleep0Threshold, $processorCount){}
}