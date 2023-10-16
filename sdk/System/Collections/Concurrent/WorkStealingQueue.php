<?php
namespace System\Collections\Concurrent;
/**
 */
class WorkStealingQueue extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_currentOp;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $_frozen;
	/**
	 * @var \System\Collections\Concurrent\ConcurrentBag_1+WorkStealingQueue[T]
	 * @field
	 */
	protected readonly $_nextQueue;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected readonly $_ownerThreadId;
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsEmpty(){}
	/**
	 * @param \System\Collections\Concurrent\T $item
	 * @param \System\Int64& $emptyToNonEmptyListTransitionCount
	 * @return \System\Void|void
	 */
	protected  function LocalPush($item, $emptyToNonEmptyListTransitionCount){}
	/**
	 * @return \System\Void|void
	 */
	protected  function LocalClear(){}
	/**
	 * @param \System\Collections\Concurrent\T& $result
	 * @return \System\Boolean
	 */
	protected  function TryLocalPop($result){}
	/**
	 * @param \System\Collections\Concurrent\T& $result
	 * @return \System\Boolean
	 */
	protected  function TryLocalPeek($result){}
	/**
	 * @param \System\Collections\Concurrent\T& $result
	 * @param \System\Boolean $take
	 * @return \System\Boolean
	 */
	protected  function TrySteal($result, $take){}
	/**
	 * @param \System\Collections\Concurrent\T[] $array
	 * @param \System\Int32|int $arrayIndex
	 * @return \System\Int32|int
	 */
	protected  function DangerousCopyTo($array, $arrayIndex){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_DangerousCount(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
