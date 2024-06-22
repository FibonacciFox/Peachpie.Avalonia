<?php
namespace System\Diagnostics\Tracing;
final class FrameworkEventSource extends \System\Diagnostics\Tracing\EventSource implements
	\System\IDisposable
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\Diagnostics\Tracing\FrameworkEventSource
	 */
	public static $Log;
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
	 * @param \System\Int64|int $workID
	 * @return \System\Void|void
	 */
	public function ThreadPoolEnqueueWork($workID){}
	/**
	 * @param \System\Object|object $workID
	 * @return \System\Void|void
	 */
	public function ThreadPoolEnqueueWorkObject($workID){}
	/**
	 * @param \System\Int64|int $workID
	 * @return \System\Void|void
	 */
	public function ThreadPoolDequeueWork($workID){}
	/**
	 * @param \System\Object|object $workID
	 * @return \System\Void|void
	 */
	public function ThreadPoolDequeueWorkObject($workID){}
	/**
	 * @param \System\Int64|int $id
	 * @param \System\Int32|int $kind
	 * @param \System\String|string $info
	 * @param \System\Boolean|bool $multiDequeues
	 * @param \System\Int32|int $intInfo1
	 * @param \System\Int32|int $intInfo2
	 * @return \System\Void|void
	 */
	public function ThreadTransferSend($id, $kind, $info, $multiDequeues, $intInfo1, $intInfo2){}
	/**
	 * @param \System\Object|object $id
	 * @param \System\Int32|int $kind
	 * @param \System\String|string $info
	 * @param \System\Boolean|bool $multiDequeues
	 * @param \System\Int32|int $intInfo1
	 * @param \System\Int32|int $intInfo2
	 * @return \System\Void|void
	 */
	public function ThreadTransferSendObj($id, $kind, $info, $multiDequeues, $intInfo1, $intInfo2){}
	/**
	 * @param \System\Int64|int $id
	 * @param \System\Int32|int $kind
	 * @param \System\String|string $info
	 * @return \System\Void|void
	 */
	public function ThreadTransferReceive($id, $kind, $info){}
	/**
	 * @param \System\Object|object $id
	 * @param \System\Int32|int $kind
	 * @param \System\String|string $info
	 * @return \System\Void|void
	 */
	public function ThreadTransferReceiveObj($id, $kind, $info){}
}