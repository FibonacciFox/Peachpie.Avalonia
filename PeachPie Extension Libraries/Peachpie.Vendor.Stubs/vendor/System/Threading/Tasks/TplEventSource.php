<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TplEventSourceOverride {
	/**
	 * @deprecated
	 * @param \System\Int32|int $TaskID
	 * @param \System\Object|object $Object
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function RunningContinuation_1 ($TaskID, $Object){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $TaskID
	 * @param \System\Int64|int $Object
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function RunningContinuation_2 ($TaskID, $Object){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $TaskID
	 * @param \System\Int32|int $Index
	 * @param \System\Object|object $Object
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function RunningContinuationList_1 ($TaskID, $Index, $Object){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $TaskID
	 * @param \System\Int32|int $Index
	 * @param \System\Int64|int $Object
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function RunningContinuationList_2 ($TaskID, $Index, $Object){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\IAsyncStateMachineBox $stateMachineBox
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function IncompleteAsyncMethod_1 ($stateMachineBox){}
	/**
	 * @deprecated
	 * @param \System\String|string $stateMachineDescription
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function IncompleteAsyncMethod_2 ($stateMachineDescription){}
}
final class TplEventSource extends \System\Diagnostics\Tracing\EventSource implements
	\System\IDisposable
{
	use TplEventSourceOverride;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $TasksSetActivityIds;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $Debug;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Threading\Tasks\TplEventSource
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
	 * @param \System\Int32|int $OriginatingTaskSchedulerID
	 * @param \System\Int32|int $OriginatingTaskID
	 * @param \System\Int32|int $TaskID
	 * @param \System\Int32|int $CreatingTaskID
	 * @param \System\Int32|int $TaskCreationOptions
	 * @param \System\Int32|int $appDomain
	 * @return \System\Void|void
	 */
	public function TaskScheduled($OriginatingTaskSchedulerID, $OriginatingTaskID, $TaskID, $CreatingTaskID, $TaskCreationOptions, $appDomain){}
	/**
	 * @param \System\Int32|int $OriginatingTaskSchedulerID
	 * @param \System\Int32|int $OriginatingTaskID
	 * @param \System\Int32|int $TaskID
	 * @return \System\Void|void
	 */
	public function TaskStarted($OriginatingTaskSchedulerID, $OriginatingTaskID, $TaskID){}
	/**
	 * @param \System\Int32|int $OriginatingTaskSchedulerID
	 * @param \System\Int32|int $OriginatingTaskID
	 * @param \System\Int32|int $TaskID
	 * @param \System\Boolean|bool $IsExceptional
	 * @return \System\Void|void
	 */
	public function TaskCompleted($OriginatingTaskSchedulerID, $OriginatingTaskID, $TaskID, $IsExceptional){}
	/**
	 * @param \System\Int32|int $OriginatingTaskSchedulerID
	 * @param \System\Int32|int $OriginatingTaskID
	 * @param \System\Int32|int $TaskID
	 * @param \System\Threading\Tasks\TplEventSource+TaskWaitBehavior $Behavior
	 * @param \System\Int32|int $ContinueWithTaskID
	 * @return \System\Void|void
	 */
	public function TaskWaitBegin($OriginatingTaskSchedulerID, $OriginatingTaskID, $TaskID, $Behavior, $ContinueWithTaskID){}
	/**
	 * @param \System\Int32|int $OriginatingTaskSchedulerID
	 * @param \System\Int32|int $OriginatingTaskID
	 * @param \System\Int32|int $TaskID
	 * @return \System\Void|void
	 */
	public function TaskWaitEnd($OriginatingTaskSchedulerID, $OriginatingTaskID, $TaskID){}
	/**
	 * @param \System\Int32|int $TaskID
	 * @return \System\Void|void
	 */
	public function TaskWaitContinuationComplete($TaskID){}
	/**
	 * @param \System\Int32|int $TaskID
	 * @return \System\Void|void
	 */
	public function TaskWaitContinuationStarted($TaskID){}
	/**
	 * @param \System\Int32|int $OriginatingTaskSchedulerID
	 * @param \System\Int32|int $OriginatingTaskID
	 * @param \System\Int32|int $ContinueWithTaskId
	 * @return \System\Void|void
	 */
	public function AwaitTaskContinuationScheduled($OriginatingTaskSchedulerID, $OriginatingTaskID, $ContinueWithTaskId){}
	/**
	 * @param \System\Int32|int $TaskID
	 * @param \System\String|string $OperationName
	 * @param \System\Int64|int $RelatedContext
	 * @return \System\Void|void
	 */
	public function TraceOperationBegin($TaskID, $OperationName, $RelatedContext){}
	/**
	 * @param \System\Int32|int $TaskID
	 * @param \System\Threading\Tasks\CausalityRelation $Relation
	 * @return \System\Void|void
	 */
	public function TraceOperationRelation($TaskID, $Relation){}
	/**
	 * @param \System\Int32|int $TaskID
	 * @param \System\Threading\Tasks\AsyncCausalityStatus $Status
	 * @return \System\Void|void
	 */
	public function TraceOperationEnd($TaskID, $Status){}
	/**
	 * @param \System\Int32|int $TaskID
	 * @param \System\Threading\Tasks\CausalitySynchronousWork $Work
	 * @return \System\Void|void
	 */
	public function TraceSynchronousWorkBegin($TaskID, $Work){}
	/**
	 * @param \System\Threading\Tasks\CausalitySynchronousWork $Work
	 * @return \System\Void|void
	 */
	public function TraceSynchronousWorkEnd($Work){}
	/**
	 * @uses TplEventSourceOverride::RunningContinuation_1 <br>public , args: ($TaskID, $Object)<br>
	 * @uses TplEventSourceOverride::RunningContinuation_2 <br>private , args: ($TaskID, $Object)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function RunningContinuation (\override ...$args){}
	/**
	 * @uses TplEventSourceOverride::RunningContinuationList_1 <br>public , args: ($TaskID, $Index, $Object)<br>
	 * @uses TplEventSourceOverride::RunningContinuationList_2 <br>public , args: ($TaskID, $Index, $Object)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function RunningContinuationList (\override ...$args){}
	/**
	 * @param \System\String|string $Facility
	 * @param \System\String|string $Message
	 * @return \System\Void|void
	 */
	public function DebugFacilityMessage($Facility, $Message){}
	/**
	 * @param \System\String|string $Facility
	 * @param \System\String|string $Message
	 * @param \System\String|string $Value1
	 * @return \System\Void|void
	 */
	public function DebugFacilityMessage1($Facility, $Message, $Value1){}
	/**
	 * @param \System\Guid $NewId
	 * @return \System\Void|void
	 */
	public function SetActivityId($NewId){}
	/**
	 * @param \System\Int32|int $TaskID
	 * @return \System\Void|void
	 */
	public function NewID($TaskID){}
	/**
	 * @uses TplEventSourceOverride::IncompleteAsyncMethod_1 <br>public , args: ($stateMachineBox)<br>
	 * @uses TplEventSourceOverride::IncompleteAsyncMethod_2 <br>private , args: ($stateMachineDescription)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function IncompleteAsyncMethod (\override ...$args){}
	/**
	 * @param \System\Int32|int $taskID
	 * @return \System\Guid
	 */
	protected static function CreateGuidForTaskID($taskID){}
}