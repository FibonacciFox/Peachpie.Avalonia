<?php
namespace System\Buffers;
final class ArrayPoolEventSource extends \System\Diagnostics\Tracing\EventSource implements
	\System\IDisposable
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\Buffers\ArrayPoolEventSource
	 */
	protected static $Log;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const NoBucketId = '-1';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_id;
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventSource+EventMetadata[]
	 */
	protected $m_eventData;
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventLevel
	 */
	protected $m_level;
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 */
	protected $m_matchAnyKeyword;
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventDispatcher
	 */
	protected $m_Dispatchers;
	/**
	 * @field
	 * @var \System\UInt64[]
	 */
	protected $m_channelData;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Guid
	 * @since readonly
	 */
	public $Guid;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventSourceSettings
	 * @since readonly
	 */
	public $Settings;
	/**
	 * @property
	 * @var \System\Exception
	 * @since readonly
	 */
	public $ConstructionException;
	/**
	 * @param \System\Int32|int $bufferId
	 * @param \System\Int32|int $bufferSize
	 * @param \System\Int32|int $poolId
	 * @param \System\Int32|int $bucketId
	 * @return \System\Void|void
	 */
	protected function BufferRented($bufferId, $bufferSize, $poolId, $bucketId){}
	/**
	 * @param \System\Int32|int $bufferId
	 * @param \System\Int32|int $bufferSize
	 * @param \System\Int32|int $poolId
	 * @param \System\Int32|int $bucketId
	 * @param \System\Buffers\ArrayPoolEventSource+BufferAllocatedReason $reason
	 * @return \System\Void|void
	 */
	protected function BufferAllocated($bufferId, $bufferSize, $poolId, $bucketId, $reason){}
	/**
	 * @param \System\Int32|int $bufferId
	 * @param \System\Int32|int $bufferSize
	 * @param \System\Int32|int $poolId
	 * @return \System\Void|void
	 */
	protected function BufferReturned($bufferId, $bufferSize, $poolId){}
	/**
	 * @param \System\Int32|int $bufferId
	 * @param \System\Int32|int $bufferSize
	 * @param \System\Int32|int $poolId
	 * @return \System\Void|void
	 */
	protected function BufferTrimmed($bufferId, $bufferSize, $poolId){}
	/**
	 * @param \System\Int32|int $milliseconds
	 * @param \System\Int32|int $pressure
	 * @return \System\Void|void
	 */
	protected function BufferTrimPoll($milliseconds, $pressure){}
	/**
	 * @param \System\Int32|int $bufferId
	 * @param \System\Int32|int $bufferSize
	 * @param \System\Int32|int $poolId
	 * @param \System\Int32|int $bucketId
	 * @param \System\Buffers\ArrayPoolEventSource+BufferDroppedReason $reason
	 * @return \System\Void|void
	 */
	protected function BufferDropped($bufferId, $bufferSize, $poolId, $bucketId, $reason){}
}