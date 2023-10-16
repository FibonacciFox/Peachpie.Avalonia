<?php
namespace System\Diagnostics\Tracing;
/**
 */
class EventWrittenEventArgs extends \System\EventArgs
{
	/**
	 * @var \System\Collections\ObjectModel\ReadOnlyCollection_1[System\Object]
	 * @field
	 */
	protected readonly $EmptyPayload;
	/**
	 * @var \System\String
	 * @property
	 */
	public $EventName;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $EventId;
	/**
	 * @var \System\Guid
	 * @property
	 */
	public readonly $ActivityId;
	/**
	 * @var \System\Guid
	 * @property
	 */
	public readonly $RelatedActivityId;
	/**
	 * @var \System\Collections\ObjectModel\ReadOnlyCollection_1[System\Object]
	 * @property
	 */
	public $Payload;
	/**
	 * @var \System\Collections\ObjectModel\ReadOnlyCollection_1[System\String]
	 * @property
	 */
	public $PayloadNames;
	/**
	 * @var \System\Diagnostics\Tracing\EventSource
	 * @property
	 */
	public readonly $EventSource;
	/**
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 * @property
	 */
	public $Keywords;
	/**
	 * @var \System\Diagnostics\Tracing\EventOpcode
	 * @property
	 */
	public $Opcode;
	/**
	 * @var \System\Diagnostics\Tracing\EventTask
	 * @property
	 */
	public readonly $Task;
	/**
	 * @var \System\Diagnostics\Tracing\EventTags
	 * @property
	 */
	public $Tags;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Message;
	/**
	 * @var \System\Diagnostics\Tracing\EventChannel
	 * @property
	 */
	public readonly $Channel;
	/**
	 * @var \System\Byte
	 * @property
	 */
	public readonly $Version;
	/**
	 * @var \System\Diagnostics\Tracing\EventLevel
	 * @property
	 */
	public $Level;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public $OSThreadId;
	/**
	 * @var \System\DateTime
	 * @property
	 */
	public $TimeStamp;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Metadata(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_EventName(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	protected  function set_EventName($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_EventId(){}
	/**
	 * @return \System\Guid
	 */
	public  function get_ActivityId(){}
	/**
	 * @return \System\Guid
	 */
	public  function get_RelatedActivityId(){}
	/**
	 * @return \System\Collections\ObjectModel\ReadOnlyCollection_1
	 */
	public  function get_Payload(){}
	/**
	 * @param \System\Collections\ObjectModel\ReadOnlyCollection_1 $value
	 * @return \System\Void|void
	 */
	protected  function set_Payload($value){}
	/**
	 * @return \System\Collections\ObjectModel\ReadOnlyCollection_1
	 */
	public  function get_PayloadNames(){}
	/**
	 * @param \System\Collections\ObjectModel\ReadOnlyCollection_1 $value
	 * @return \System\Void|void
	 */
	protected  function set_PayloadNames($value){}
	/**
	 * @return \System\Diagnostics\Tracing\EventSource
	 */
	public  function get_EventSource(){}
	/**
	 * @return \System\Diagnostics\Tracing\EventKeywords
	 */
	public  function get_Keywords(){}
	/**
	 * @param \System\Diagnostics\Tracing\EventKeywords $value
	 * @return \System\Void|void
	 */
	protected  function set_Keywords($value){}
	/**
	 * @return \System\Diagnostics\Tracing\EventOpcode
	 */
	public  function get_Opcode(){}
	/**
	 * @param \System\Diagnostics\Tracing\EventOpcode $value
	 * @return \System\Void|void
	 */
	protected  function set_Opcode($value){}
	/**
	 * @return \System\Diagnostics\Tracing\EventTask
	 */
	public  function get_Task(){}
	/**
	 * @return \System\Diagnostics\Tracing\EventTags
	 */
	public  function get_Tags(){}
	/**
	 * @param \System\Diagnostics\Tracing\EventTags $value
	 * @return \System\Void|void
	 */
	protected  function set_Tags($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Message(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	protected  function set_Message($value){}
	/**
	 * @return \System\Diagnostics\Tracing\EventChannel
	 */
	public  function get_Channel(){}
	/**
	 * @return \System\Byte
	 */
	public  function get_Version(){}
	/**
	 * @return \System\Diagnostics\Tracing\EventLevel
	 */
	public  function get_Level(){}
	/**
	 * @param \System\Diagnostics\Tracing\EventLevel $value
	 * @return \System\Void|void
	 */
	protected  function set_Level($value){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_OSThreadId(){}
	/**
	 * @param \System\Int64|int $value
	 * @return \System\Void|void
	 */
	protected  function set_OSThreadId($value){}
	/**
	 * @return \System\DateTime
	 */
	public  function get_TimeStamp(){}
	/**
	 * @param \System\DateTime $value
	 * @return \System\Void|void
	 */
	protected  function set_TimeStamp($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_MoreInfo(){}
}
