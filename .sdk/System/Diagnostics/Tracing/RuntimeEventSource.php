<?php
namespace System\Diagnostics\Tracing;
final class RuntimeEventSource extends \System\Diagnostics\Tracing\EventSource implements
	\System\IDisposable
{
	/**
	 * @field
	 * @var \System\String|string
	 */
	const EventSourceName = 'System.Runtime';
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
	 * @return \System\Void|void
	 */
	public static function Initialize(){}
	/**
	 * @param \System\String|string $switchName
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	protected function LogAppContextSwitch($switchName, $value){}
	/**
	 * @param \System\Int32|int $processorCount
	 * @return \System\Void|void
	 */
	protected function ProcessorCount($processorCount){}
}