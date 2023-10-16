<?php
namespace System;
/**
 */
class GCMemoryInfo extends \System\ValueType
{
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $HighMemoryLoadThresholdBytes;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $MemoryLoadBytes;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $TotalAvailableMemoryBytes;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $HeapSizeBytes;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $FragmentedBytes;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $Index;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Generation;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $Compacted;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $Concurrent;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $TotalCommittedBytes;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $PromotedBytes;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $PinnedObjectsCount;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $FinalizationPendingCount;
	/**
	 * @var \System\ReadOnlySpan_1[System\TimeSpan]
	 * @property
	 */
	public readonly $PauseDurations;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $PauseTimePercentage;
	/**
	 * @var \System\ReadOnlySpan_1[System\GCGenerationInfo]
	 * @property
	 */
	public readonly $GenerationInfo;
	/**
	 * @return \System\Int64|int
	 */
	public  function get_HighMemoryLoadThresholdBytes(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_MemoryLoadBytes(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_TotalAvailableMemoryBytes(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_HeapSizeBytes(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_FragmentedBytes(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_Index(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Generation(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Compacted(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Concurrent(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_TotalCommittedBytes(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_PromotedBytes(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_PinnedObjectsCount(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_FinalizationPendingCount(){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	public  function get_PauseDurations(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_PauseTimePercentage(){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	public  function get_GenerationInfo(){}
}
