<?php
namespace System\Collections\Concurrent;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ConcurrentQueueSegment_1 extends \System\Object
{
	/**
	 * @var \System\Collections\Concurrent\ConcurrentQueueSegment_1+Slot[T][]
	 * @field
	 */
	protected readonly $_slots;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected readonly $_slotsMask;
	/**
	 * @var \System\Collections\Concurrent\PaddedHeadAndTail
	 * @field
	 */
	protected $_headAndTail;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $_preservedForObservation;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $_frozenForEnqueues;
	/**
	 * @var \System\Collections\Concurrent\ConcurrentQueueSegment_1[T]
	 * @field
	 */
	protected $_nextSegment;
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_Capacity(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_FreezeOffset(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function EnsureFrozenForEnqueues(){}
	/**
	 * @param \System\Collections\Concurrent\T& $item
	 * @return \System\Boolean
	 */
	public  function TryDequeue($item){}
	/**
	 * @param \System\Collections\Concurrent\T& $result
	 * @param \System\Boolean $resultUsed
	 * @return \System\Boolean
	 */
	public  function TryPeek($result, $resultUsed){}
	/**
	 * @param \System\Collections\Concurrent\T $item
	 * @return \System\Boolean
	 */
	public  function TryEnqueue($item){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
