<?php
namespace System\Buffers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ArrayPoolEventSourceMethodsOverride
{
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
	#[MethodOverride] protected  function WriteEvent_1($eventId){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_2($eventId, $arg1){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_3($eventId, $arg1, $arg2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_4($eventId, $arg1, $arg2, $arg3){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_5($eventId, $arg1){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_6($eventId, $arg1, $arg2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_7($eventId, $arg1, $arg2, $arg3){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_8($eventId, $arg1){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_9($eventId, $arg1, $arg2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_10($eventId, $arg1, $arg2, $arg3){}
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
	#[MethodOverride] protected  function WriteEvent_14($eventId, $arg1, $arg2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_15($eventId, $arg1, $arg2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_16($eventId, $arg1){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_17($eventId, $arg1, $arg2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_18($eventId, $args){}
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
class ArrayPoolEventSource extends \System\Diagnostics\Tracing\EventSource implements 
	\System\IDisposable
{
	/**
	 * @var \System\Buffers\ArrayPoolEventSource
	 * @field
	 */
	protected readonly $Log;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $NoBucketId;
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
	 * @param \System\Int32|int $bufferId
	 * @param \System\Int32|int $bufferSize
	 * @param \System\Int32|int $poolId
	 * @param \System\Int32|int $bucketId
	 * @return \System\Void|void
	 */
	protected  function BufferRented($bufferId, $bufferSize, $poolId, $bucketId){}
	/**
	 * @param \System\Int32|int $bufferId
	 * @param \System\Int32|int $bufferSize
	 * @param \System\Int32|int $poolId
	 * @param \System\Int32|int $bucketId
	 * @param \System\Buffers\BufferAllocatedReason $reason
	 * @return \System\Void|void
	 */
	protected  function BufferAllocated($bufferId, $bufferSize, $poolId, $bucketId, $reason){}
	/**
	 * @param \System\Int32|int $bufferId
	 * @param \System\Int32|int $bufferSize
	 * @param \System\Int32|int $poolId
	 * @return \System\Void|void
	 */
	protected  function BufferReturned($bufferId, $bufferSize, $poolId){}
	/**
	 * @param \System\Int32|int $bufferId
	 * @param \System\Int32|int $bufferSize
	 * @param \System\Int32|int $poolId
	 * @return \System\Void|void
	 */
	protected  function BufferTrimmed($bufferId, $bufferSize, $poolId){}
	/**
	 * @param \System\Int32|int $milliseconds
	 * @param \System\Int32|int $pressure
	 * @return \System\Void|void
	 */
	protected  function BufferTrimPoll($milliseconds, $pressure){}
	/**
	 * @param \System\Int32|int $bufferId
	 * @param \System\Int32|int $bufferSize
	 * @param \System\Int32|int $poolId
	 * @param \System\Int32|int $bucketId
	 * @param \System\Buffers\BufferDroppedReason $reason
	 * @return \System\Void|void
	 */
	protected  function BufferDropped($bufferId, $bufferSize, $poolId, $bucketId, $reason){}
	/**
	 * @uses ArrayPoolEventSourceMethodsOverride::IsEnabled_1 ()
	 * @uses ArrayPoolEventSourceMethodsOverride::IsEnabled_2 ($level, $keywords)
	 * @uses ArrayPoolEventSourceMethodsOverride::IsEnabled_3 ($level, $keywords, $channel)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsEnabled(mixed ...$args){}
	/**
	 * @uses ArrayPoolEventSourceMethodsOverride::WriteEvent_1 ($eventId)
	 * @uses ArrayPoolEventSourceMethodsOverride::WriteEvent_2 ($eventId, $arg1)
	 * @uses ArrayPoolEventSourceMethodsOverride::WriteEvent_3 ($eventId, $arg1, $arg2)
	 * @uses ArrayPoolEventSourceMethodsOverride::WriteEvent_4 ($eventId, $arg1, $arg2, $arg3)
	 * @uses ArrayPoolEventSourceMethodsOverride::WriteEvent_5 ($eventId, $arg1)
	 * @uses ArrayPoolEventSourceMethodsOverride::WriteEvent_6 ($eventId, $arg1, $arg2)
	 * @uses ArrayPoolEventSourceMethodsOverride::WriteEvent_7 ($eventId, $arg1, $arg2, $arg3)
	 * @uses ArrayPoolEventSourceMethodsOverride::WriteEvent_8 ($eventId, $arg1)
	 * @uses ArrayPoolEventSourceMethodsOverride::WriteEvent_9 ($eventId, $arg1, $arg2)
	 * @uses ArrayPoolEventSourceMethodsOverride::WriteEvent_10 ($eventId, $arg1, $arg2, $arg3)
	 * @uses ArrayPoolEventSourceMethodsOverride::WriteEvent_11 ($eventId, $arg1, $arg2)
	 * @uses ArrayPoolEventSourceMethodsOverride::WriteEvent_12 ($eventId, $arg1, $arg2, $arg3)
	 * @uses ArrayPoolEventSourceMethodsOverride::WriteEvent_13 ($eventId, $arg1, $arg2)
	 * @uses ArrayPoolEventSourceMethodsOverride::WriteEvent_14 ($eventId, $arg1, $arg2)
	 * @uses ArrayPoolEventSourceMethodsOverride::WriteEvent_15 ($eventId, $arg1, $arg2)
	 * @uses ArrayPoolEventSourceMethodsOverride::WriteEvent_16 ($eventId, $arg1)
	 * @uses ArrayPoolEventSourceMethodsOverride::WriteEvent_17 ($eventId, $arg1, $arg2)
	 * @uses ArrayPoolEventSourceMethodsOverride::WriteEvent_18 ($eventId, $args)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteEvent(mixed ...$args){}
	/**
	 * @uses ArrayPoolEventSourceMethodsOverride::Dispose_1 ()
	 * @uses ArrayPoolEventSourceMethodsOverride::Dispose_2 ($disposing)
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
	 * @uses ArrayPoolEventSourceMethodsOverride::Write_1 ($eventName)
	 * @uses ArrayPoolEventSourceMethodsOverride::Write_2 ($eventName, $options)
	 * @uses ArrayPoolEventSourceMethodsOverride::Write_3 ($eventName, $data)
	 * @uses ArrayPoolEventSourceMethodsOverride::Write_4 ($eventName, $options, $data)
	 * @uses ArrayPoolEventSourceMethodsOverride::Write_5 ($eventName, $options, $data)
	 * @uses ArrayPoolEventSourceMethodsOverride::Write_6 ($eventName, $options, $activityId, $relatedActivityId, $data)
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
