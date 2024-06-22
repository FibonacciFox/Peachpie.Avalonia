<?php
namespace System;
final class GCMemoryInfo extends \System\ValueType
{

	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $HighMemoryLoadThresholdBytes;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $MemoryLoadBytes;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $TotalAvailableMemoryBytes;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $HeapSizeBytes;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $FragmentedBytes;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $Index;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Generation;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $Compacted;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $Concurrent;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $TotalCommittedBytes;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $PromotedBytes;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $PinnedObjectsCount;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $FinalizationPendingCount;
	/**
	 * @property
	 * @var \System\ReadOnlySpan_1[System\TimeSpan]
	 * @since readonly
	 */
	public $PauseDurations;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $PauseTimePercentage;
	/**
	 * @property
	 * @var \System\ReadOnlySpan_1[System\GCGenerationInfo]
	 * @since readonly
	 */
	public $GenerationInfo;

}