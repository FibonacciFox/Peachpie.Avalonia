<?php
namespace System\Collections\Concurrent;
final class ConcurrentQueueSegment_1 extends \System\Object
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\Collections\Concurrent\ConcurrentQueueSegment_1+Slot[T][]
	 */
	protected $_slots;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	protected $_slotsMask;
	/**
	 * @field
	 * @var \System\Collections\Concurrent\PaddedHeadAndTail
	 */
	protected $_headAndTail;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $_preservedForObservation;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $_frozenForEnqueues;
	/**
	 * @field
	 * @var \System\Collections\Concurrent\ConcurrentQueueSegment_1[T]
	 */
	protected $_nextSegment;
	/**
	 * @return \System\Void|void
	 */
	protected function EnsureFrozenForEnqueues(){}
	/**
	 * @param \T& &$item
	 * @return \System\Boolean|bool
	 */
	public function TryDequeue(&$item){}
	/**
	 * @param \T& &$result
	 * @param \System\Boolean|bool $resultUsed
	 * @return \System\Boolean|bool
	 */
	public function TryPeek(&$result, $resultUsed){}
	/**
	 * @param \T|object $item
	 * @return \System\Boolean|bool
	 */
	public function TryEnqueue($item){}
}