<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FrameworkEventSourceMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function WriteEvent_1($eventId, $arg1, $arg2, $arg3, $arg4, $arg5, $arg6){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function WriteEvent_2($eventId, $arg1, $arg2, $arg3){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_3($eventId){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_4($eventId, $arg1){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_5($eventId, $arg1, $arg2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_6($eventId, $arg1, $arg2, $arg3){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_7($eventId, $arg1){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_8($eventId, $arg1, $arg2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_9($eventId, $arg1, $arg2, $arg3){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_10($eventId, $arg1){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_11($eventId, $arg1, $arg2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_12($eventId, $arg1, $arg2, $arg3){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_13($eventId, $arg1, $arg2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_14($eventId, $arg1, $arg2, $arg3){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_15($eventId, $arg1, $arg2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_16($eventId, $arg1, $arg2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_17($eventId, $arg1, $arg2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_18($eventId, $arg1){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_19($eventId, $arg1, $arg2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_20($eventId, $args){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsEnabled_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsEnabled_2($level, $keywords){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsEnabled_3($level, $keywords, $channel){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_2($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_1($eventName){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_2($eventName, $options){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_3($eventName, $data){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_4($eventName, $options, $data){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_5($eventName, $options, $data){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_6($eventName, $options, $activityId, $relatedActivityId, $data){}
}
/**
 */
class FrameworkEventSource extends \System\Diagnostics\Tracing\EventSource implements 
	\System\IDisposable
{
	/**
	 * @var \System\Diagnostics\Tracing\FrameworkEventSource
	 * @field
	 */
	public readonly $Log;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $m_id;
	/**
	 * @var \System\Diagnostics\Tracing\EventSource+EventMetadata[]
	 * @field
	 */
	protected $m_eventData;
	/**
	 * @var \System\Diagnostics\Tracing\EventLevel
	 * @field
	 */
	protected $m_level;
	/**
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 * @field
	 */
	protected $m_matchAnyKeyword;
	/**
	 * @var \System\Diagnostics\Tracing\EventDispatcher
	 * @field
	 */
	protected $m_Dispatchers;
	/**
	 * @var \System\UInt64[]
	 * @field
	 */
	protected $m_channelData;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Guid
	 * @property
	 */
	public readonly $Guid;
	/**
	 * @var \System\Diagnostics\Tracing\EventSourceSettings
	 * @property
	 */
	public readonly $Settings;
	/**
	 * @var \System\Exception
	 * @property
	 */
	public readonly $ConstructionException;
	/**
	 * @uses FrameworkEventSourceMethodsOverride::WriteEvent_1 ($eventId, $arg1, $arg2, $arg3, $arg4, $arg5, $arg6)
	 * @uses FrameworkEventSourceMethodsOverride::WriteEvent_2 ($eventId, $arg1, $arg2, $arg3)
	 * @uses FrameworkEventSourceMethodsOverride::WriteEvent_3 ($eventId)
	 * @uses FrameworkEventSourceMethodsOverride::WriteEvent_4 ($eventId, $arg1)
	 * @uses FrameworkEventSourceMethodsOverride::WriteEvent_5 ($eventId, $arg1, $arg2)
	 * @uses FrameworkEventSourceMethodsOverride::WriteEvent_6 ($eventId, $arg1, $arg2, $arg3)
	 * @uses FrameworkEventSourceMethodsOverride::WriteEvent_7 ($eventId, $arg1)
	 * @uses FrameworkEventSourceMethodsOverride::WriteEvent_8 ($eventId, $arg1, $arg2)
	 * @uses FrameworkEventSourceMethodsOverride::WriteEvent_9 ($eventId, $arg1, $arg2, $arg3)
	 * @uses FrameworkEventSourceMethodsOverride::WriteEvent_10 ($eventId, $arg1)
	 * @uses FrameworkEventSourceMethodsOverride::WriteEvent_11 ($eventId, $arg1, $arg2)
	 * @uses FrameworkEventSourceMethodsOverride::WriteEvent_12 ($eventId, $arg1, $arg2, $arg3)
	 * @uses FrameworkEventSourceMethodsOverride::WriteEvent_13 ($eventId, $arg1, $arg2)
	 * @uses FrameworkEventSourceMethodsOverride::WriteEvent_14 ($eventId, $arg1, $arg2, $arg3)
	 * @uses FrameworkEventSourceMethodsOverride::WriteEvent_15 ($eventId, $arg1, $arg2)
	 * @uses FrameworkEventSourceMethodsOverride::WriteEvent_16 ($eventId, $arg1, $arg2)
	 * @uses FrameworkEventSourceMethodsOverride::WriteEvent_17 ($eventId, $arg1, $arg2)
	 * @uses FrameworkEventSourceMethodsOverride::WriteEvent_18 ($eventId, $arg1)
	 * @uses FrameworkEventSourceMethodsOverride::WriteEvent_19 ($eventId, $arg1, $arg2)
	 * @uses FrameworkEventSourceMethodsOverride::WriteEvent_20 ($eventId, $args)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteEvent(mixed ...$args){}
	/**
	 * @param \System\Int64|int $workID
	 * @return \System\Void|void
	 */
	public  function ThreadPoolEnqueueWork($workID){}
	/**
	 * @param \System\Object|object $workID
	 * @return \System\Void|void
	 */
	public  function ThreadPoolEnqueueWorkObject($workID){}
	/**
	 * @param \System\Int64|int $workID
	 * @return \System\Void|void
	 */
	public  function ThreadPoolDequeueWork($workID){}
	/**
	 * @param \System\Object|object $workID
	 * @return \System\Void|void
	 */
	public  function ThreadPoolDequeueWorkObject($workID){}
	/**
	 * @param \System\Int64|int $id
	 * @param \System\Int32|int $kind
	 * @param \System\String|string $info
	 * @param \System\Boolean $multiDequeues
	 * @param \System\Int32|int $intInfo1
	 * @param \System\Int32|int $intInfo2
	 * @return \System\Void|void
	 */
	public  function ThreadTransferSend($id, $kind, $info, $multiDequeues, $intInfo1, $intInfo2){}
	/**
	 * @param \System\Object|object $id
	 * @param \System\Int32|int $kind
	 * @param \System\String|string $info
	 * @param \System\Boolean $multiDequeues
	 * @param \System\Int32|int $intInfo1
	 * @param \System\Int32|int $intInfo2
	 * @return \System\Void|void
	 */
	public  function ThreadTransferSendObj($id, $kind, $info, $multiDequeues, $intInfo1, $intInfo2){}
	/**
	 * @param \System\Int64|int $id
	 * @param \System\Int32|int $kind
	 * @param \System\String|string $info
	 * @return \System\Void|void
	 */
	public  function ThreadTransferReceive($id, $kind, $info){}
	/**
	 * @param \System\Object|object $id
	 * @param \System\Int32|int $kind
	 * @param \System\String|string $info
	 * @return \System\Void|void
	 */
	public  function ThreadTransferReceiveObj($id, $kind, $info){}
	/**
	 * @uses FrameworkEventSourceMethodsOverride::IsEnabled_1 ()
	 * @uses FrameworkEventSourceMethodsOverride::IsEnabled_2 ($level, $keywords)
	 * @uses FrameworkEventSourceMethodsOverride::IsEnabled_3 ($level, $keywords, $channel)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsEnabled(mixed ...$args){}
	/**
	 * @uses FrameworkEventSourceMethodsOverride::Dispose_1 ()
	 * @uses FrameworkEventSourceMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @param \System\Diagnostics\Tracing\EventListener $listener
	 * @param \System\Diagnostics\Tracing\EventProviderType $eventProviderType
	 * @param \System\Int32|int $perEventSourceSessionId
	 * @param \System\Int32|int $etwSessionId
	 * @param \System\Diagnostics\Tracing\EventCommand $command
	 * @param \System\Boolean $enable
	 * @param \System\Diagnostics\Tracing\EventLevel $level
	 * @param \System\Diagnostics\Tracing\EventKeywords $matchAnyKeyword
	 * @param \System\Collections\Generic\IDictionary_2 $commandArguments
	 * @return \System\Void|void
	 */
	protected  function SendCommand($listener, $eventProviderType, $perEventSourceSessionId, $etwSessionId, $command, $enable, $level, $matchAnyKeyword, $commandArguments){}
	/**
	 * @uses FrameworkEventSourceMethodsOverride::Write_1 ($eventName)
	 * @uses FrameworkEventSourceMethodsOverride::Write_2 ($eventName, $options)
	 * @uses FrameworkEventSourceMethodsOverride::Write_3 ($eventName, $data)
	 * @uses FrameworkEventSourceMethodsOverride::Write_4 ($eventName, $options, $data)
	 * @uses FrameworkEventSourceMethodsOverride::Write_5 ($eventName, $options, $data)
	 * @uses FrameworkEventSourceMethodsOverride::Write_6 ($eventName, $options, $activityId, $relatedActivityId, $data)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Write(mixed ...$args){}
	/**
	 * @param \System\String|string $eventName
	 * @param \System\Diagnostics\Tracing\EventSourceOptions& $options
	 * @param \System\Diagnostics\Tracing\TraceLoggingEventTypes $eventTypes
	 * @param \System\Guid* $activityID
	 * @param \System\Guid* $childActivityID
	 * @param \System\Diagnostics\Tracing\EventData* $data
	 * @return \System\Void|void
	 */
	protected  function WriteMultiMerge($eventName, $options, $eventTypes, $activityID, $childActivityID, $data){}
}
