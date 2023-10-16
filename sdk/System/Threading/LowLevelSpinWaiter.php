<?php
namespace System\Threading;
/**
 */
class LowLevelSpinWaiter extends \System\ValueType
{
	/**
	 * @param \System\Func_2 $condition
	 * @param \System\Object|object $state
	 * @param \System\Int32|int $spinCount
	 * @param \System\Int32|int $sleep0Threshold
	 * @return \System\Boolean
	 */
	public  function SpinWaitForCondition($condition, $state, $spinCount, $sleep0Threshold){}
	/**
	 * @param \System\Int32|int $spinIndex
	 * @param \System\Int32|int $sleep0Threshold
	 * @param \System\Int32|int $processorCount
	 * @return \System\Void|void
	 */
	public static function Wait($spinIndex, $sleep0Threshold, $processorCount){}
}
