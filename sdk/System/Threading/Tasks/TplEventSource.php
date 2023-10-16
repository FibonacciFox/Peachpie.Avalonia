<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TplEventSourceMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RunningContinuation_1($TaskID, $Object){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function RunningContinuation_2($TaskID, $Object){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RunningContinuationList_1($TaskID, $Index, $Object){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RunningContinuationList_2($TaskID, $Index, $Object){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function IncompleteAsyncMethod_1($stateMachineBox){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function IncompleteAsyncMethod_2($stateMachineDescription){}
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
class TplEventSource extends \System\Diagnostics\Tracing\EventSource implements 
	\System\IDisposable
{
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $TasksSetActivityIds;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $Debug;
	/**
	 * @var \System\Threading\Tasks\TplEventSource
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
	 * @param \System\Int32|int $OriginatingTaskSchedulerID
	 * @param \System\Int32|int $OriginatingTaskID
	 * @param \System\Int32|int $TaskID
	 * @param \System\Int32|int $CreatingTaskID
	 * @param \System\Int32|int $TaskCreationOptions
	 * @param \System\Int32|int $appDomain
	 * @return \System\Void|void
	 */
	public  function TaskScheduled($OriginatingTaskSchedulerID, $OriginatingTaskID, $TaskID, $CreatingTaskID, $TaskCreationOptions, $appDomain){}
	/**
	 * @param \System\Int32|int $OriginatingTaskSchedulerID
	 * @param \System\Int32|int $OriginatingTaskID
	 * @param \System\Int32|int $TaskID
	 * @return \System\Void|void
	 */
	public  function TaskStarted($OriginatingTaskSchedulerID, $OriginatingTaskID, $TaskID){}
	/**
	 * @param \System\Int32|int $OriginatingTaskSchedulerID
	 * @param \System\Int32|int $OriginatingTaskID
	 * @param \System\Int32|int $TaskID
	 * @param \System\Boolean $IsExceptional
	 * @return \System\Void|void
	 */
	public  function TaskCompleted($OriginatingTaskSchedulerID, $OriginatingTaskID, $TaskID, $IsExceptional){}
	/**
	 * @param \System\Int32|int $OriginatingTaskSchedulerID
	 * @param \System\Int32|int $OriginatingTaskID
	 * @param \System\Int32|int $TaskID
	 * @param \System\Threading\Tasks\TaskWaitBehavior $Behavior
	 * @param \System\Int32|int $ContinueWithTaskID
	 * @return \System\Void|void
	 */
	public  function TaskWaitBegin($OriginatingTaskSchedulerID, $OriginatingTaskID, $TaskID, $Behavior, $ContinueWithTaskID){}
	/**
	 * @param \System\Int32|int $OriginatingTaskSchedulerID
	 * @param \System\Int32|int $OriginatingTaskID
	 * @param \System\Int32|int $TaskID
	 * @return \System\Void|void
	 */
	public  function TaskWaitEnd($OriginatingTaskSchedulerID, $OriginatingTaskID, $TaskID){}
	/**
	 * @param \System\Int32|int $TaskID
	 * @return \System\Void|void
	 */
	public  function TaskWaitContinuationComplete($TaskID){}
	/**
	 * @param \System\Int32|int $TaskID
	 * @return \System\Void|void
	 */
	public  function TaskWaitContinuationStarted($TaskID){}
	/**
	 * @param \System\Int32|int $OriginatingTaskSchedulerID
	 * @param \System\Int32|int $OriginatingTaskID
	 * @param \System\Int32|int $ContinueWithTaskId
	 * @return \System\Void|void
	 */
	public  function AwaitTaskContinuationScheduled($OriginatingTaskSchedulerID, $OriginatingTaskID, $ContinueWithTaskId){}
	/**
	 * @param \System\Int32|int $TaskID
	 * @param \System\String|string $OperationName
	 * @param \System\Int64|int $RelatedContext
	 * @return \System\Void|void
	 */
	public  function TraceOperationBegin($TaskID, $OperationName, $RelatedContext){}
	/**
	 * @param \System\Int32|int $TaskID
	 * @param \System\Threading\Tasks\CausalityRelation $Relation
	 * @return \System\Void|void
	 */
	public  function TraceOperationRelation($TaskID, $Relation){}
	/**
	 * @param \System\Int32|int $TaskID
	 * @param \System\Threading\Tasks\AsyncCausalityStatus $Status
	 * @return \System\Void|void
	 */
	public  function TraceOperationEnd($TaskID, $Status){}
	/**
	 * @param \System\Int32|int $TaskID
	 * @param \System\Threading\Tasks\CausalitySynchronousWork $Work
	 * @return \System\Void|void
	 */
	public  function TraceSynchronousWorkBegin($TaskID, $Work){}
	/**
	 * @param \System\Threading\Tasks\CausalitySynchronousWork $Work
	 * @return \System\Void|void
	 */
	public  function TraceSynchronousWorkEnd($Work){}
	/**
	 * @uses TplEventSourceMethodsOverride::RunningContinuation_1 ($TaskID, $Object)
	 * @uses TplEventSourceMethodsOverride::RunningContinuation_2 ($TaskID, $Object)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RunningContinuation(mixed ...$args){}
	/**
	 * @uses TplEventSourceMethodsOverride::RunningContinuationList_1 ($TaskID, $Index, $Object)
	 * @uses TplEventSourceMethodsOverride::RunningContinuationList_2 ($TaskID, $Index, $Object)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RunningContinuationList(mixed ...$args){}
	/**
	 * @param \System\String|string $Facility
	 * @param \System\String|string $Message
	 * @return \System\Void|void
	 */
	public  function DebugFacilityMessage($Facility, $Message){}
	/**
	 * @param \System\String|string $Facility
	 * @param \System\String|string $Message
	 * @param \System\String|string $Value1
	 * @return \System\Void|void
	 */
	public  function DebugFacilityMessage1($Facility, $Message, $Value1){}
	/**
	 * @param \System\Guid $NewId
	 * @return \System\Void|void
	 */
	public  function SetActivityId($NewId){}
	/**
	 * @param \System\Int32|int $TaskID
	 * @return \System\Void|void
	 */
	public  function NewID($TaskID){}
	/**
	 * @uses TplEventSourceMethodsOverride::IncompleteAsyncMethod_1 ($stateMachineBox)
	 * @uses TplEventSourceMethodsOverride::IncompleteAsyncMethod_2 ($stateMachineDescription)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IncompleteAsyncMethod(mixed ...$args){}
	/**
	 * @param \System\Int32|int $taskID
	 * @return \System\Guid
	 */
	protected static function CreateGuidForTaskID($taskID){}
	/**
	 * @uses TplEventSourceMethodsOverride::IsEnabled_1 ()
	 * @uses TplEventSourceMethodsOverride::IsEnabled_2 ($level, $keywords)
	 * @uses TplEventSourceMethodsOverride::IsEnabled_3 ($level, $keywords, $channel)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsEnabled(mixed ...$args){}
	/**
	 * @uses TplEventSourceMethodsOverride::WriteEvent_1 ($eventId)
	 * @uses TplEventSourceMethodsOverride::WriteEvent_2 ($eventId, $arg1)
	 * @uses TplEventSourceMethodsOverride::WriteEvent_3 ($eventId, $arg1, $arg2)
	 * @uses TplEventSourceMethodsOverride::WriteEvent_4 ($eventId, $arg1, $arg2, $arg3)
	 * @uses TplEventSourceMethodsOverride::WriteEvent_5 ($eventId, $arg1)
	 * @uses TplEventSourceMethodsOverride::WriteEvent_6 ($eventId, $arg1, $arg2)
	 * @uses TplEventSourceMethodsOverride::WriteEvent_7 ($eventId, $arg1, $arg2, $arg3)
	 * @uses TplEventSourceMethodsOverride::WriteEvent_8 ($eventId, $arg1)
	 * @uses TplEventSourceMethodsOverride::WriteEvent_9 ($eventId, $arg1, $arg2)
	 * @uses TplEventSourceMethodsOverride::WriteEvent_10 ($eventId, $arg1, $arg2, $arg3)
	 * @uses TplEventSourceMethodsOverride::WriteEvent_11 ($eventId, $arg1, $arg2)
	 * @uses TplEventSourceMethodsOverride::WriteEvent_12 ($eventId, $arg1, $arg2, $arg3)
	 * @uses TplEventSourceMethodsOverride::WriteEvent_13 ($eventId, $arg1, $arg2)
	 * @uses TplEventSourceMethodsOverride::WriteEvent_14 ($eventId, $arg1, $arg2)
	 * @uses TplEventSourceMethodsOverride::WriteEvent_15 ($eventId, $arg1, $arg2)
	 * @uses TplEventSourceMethodsOverride::WriteEvent_16 ($eventId, $arg1)
	 * @uses TplEventSourceMethodsOverride::WriteEvent_17 ($eventId, $arg1, $arg2)
	 * @uses TplEventSourceMethodsOverride::WriteEvent_18 ($eventId, $args)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteEvent(mixed ...$args){}
	/**
	 * @uses TplEventSourceMethodsOverride::Dispose_1 ()
	 * @uses TplEventSourceMethodsOverride::Dispose_2 ($disposing)
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
	 * @uses TplEventSourceMethodsOverride::Write_1 ($eventName)
	 * @uses TplEventSourceMethodsOverride::Write_2 ($eventName, $options)
	 * @uses TplEventSourceMethodsOverride::Write_3 ($eventName, $data)
	 * @uses TplEventSourceMethodsOverride::Write_4 ($eventName, $options, $data)
	 * @uses TplEventSourceMethodsOverride::Write_5 ($eventName, $options, $data)
	 * @uses TplEventSourceMethodsOverride::Write_6 ($eventName, $options, $activityId, $relatedActivityId, $data)
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
