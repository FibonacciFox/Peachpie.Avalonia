<?php
namespace System\Threading\Tasks;
final class SegmentState extends \System\ValueType
{
	/**
	 * @field
	 * @var \Internal\PaddingFor32
	 */
	protected $m_pad0;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_first;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_lastCopy;
	/**
	 * @field
	 * @var \Internal\PaddingFor32
	 */
	protected $m_pad1;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_firstCopy;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_last;
	/**
	 * @field
	 * @var \Internal\PaddingFor32
	 */
	protected $m_pad2;

}