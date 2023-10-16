<?php
namespace System\Threading\Tasks;
/**
 */
class SegmentState extends \System\ValueType
{
	/**
	 * @var \Internal\PaddingFor32
	 * @field
	 */
	protected $m_pad0;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $m_first;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $m_lastCopy;
	/**
	 * @var \Internal\PaddingFor32
	 * @field
	 */
	protected $m_pad1;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $m_firstCopy;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $m_last;
	/**
	 * @var \Internal\PaddingFor32
	 * @field
	 */
	protected $m_pad2;
}
