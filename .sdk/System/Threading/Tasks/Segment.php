<?php
namespace System\Threading\Tasks;
final class Segment extends \System\Object
{

	/**
	 * @field
	 * @var \System\Threading\Tasks\SingleProducerSingleConsumerQueue_1+Segment[T]
	 */
	protected $m_next;
	/**
	 * @field
	 * @since readonly
	 * @var \T[]
	 */
	protected $m_array;
	/**
	 * @field
	 * @var \System\Threading\Tasks\SingleProducerSingleConsumerQueue_1+SegmentState[T]
	 */
	protected $m_state;

}