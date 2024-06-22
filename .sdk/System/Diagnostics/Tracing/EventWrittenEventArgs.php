<?php
namespace System\Diagnostics\Tracing;
class EventWrittenEventArgs extends \System\EventArgs
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\Collections\ObjectModel\ReadOnlyCollection_1[System\Object]
	 */
	protected static $EmptyPayload;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $EventName;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $EventId;
	/**
	 * @property
	 * @var \System\Guid
	 * @since readonly
	 */
	public $ActivityId;
	/**
	 * @property
	 * @var \System\Guid
	 * @since readonly
	 */
	public $RelatedActivityId;
	/**
	 * @property
	 * @var \System\Collections\ObjectModel\ReadOnlyCollection_1[System\Object]
	 */
	public $Payload;
	/**
	 * @property
	 * @var \System\Collections\ObjectModel\ReadOnlyCollection_1[System\String]
	 */
	public $PayloadNames;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventSource
	 * @since readonly
	 */
	public $EventSource;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 */
	public $Keywords;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventOpcode
	 */
	public $Opcode;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventTask
	 * @since readonly
	 */
	public $Task;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventTags
	 */
	public $Tags;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Message;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventChannel
	 * @since readonly
	 */
	public $Channel;
	/**
	 * @property
	 * @var \System\Byte
	 * @since readonly
	 */
	public $Version;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventLevel
	 */
	public $Level;
	/**
	 * @property
	 * @var \System\Int64|int
	 */
	public $OSThreadId;
	/**
	 * @property
	 * @var \System\DateTime
	 */
	public $TimeStamp;

}