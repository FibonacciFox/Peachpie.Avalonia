<?php
namespace System\Threading\Tasks;
/**
 */
class Segment extends \System\Object
{
	/**
	 * @var \System\Threading\Tasks\SingleProducerSingleConsumerQueue_1+Segment[T]
	 * @field
	 */
	protected $m_next;
	/**
	 * @var \T[]
	 * @field
	 */
	protected readonly $m_array;
	/**
	 * @var \System\Threading\Tasks\SingleProducerSingleConsumerQueue_1+SegmentState[T]
	 * @field
	 */
	protected $m_state;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
