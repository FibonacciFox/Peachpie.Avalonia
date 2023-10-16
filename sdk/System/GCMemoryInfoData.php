<?php
namespace System;
/**
 */
class GCMemoryInfoData extends \System\Object
{
	/**
	 * @var \System\Int64
	 * @field
	 */
	protected $_highMemoryLoadThresholdBytes;
	/**
	 * @var \System\Int64
	 * @field
	 */
	protected $_totalAvailableMemoryBytes;
	/**
	 * @var \System\Int64
	 * @field
	 */
	protected $_memoryLoadBytes;
	/**
	 * @var \System\Int64
	 * @field
	 */
	protected $_heapSizeBytes;
	/**
	 * @var \System\Int64
	 * @field
	 */
	protected $_fragmentedBytes;
	/**
	 * @var \System\Int64
	 * @field
	 */
	protected $_totalCommittedBytes;
	/**
	 * @var \System\Int64
	 * @field
	 */
	protected $_promotedBytes;
	/**
	 * @var \System\Int64
	 * @field
	 */
	protected $_pinnedObjectsCount;
	/**
	 * @var \System\Int64
	 * @field
	 */
	protected $_finalizationPendingCount;
	/**
	 * @var \System\Int64
	 * @field
	 */
	protected $_index;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_generation;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_pauseTimePercentage;
	/**
	 * @var \System\Byte
	 * @field
	 */
	protected $_compacted;
	/**
	 * @var \System\Byte
	 * @field
	 */
	protected $_concurrent;
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	protected  function get_GenerationInfoAsSpan(){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	protected  function get_PauseDurationsAsSpan(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
