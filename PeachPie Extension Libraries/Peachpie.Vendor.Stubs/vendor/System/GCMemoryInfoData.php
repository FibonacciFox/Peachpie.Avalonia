<?php
namespace System;
final class GCMemoryInfoData extends \System\Object
{
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	protected $_highMemoryLoadThresholdBytes;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	protected $_totalAvailableMemoryBytes;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	protected $_memoryLoadBytes;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	protected $_heapSizeBytes;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	protected $_fragmentedBytes;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	protected $_totalCommittedBytes;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	protected $_promotedBytes;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	protected $_pinnedObjectsCount;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	protected $_finalizationPendingCount;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	protected $_index;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_generation;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_pauseTimePercentage;
	/**
	 * @field
	 * @var \System\Byte
	 */
	protected $_compacted;
	/**
	 * @field
	 * @var \System\Byte
	 */
	protected $_concurrent;
	/**
	 */
	public function __construct(){}
}