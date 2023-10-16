<?php
namespace System\Collections\Concurrent;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CDSCollectionETWBCLProviderMethodsOverride
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
class CDSCollectionETWBCLProvider extends \System\Diagnostics\Tracing\EventSource implements 
	\System\IDisposable
{
	/**
	 * @var \System\Collections\Concurrent\CDSCollectionETWBCLProvider
	 * @field
	 */
	public $Log;
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
	 * @param \System\Int32|int $spinCount
	 * @return \System\Void|void
	 */
	public  function ConcurrentStack_FastPushFailed($spinCount){}
	/**
	 * @param \System\Int32|int $spinCount
	 * @return \System\Void|void
	 */
	public  function ConcurrentStack_FastPopFailed($spinCount){}
	/**
	 * @param \System\Int32|int $numOfBuckets
	 * @return \System\Void|void
	 */
	public  function ConcurrentDictionary_AcquiringAllLocks($numOfBuckets){}
	/**
	 * @return \System\Void|void
	 */
	public  function ConcurrentBag_TryTakeSteals(){}
	/**
	 * @return \System\Void|void
	 */
	public  function ConcurrentBag_TryPeekSteals(){}
	/**
	 * @uses CDSCollectionETWBCLProviderMethodsOverride::IsEnabled_1 ()
	 * @uses CDSCollectionETWBCLProviderMethodsOverride::IsEnabled_2 ($level, $keywords)
	 * @uses CDSCollectionETWBCLProviderMethodsOverride::IsEnabled_3 ($level, $keywords, $channel)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsEnabled(mixed ...$args){}
	/**
	 * @uses CDSCollectionETWBCLProviderMethodsOverride::WriteEvent_1 ($eventId)
	 * @uses CDSCollectionETWBCLProviderMethodsOverride::WriteEvent_2 ($eventId, $arg1)
	 * @uses CDSCollectionETWBCLProviderMethodsOverride::WriteEvent_3 ($eventId, $arg1, $arg2)
	 * @uses CDSCollectionETWBCLProviderMethodsOverride::WriteEvent_4 ($eventId, $arg1, $arg2, $arg3)
	 * @uses CDSCollectionETWBCLProviderMethodsOverride::WriteEvent_5 ($eventId, $arg1)
	 * @uses CDSCollectionETWBCLProviderMethodsOverride::WriteEvent_6 ($eventId, $arg1, $arg2)
	 * @uses CDSCollectionETWBCLProviderMethodsOverride::WriteEvent_7 ($eventId, $arg1, $arg2, $arg3)
	 * @uses CDSCollectionETWBCLProviderMethodsOverride::WriteEvent_8 ($eventId, $arg1)
	 * @uses CDSCollectionETWBCLProviderMethodsOverride::WriteEvent_9 ($eventId, $arg1, $arg2)
	 * @uses CDSCollectionETWBCLProviderMethodsOverride::WriteEvent_10 ($eventId, $arg1, $arg2, $arg3)
	 * @uses CDSCollectionETWBCLProviderMethodsOverride::WriteEvent_11 ($eventId, $arg1, $arg2)
	 * @uses CDSCollectionETWBCLProviderMethodsOverride::WriteEvent_12 ($eventId, $arg1, $arg2, $arg3)
	 * @uses CDSCollectionETWBCLProviderMethodsOverride::WriteEvent_13 ($eventId, $arg1, $arg2)
	 * @uses CDSCollectionETWBCLProviderMethodsOverride::WriteEvent_14 ($eventId, $arg1, $arg2)
	 * @uses CDSCollectionETWBCLProviderMethodsOverride::WriteEvent_15 ($eventId, $arg1, $arg2)
	 * @uses CDSCollectionETWBCLProviderMethodsOverride::WriteEvent_16 ($eventId, $arg1)
	 * @uses CDSCollectionETWBCLProviderMethodsOverride::WriteEvent_17 ($eventId, $arg1, $arg2)
	 * @uses CDSCollectionETWBCLProviderMethodsOverride::WriteEvent_18 ($eventId, $args)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteEvent(mixed ...$args){}
	/**
	 * @uses CDSCollectionETWBCLProviderMethodsOverride::Dispose_1 ()
	 * @uses CDSCollectionETWBCLProviderMethodsOverride::Dispose_2 ($disposing)
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
	 * @uses CDSCollectionETWBCLProviderMethodsOverride::Write_1 ($eventName)
	 * @uses CDSCollectionETWBCLProviderMethodsOverride::Write_2 ($eventName, $options)
	 * @uses CDSCollectionETWBCLProviderMethodsOverride::Write_3 ($eventName, $data)
	 * @uses CDSCollectionETWBCLProviderMethodsOverride::Write_4 ($eventName, $options, $data)
	 * @uses CDSCollectionETWBCLProviderMethodsOverride::Write_5 ($eventName, $options, $data)
	 * @uses CDSCollectionETWBCLProviderMethodsOverride::Write_6 ($eventName, $options, $activityId, $relatedActivityId, $data)
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
