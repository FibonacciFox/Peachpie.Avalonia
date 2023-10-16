<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait NativeRuntimeEventSourceMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function ThreadPoolIOEnqueue_1($NativeOverlapped, $Overlapped, $MultiDequeues, $ClrInstanceID){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ThreadPoolIOEnqueue_2($nativeOverlapped){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ThreadPoolIOEnqueue_3($registeredWaitHandle){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function ThreadPoolIODequeue_1($NativeOverlapped, $Overlapped, $ClrInstanceID){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ThreadPoolIODequeue_2($nativeOverlapped){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ThreadPoolIODequeue_3($registeredWaitHandle){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ThreadPoolIOPack_1($nativeOverlapped){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function ThreadPoolIOPack_2($NativeOverlapped, $Overlapped, $ClrInstanceID){}
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
class NativeRuntimeEventSource extends \System\Diagnostics\Tracing\EventSource implements 
	\System\IDisposable
{
	/**
	 * @var \System\Diagnostics\Tracing\NativeRuntimeEventSource
	 * @field
	 */
	public readonly $Log;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $EventSourceName;
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
	 * @param \System\UInt32 $ActiveWorkerThreadCount
	 * @param \System\UInt32 $RetiredWorkerThreadCount
	 * @param \System\UInt16 $ClrInstanceID
	 * @return \System\Void|void
	 */
	protected static function LogThreadPoolWorkerThreadStart($ActiveWorkerThreadCount, $RetiredWorkerThreadCount, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $ActiveWorkerThreadCount
	 * @param \System\UInt32 $RetiredWorkerThreadCount
	 * @param \System\UInt16 $ClrInstanceID
	 * @return \System\Void|void
	 */
	protected static function LogThreadPoolWorkerThreadStop($ActiveWorkerThreadCount, $RetiredWorkerThreadCount, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $ActiveWorkerThreadCount
	 * @param \System\UInt32 $RetiredWorkerThreadCount
	 * @param \System\UInt16 $ClrInstanceID
	 * @return \System\Void|void
	 */
	protected static function LogThreadPoolWorkerThreadWait($ActiveWorkerThreadCount, $RetiredWorkerThreadCount, $ClrInstanceID){}
	/**
	 * @param \System\UInt16 $MinWorkerThreads
	 * @param \System\UInt16 $MaxWorkerThreads
	 * @param \System\UInt16 $MinIOCompletionThreads
	 * @param \System\UInt16 $MaxIOCompletionThreads
	 * @param \System\UInt16 $ClrInstanceID
	 * @return \System\Void|void
	 */
	protected static function LogThreadPoolMinMaxThreads($MinWorkerThreads, $MaxWorkerThreads, $MinIOCompletionThreads, $MaxIOCompletionThreads, $ClrInstanceID){}
	/**
	 * @param \System\Double|double $Throughput
	 * @param \System\UInt16 $ClrInstanceID
	 * @return \System\Void|void
	 */
	protected static function LogThreadPoolWorkerThreadAdjustmentSample($Throughput, $ClrInstanceID){}
	/**
	 * @param \System\Double|double $AverageThroughput
	 * @param \System\UInt32 $NewWorkerThreadCount
	 * @param \System\Diagnostics\Tracing\ThreadAdjustmentReasonMap $Reason
	 * @param \System\UInt16 $ClrInstanceID
	 * @return \System\Void|void
	 */
	protected static function LogThreadPoolWorkerThreadAdjustmentAdjustment($AverageThroughput, $NewWorkerThreadCount, $Reason, $ClrInstanceID){}
	/**
	 * @param \System\Double|double $Duration
	 * @param \System\Double|double $Throughput
	 * @param \System\Double|double $ThreadPoolWorkerThreadWait
	 * @param \System\Double|double $ThroughputWave
	 * @param \System\Double|double $ThroughputErrorEstimate
	 * @param \System\Double|double $AverageThroughputErrorEstimate
	 * @param \System\Double|double $ThroughputRatio
	 * @param \System\Double|double $Confidence
	 * @param \System\Double|double $NewControlSetting
	 * @param \System\UInt16 $NewThreadWaveMagnitude
	 * @param \System\UInt16 $ClrInstanceID
	 * @return \System\Void|void
	 */
	protected static function LogThreadPoolWorkerThreadAdjustmentStats($Duration, $Throughput, $ThreadPoolWorkerThreadWait, $ThroughputWave, $ThroughputErrorEstimate, $AverageThroughputErrorEstimate, $ThroughputRatio, $Confidence, $NewControlSetting, $NewThreadWaveMagnitude, $ClrInstanceID){}
	/**
	 * @param \System\IntPtr $NativeOverlapped
	 * @param \System\IntPtr $Overlapped
	 * @param \System\Boolean $MultiDequeues
	 * @param \System\UInt16 $ClrInstanceID
	 * @return \System\Void|void
	 */
	protected static function LogThreadPoolIOEnqueue($NativeOverlapped, $Overlapped, $MultiDequeues, $ClrInstanceID){}
	/**
	 * @param \System\IntPtr $NativeOverlapped
	 * @param \System\IntPtr $Overlapped
	 * @param \System\UInt16 $ClrInstanceID
	 * @return \System\Void|void
	 */
	protected static function LogThreadPoolIODequeue($NativeOverlapped, $Overlapped, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $Count
	 * @param \System\UInt16 $ClrInstanceID
	 * @return \System\Void|void
	 */
	protected static function LogThreadPoolWorkingThreadCount($Count, $ClrInstanceID){}
	/**
	 * @param \System\IntPtr $NativeOverlapped
	 * @param \System\IntPtr $Overlapped
	 * @param \System\UInt16 $ClrInstanceID
	 * @return \System\Void|void
	 */
	protected static function LogThreadPoolIOPack($NativeOverlapped, $Overlapped, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $eventID
	 * @param \System\UInt32 $osThreadID
	 * @param \System\DateTime $timeStamp
	 * @param \System\Guid $activityId
	 * @param \System\Guid $childActivityId
	 * @param \System\ReadOnlySpan_1 $payload
	 * @return \System\Void|void
	 */
	protected  function ProcessEvent($eventID, $osThreadID, $timeStamp, $activityId, $childActivityId, $payload){}
	/**
	 * @param \System\UInt32 $ActiveWorkerThreadCount
	 * @param \System\UInt32 $RetiredWorkerThreadCount
	 * @param \System\UInt16 $ClrInstanceID
	 * @return \System\Void|void
	 */
	public  function ThreadPoolWorkerThreadStart($ActiveWorkerThreadCount, $RetiredWorkerThreadCount, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $ActiveWorkerThreadCount
	 * @param \System\UInt32 $RetiredWorkerThreadCount
	 * @param \System\UInt16 $ClrInstanceID
	 * @return \System\Void|void
	 */
	public  function ThreadPoolWorkerThreadStop($ActiveWorkerThreadCount, $RetiredWorkerThreadCount, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $ActiveWorkerThreadCount
	 * @param \System\UInt32 $RetiredWorkerThreadCount
	 * @param \System\UInt16 $ClrInstanceID
	 * @return \System\Void|void
	 */
	public  function ThreadPoolWorkerThreadWait($ActiveWorkerThreadCount, $RetiredWorkerThreadCount, $ClrInstanceID){}
	/**
	 * @param \System\Double|double $Throughput
	 * @param \System\UInt16 $ClrInstanceID
	 * @return \System\Void|void
	 */
	public  function ThreadPoolWorkerThreadAdjustmentSample($Throughput, $ClrInstanceID){}
	/**
	 * @param \System\Double|double $AverageThroughput
	 * @param \System\UInt32 $NewWorkerThreadCount
	 * @param \System\Diagnostics\Tracing\ThreadAdjustmentReasonMap $Reason
	 * @param \System\UInt16 $ClrInstanceID
	 * @return \System\Void|void
	 */
	public  function ThreadPoolWorkerThreadAdjustmentAdjustment($AverageThroughput, $NewWorkerThreadCount, $Reason, $ClrInstanceID){}
	/**
	 * @param \System\Double|double $Duration
	 * @param \System\Double|double $Throughput
	 * @param \System\Double|double $ThreadWave
	 * @param \System\Double|double $ThroughputWave
	 * @param \System\Double|double $ThroughputErrorEstimate
	 * @param \System\Double|double $AverageThroughputErrorEstimate
	 * @param \System\Double|double $ThroughputRatio
	 * @param \System\Double|double $Confidence
	 * @param \System\Double|double $NewControlSetting
	 * @param \System\UInt16 $NewThreadWaveMagnitude
	 * @param \System\UInt16 $ClrInstanceID
	 * @return \System\Void|void
	 */
	public  function ThreadPoolWorkerThreadAdjustmentStats($Duration, $Throughput, $ThreadWave, $ThroughputWave, $ThroughputErrorEstimate, $AverageThroughputErrorEstimate, $ThroughputRatio, $Confidence, $NewControlSetting, $NewThreadWaveMagnitude, $ClrInstanceID){}
	/**
	 * @uses NativeRuntimeEventSourceMethodsOverride::ThreadPoolIOEnqueue_1 ($NativeOverlapped, $Overlapped, $MultiDequeues, $ClrInstanceID)
	 * @uses NativeRuntimeEventSourceMethodsOverride::ThreadPoolIOEnqueue_2 ($nativeOverlapped)
	 * @uses NativeRuntimeEventSourceMethodsOverride::ThreadPoolIOEnqueue_3 ($registeredWaitHandle)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ThreadPoolIOEnqueue(mixed ...$args){}
	/**
	 * @uses NativeRuntimeEventSourceMethodsOverride::ThreadPoolIODequeue_1 ($NativeOverlapped, $Overlapped, $ClrInstanceID)
	 * @uses NativeRuntimeEventSourceMethodsOverride::ThreadPoolIODequeue_2 ($nativeOverlapped)
	 * @uses NativeRuntimeEventSourceMethodsOverride::ThreadPoolIODequeue_3 ($registeredWaitHandle)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ThreadPoolIODequeue(mixed ...$args){}
	/**
	 * @param \System\UInt32 $Count
	 * @param \System\UInt16 $ClrInstanceID
	 * @return \System\Void|void
	 */
	public  function ThreadPoolWorkingThreadCount($Count, $ClrInstanceID){}
	/**
	 * @uses NativeRuntimeEventSourceMethodsOverride::ThreadPoolIOPack_1 ($nativeOverlapped)
	 * @uses NativeRuntimeEventSourceMethodsOverride::ThreadPoolIOPack_2 ($NativeOverlapped, $Overlapped, $ClrInstanceID)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ThreadPoolIOPack(mixed ...$args){}
	/**
	 * @param \System\UInt16 $MinWorkerThreads
	 * @param \System\UInt16 $MaxWorkerThreads
	 * @param \System\UInt16 $MinIOCompletionThreads
	 * @param \System\UInt16 $MaxIOCompletionThreads
	 * @param \System\UInt16 $ClrInstanceID
	 * @return \System\Void|void
	 */
	public  function ThreadPoolMinMaxThreads($MinWorkerThreads, $MaxWorkerThreads, $MinIOCompletionThreads, $MaxIOCompletionThreads, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $Count
	 * @param \System\UInt32 $Depth
	 * @param \System\UInt32 $Reason
	 * @param \System\UInt32 $Type
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\UInt64 $ClientSequenceNumber
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCStart_V2($Count, $Depth, $Reason, $Type, $ClrInstanceID, $ClientSequenceNumber){}
	/**
	 * @param \System\UInt32 $Count
	 * @param \System\UInt32 $Depth
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCEnd_V1($Count, $Depth, $ClrInstanceID){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCRestartEEEnd_V1($ClrInstanceID){}
	/**
	 * @param \System\UInt64 $GenerationSize0
	 * @param \System\UInt64 $TotalPromotedSize0
	 * @param \System\UInt64 $GenerationSize1
	 * @param \System\UInt64 $TotalPromotedSize1
	 * @param \System\UInt64 $GenerationSize2
	 * @param \System\UInt64 $TotalPromotedSize2
	 * @param \System\UInt64 $GenerationSize3
	 * @param \System\UInt64 $TotalPromotedSize3
	 * @param \System\UInt64 $FinalizationPromotedSize
	 * @param \System\UInt64 $FinalizationPromotedCount
	 * @param \System\UInt32 $PinnedObjectCount
	 * @param \System\UInt32 $SinkBlockCount
	 * @param \System\UInt32 $GCHandleCount
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\UInt64 $GenerationSize4
	 * @param \System\UInt64 $TotalPromotedSize4
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCHeapStats_V2($GenerationSize0, $TotalPromotedSize0, $GenerationSize1, $TotalPromotedSize1, $GenerationSize2, $TotalPromotedSize2, $GenerationSize3, $TotalPromotedSize3, $FinalizationPromotedSize, $FinalizationPromotedCount, $PinnedObjectCount, $SinkBlockCount, $GCHandleCount, $ClrInstanceID, $GenerationSize4, $TotalPromotedSize4){}
	/**
	 * @param \System\UInt64 $Address
	 * @param \System\UInt64 $Size
	 * @param \System\UInt32 $Type
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCCreateSegment_V1($Address, $Size, $Type, $ClrInstanceID){}
	/**
	 * @param \System\UInt64 $Address
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCFreeSegment_V1($Address, $ClrInstanceID){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCRestartEEBegin_V1($ClrInstanceID){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCSuspendEEEnd_V1($ClrInstanceID){}
	/**
	 * @param \System\UInt32 $Reason
	 * @param \System\UInt32 $Count
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCSuspendEEBegin_V1($Reason, $Count, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $AllocationAmount
	 * @param \System\UInt32 $AllocationKind
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\UInt64 $AllocationAmount64
	 * @param \System\IntPtr $TypeID
	 * @param \System\String|string $TypeName
	 * @param \System\UInt32 $HeapIndex
	 * @param \System\IntPtr $Address
	 * @param \System\UInt64 $ObjectSize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCAllocationTick_V4($AllocationAmount, $AllocationKind, $ClrInstanceID, $AllocationAmount64, $TypeID, $TypeName, $HeapIndex, $Address, $ObjectSize){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCCreateConcurrentThread_V1($ClrInstanceID){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCTerminateConcurrentThread_V1($ClrInstanceID){}
	/**
	 * @param \System\UInt32 $Count
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCFinalizersEnd_V1($Count, $ClrInstanceID){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCFinalizersBegin_V1($ClrInstanceID){}
	/**
	 * @param \System\UInt32 $Count
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function BulkType($Count, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $Index
	 * @param \System\UInt32 $Count
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCBulkRootEdge($Index, $Count, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $Index
	 * @param \System\UInt32 $Count
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCBulkRootConditionalWeakTableElementEdge($Index, $Count, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $Index
	 * @param \System\UInt32 $Count
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCBulkNode($Index, $Count, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $Index
	 * @param \System\UInt32 $Count
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCBulkEdge($Index, $Count, $ClrInstanceID){}
	/**
	 * @param \System\IntPtr $Address
	 * @param \System\IntPtr $TypeID
	 * @param \System\UInt32 $ObjectCountForTypeSample
	 * @param \System\UInt64 $TotalSizeForTypeSample
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCSampledObjectAllocationHigh($Address, $TypeID, $ObjectCountForTypeSample, $TotalSizeForTypeSample, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $Index
	 * @param \System\UInt32 $Count
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCBulkSurvivingObjectRanges($Index, $Count, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $Index
	 * @param \System\UInt32 $Count
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCBulkMovedObjectRanges($Index, $Count, $ClrInstanceID){}
	/**
	 * @param \System\Byte $Generation
	 * @param \System\IntPtr $RangeStart
	 * @param \System\UInt64 $RangeUsedLength
	 * @param \System\UInt64 $RangeReservedLength
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCGenerationRange($Generation, $RangeStart, $RangeUsedLength, $RangeReservedLength, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $HeapNum
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCMarkStackRoots($HeapNum, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $HeapNum
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCMarkFinalizeQueueRoots($HeapNum, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $HeapNum
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCMarkHandles($HeapNum, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $HeapNum
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCMarkOlderGenerationRoots($HeapNum, $ClrInstanceID){}
	/**
	 * @param \System\IntPtr $TypeID
	 * @param \System\IntPtr $ObjectID
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FinalizeObject($TypeID, $ObjectID, $ClrInstanceID){}
	/**
	 * @param \System\IntPtr $HandleID
	 * @param \System\IntPtr $ObjectID
	 * @param \System\UInt32 $Kind
	 * @param \System\UInt32 $Generation
	 * @param \System\UInt64 $AppDomainID
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetGCHandle($HandleID, $ObjectID, $Kind, $Generation, $AppDomainID, $ClrInstanceID){}
	/**
	 * @param \System\IntPtr $HandleID
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DestroyGCHandle($HandleID, $ClrInstanceID){}
	/**
	 * @param \System\IntPtr $Address
	 * @param \System\IntPtr $TypeID
	 * @param \System\UInt32 $ObjectCountForTypeSample
	 * @param \System\UInt64 $TotalSizeForTypeSample
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCSampledObjectAllocationLow($Address, $TypeID, $ObjectCountForTypeSample, $TotalSizeForTypeSample, $ClrInstanceID){}
	/**
	 * @param \System\IntPtr $HandleID
	 * @param \System\IntPtr $ObjectID
	 * @param \System\UInt64 $ObjectSize
	 * @param \System\String|string $TypeName
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PinObjectAtGCTime($HandleID, $ObjectID, $ObjectSize, $TypeName, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $Reason
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCTriggered($Reason, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $Count
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCBulkRootCCW($Count, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $Count
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCBulkRCW($Count, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $Count
	 * @param \System\UInt64 $AppDomainID
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCBulkRootStaticVar($Count, $AppDomainID, $ClrInstanceID){}
	/**
	 * @param \System\String|string $Name
	 * @param \System\UInt32 $DataSize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCDynamicEvent($Name, $DataSize){}
	/**
	 * @param \System\UInt32 $WorkerThreadCount
	 * @param \System\UInt32 $RetiredWorkerThreads
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WorkerThreadCreate($WorkerThreadCount, $RetiredWorkerThreads){}
	/**
	 * @param \System\UInt32 $WorkerThreadCount
	 * @param \System\UInt32 $RetiredWorkerThreads
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WorkerThreadTerminate($WorkerThreadCount, $RetiredWorkerThreads){}
	/**
	 * @param \System\UInt32 $WorkerThreadCount
	 * @param \System\UInt32 $RetiredWorkerThreads
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WorkerThreadRetire($WorkerThreadCount, $RetiredWorkerThreads){}
	/**
	 * @param \System\UInt32 $WorkerThreadCount
	 * @param \System\UInt32 $RetiredWorkerThreads
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WorkerThreadUnretire($WorkerThreadCount, $RetiredWorkerThreads){}
	/**
	 * @param \System\UInt32 $IOThreadCount
	 * @param \System\UInt32 $RetiredIOThreads
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IOThreadCreate_V1($IOThreadCount, $RetiredIOThreads, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $IOThreadCount
	 * @param \System\UInt32 $RetiredIOThreads
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IOThreadTerminate_V1($IOThreadCount, $RetiredIOThreads, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $IOThreadCount
	 * @param \System\UInt32 $RetiredIOThreads
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IOThreadRetire_V1($IOThreadCount, $RetiredIOThreads, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $IOThreadCount
	 * @param \System\UInt32 $RetiredIOThreads
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IOThreadUnretire_V1($IOThreadCount, $RetiredIOThreads, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $ClrThreadID
	 * @param \System\UInt32 $CpuUtilization
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ThreadpoolSuspensionSuspendThread($ClrThreadID, $CpuUtilization){}
	/**
	 * @param \System\UInt32 $ClrThreadID
	 * @param \System\UInt32 $CpuUtilization
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ThreadpoolSuspensionResumeThread($ClrThreadID, $CpuUtilization){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\Double|double $NsPerYield
	 * @param \System\Double|double $EstablishedNsPerYield
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function YieldProcessorMeasurement($ClrInstanceID, $NsPerYield, $EstablishedNsPerYield){}
	/**
	 * @param \System\IntPtr $ID
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ThreadCreating($ID, $ClrInstanceID){}
	/**
	 * @param \System\IntPtr $ID
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ThreadRunning($ID, $ClrInstanceID){}
	/**
	 * @param \System\UInt64 $MethodID
	 * @param \System\UInt64 $TypeID
	 * @param \System\UInt32 $MethodToken
	 * @param \System\UInt32 $TypeParameterCount
	 * @param \System\UInt64 $LoaderModuleID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MethodDetails($MethodID, $TypeID, $MethodToken, $TypeParameterCount, $LoaderModuleID){}
	/**
	 * @param \System\UInt32 $TypeLoadStartID
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TypeLoadStart($TypeLoadStartID, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $TypeLoadStartID
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\UInt16 $LoadLevel
	 * @param \System\UInt64 $TypeID
	 * @param \System\String|string $TypeName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TypeLoadStop($TypeLoadStartID, $ClrInstanceID, $LoadLevel, $TypeID, $TypeName){}
	/**
	 * @param \System\String|string $ExceptionType
	 * @param \System\String|string $ExceptionMessage
	 * @param \System\IntPtr $ExceptionEIP
	 * @param \System\UInt32 $ExceptionHRESULT
	 * @param \System\UInt16 $ExceptionFlags
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ExceptionThrown_V1($ExceptionType, $ExceptionMessage, $ExceptionEIP, $ExceptionHRESULT, $ExceptionFlags, $ClrInstanceID){}
	/**
	 * @param \System\UInt64 $EntryEIP
	 * @param \System\UInt64 $MethodID
	 * @param \System\String|string $MethodName
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ExceptionCatchStart($EntryEIP, $MethodID, $MethodName, $ClrInstanceID){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ExceptionCatchStop(){}
	/**
	 * @param \System\UInt64 $EntryEIP
	 * @param \System\UInt64 $MethodID
	 * @param \System\String|string $MethodName
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ExceptionFinallyStart($EntryEIP, $MethodID, $MethodName, $ClrInstanceID){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ExceptionFinallyStop(){}
	/**
	 * @param \System\UInt64 $EntryEIP
	 * @param \System\UInt64 $MethodID
	 * @param \System\String|string $MethodName
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ExceptionFilterStart($EntryEIP, $MethodID, $MethodName, $ClrInstanceID){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ExceptionFilterStop(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ExceptionThrownStop(){}
	/**
	 * @param \System\Byte $ContentionFlags
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ContentionStart_V1($ContentionFlags, $ClrInstanceID){}
	/**
	 * @param \System\Byte $ContentionFlags
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\Double|double $DurationNs
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ContentionStop_V1($ContentionFlags, $ClrInstanceID, $DurationNs){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\Byte $Reserved1
	 * @param \System\Byte $Reserved2
	 * @param \System\UInt32 $FrameCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CLRStackWalk($ClrInstanceID, $Reserved1, $Reserved2, $FrameCount){}
	/**
	 * @param \System\UInt64 $AppDomainID
	 * @param \System\UInt64 $Allocated
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AppDomainMemAllocated($AppDomainID, $Allocated, $ClrInstanceID){}
	/**
	 * @param \System\UInt64 $AppDomainID
	 * @param \System\UInt64 $Survived
	 * @param \System\UInt64 $ProcessSurvived
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AppDomainMemSurvived($AppDomainID, $Survived, $ProcessSurvived, $ClrInstanceID){}
	/**
	 * @param \System\UInt64 $ManagedThreadID
	 * @param \System\UInt64 $AppDomainID
	 * @param \System\UInt32 $Flags
	 * @param \System\UInt32 $ManagedThreadIndex
	 * @param \System\UInt32 $OSThreadID
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ThreadCreated($ManagedThreadID, $AppDomainID, $Flags, $ManagedThreadIndex, $OSThreadID, $ClrInstanceID){}
	/**
	 * @param \System\UInt64 $ManagedThreadID
	 * @param \System\UInt64 $AppDomainID
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ThreadTerminated($ManagedThreadID, $AppDomainID, $ClrInstanceID){}
	/**
	 * @param \System\UInt64 $ManagedThreadID
	 * @param \System\UInt64 $AppDomainID
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ThreadDomainEnter($ManagedThreadID, $AppDomainID, $ClrInstanceID){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\UInt64 $ModuleID
	 * @param \System\UInt64 $StubMethodID
	 * @param \System\UInt32 $StubFlags
	 * @param \System\UInt32 $ManagedInteropMethodToken
	 * @param \System\String|string $ManagedInteropMethodNamespace
	 * @param \System\String|string $ManagedInteropMethodName
	 * @param \System\String|string $ManagedInteropMethodSignature
	 * @param \System\String|string $NativeMethodSignature
	 * @param \System\String|string $StubMethodSignature
	 * @param \System\String|string $StubMethodILCode
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ILStubGenerated($ClrInstanceID, $ModuleID, $StubMethodID, $StubFlags, $ManagedInteropMethodToken, $ManagedInteropMethodNamespace, $ManagedInteropMethodName, $ManagedInteropMethodSignature, $NativeMethodSignature, $StubMethodSignature, $StubMethodILCode){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\UInt64 $ModuleID
	 * @param \System\UInt64 $StubMethodID
	 * @param \System\UInt32 $ManagedInteropMethodToken
	 * @param \System\String|string $ManagedInteropMethodNamespace
	 * @param \System\String|string $ManagedInteropMethodName
	 * @param \System\String|string $ManagedInteropMethodSignature
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ILStubCacheHit($ClrInstanceID, $ModuleID, $StubMethodID, $ManagedInteropMethodToken, $ManagedInteropMethodNamespace, $ManagedInteropMethodName, $ManagedInteropMethodSignature){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DCStartCompleteV2(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DCEndCompleteV2(){}
	/**
	 * @param \System\UInt64 $MethodID
	 * @param \System\UInt64 $ModuleID
	 * @param \System\UInt64 $MethodStartAddress
	 * @param \System\UInt32 $MethodSize
	 * @param \System\UInt32 $MethodToken
	 * @param \System\UInt32 $MethodFlags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MethodDCStartV2($MethodID, $ModuleID, $MethodStartAddress, $MethodSize, $MethodToken, $MethodFlags){}
	/**
	 * @param \System\UInt64 $MethodID
	 * @param \System\UInt64 $ModuleID
	 * @param \System\UInt64 $MethodStartAddress
	 * @param \System\UInt32 $MethodSize
	 * @param \System\UInt32 $MethodToken
	 * @param \System\UInt32 $MethodFlags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MethodDCEndV2($MethodID, $ModuleID, $MethodStartAddress, $MethodSize, $MethodToken, $MethodFlags){}
	/**
	 * @param \System\UInt64 $MethodID
	 * @param \System\UInt64 $ModuleID
	 * @param \System\UInt64 $MethodStartAddress
	 * @param \System\UInt32 $MethodSize
	 * @param \System\UInt32 $MethodToken
	 * @param \System\UInt32 $MethodFlags
	 * @param \System\String|string $MethodNamespace
	 * @param \System\String|string $MethodName
	 * @param \System\String|string $MethodSignature
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MethodDCStartVerboseV2($MethodID, $ModuleID, $MethodStartAddress, $MethodSize, $MethodToken, $MethodFlags, $MethodNamespace, $MethodName, $MethodSignature){}
	/**
	 * @param \System\UInt64 $MethodID
	 * @param \System\UInt64 $ModuleID
	 * @param \System\UInt64 $MethodStartAddress
	 * @param \System\UInt32 $MethodSize
	 * @param \System\UInt32 $MethodToken
	 * @param \System\UInt32 $MethodFlags
	 * @param \System\String|string $MethodNamespace
	 * @param \System\String|string $MethodName
	 * @param \System\String|string $MethodSignature
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MethodDCEndVerboseV2($MethodID, $ModuleID, $MethodStartAddress, $MethodSize, $MethodToken, $MethodFlags, $MethodNamespace, $MethodName, $MethodSignature){}
	/**
	 * @param \System\UInt64 $MethodID
	 * @param \System\UInt64 $ModuleID
	 * @param \System\UInt64 $MethodStartAddress
	 * @param \System\UInt32 $MethodSize
	 * @param \System\UInt32 $MethodToken
	 * @param \System\UInt32 $MethodFlags
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\UInt64 $ReJITID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MethodLoad_V2($MethodID, $ModuleID, $MethodStartAddress, $MethodSize, $MethodToken, $MethodFlags, $ClrInstanceID, $ReJITID){}
	/**
	 * @param \System\UInt64 $MethodID
	 * @param \System\String|string $MethodNamespace
	 * @param \System\String|string $MethodName
	 * @param \System\String|string $MethodSignature
	 * @param \System\UInt64 $EntryPoint
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function R2RGetEntryPoint($MethodID, $MethodNamespace, $MethodName, $MethodSignature, $EntryPoint, $ClrInstanceID){}
	/**
	 * @param \System\UInt64 $MethodID
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function R2RGetEntryPointStart($MethodID, $ClrInstanceID){}
	/**
	 * @param \System\UInt64 $MethodID
	 * @param \System\UInt64 $ModuleID
	 * @param \System\UInt64 $MethodStartAddress
	 * @param \System\UInt32 $MethodSize
	 * @param \System\UInt32 $MethodToken
	 * @param \System\UInt32 $MethodFlags
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\UInt64 $ReJITID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MethodUnload_V2($MethodID, $ModuleID, $MethodStartAddress, $MethodSize, $MethodToken, $MethodFlags, $ClrInstanceID, $ReJITID){}
	/**
	 * @param \System\UInt64 $MethodID
	 * @param \System\UInt64 $ModuleID
	 * @param \System\UInt64 $MethodStartAddress
	 * @param \System\UInt32 $MethodSize
	 * @param \System\UInt32 $MethodToken
	 * @param \System\UInt32 $MethodFlags
	 * @param \System\String|string $MethodNamespace
	 * @param \System\String|string $MethodName
	 * @param \System\String|string $MethodSignature
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\UInt64 $ReJITID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MethodLoadVerbose_V2($MethodID, $ModuleID, $MethodStartAddress, $MethodSize, $MethodToken, $MethodFlags, $MethodNamespace, $MethodName, $MethodSignature, $ClrInstanceID, $ReJITID){}
	/**
	 * @param \System\UInt64 $MethodID
	 * @param \System\UInt64 $ModuleID
	 * @param \System\UInt64 $MethodStartAddress
	 * @param \System\UInt32 $MethodSize
	 * @param \System\UInt32 $MethodToken
	 * @param \System\UInt32 $MethodFlags
	 * @param \System\String|string $MethodNamespace
	 * @param \System\String|string $MethodName
	 * @param \System\String|string $MethodSignature
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\UInt64 $ReJITID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MethodUnloadVerbose_V2($MethodID, $ModuleID, $MethodStartAddress, $MethodSize, $MethodToken, $MethodFlags, $MethodNamespace, $MethodName, $MethodSignature, $ClrInstanceID, $ReJITID){}
	/**
	 * @param \System\UInt64 $MethodID
	 * @param \System\UInt64 $ModuleID
	 * @param \System\UInt32 $MethodToken
	 * @param \System\UInt32 $MethodILSize
	 * @param \System\String|string $MethodNamespace
	 * @param \System\String|string $MethodName
	 * @param \System\String|string $MethodSignature
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MethodJittingStarted_V1($MethodID, $ModuleID, $MethodToken, $MethodILSize, $MethodNamespace, $MethodName, $MethodSignature, $ClrInstanceID){}
	/**
	 * @param \System\UInt64 $MethodID
	 * @param \System\UInt64 $ModuleID
	 * @param \System\UInt64 $JitHotCodeRequestSize
	 * @param \System\UInt64 $JitRODataRequestSize
	 * @param \System\UInt64 $AllocatedSizeForJitCode
	 * @param \System\UInt32 $JitAllocFlag
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MethodJitMemoryAllocatedForCode($MethodID, $ModuleID, $JitHotCodeRequestSize, $JitRODataRequestSize, $AllocatedSizeForJitCode, $JitAllocFlag, $ClrInstanceID){}
	/**
	 * @param \System\String|string $MethodBeingCompiledNamespace
	 * @param \System\String|string $MethodBeingCompiledName
	 * @param \System\String|string $MethodBeingCompiledNameSignature
	 * @param \System\String|string $InlinerNamespace
	 * @param \System\String|string $InlinerName
	 * @param \System\String|string $InlinerNameSignature
	 * @param \System\String|string $InlineeNamespace
	 * @param \System\String|string $InlineeName
	 * @param \System\String|string $InlineeNameSignature
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MethodJitInliningSucceeded($MethodBeingCompiledNamespace, $MethodBeingCompiledName, $MethodBeingCompiledNameSignature, $InlinerNamespace, $InlinerName, $InlinerNameSignature, $InlineeNamespace, $InlineeName, $InlineeNameSignature, $ClrInstanceID){}
	/**
	 * @param \System\String|string $MethodBeingCompiledNamespace
	 * @param \System\String|string $MethodBeingCompiledName
	 * @param \System\String|string $MethodBeingCompiledNameSignature
	 * @param \System\String|string $InlinerNamespace
	 * @param \System\String|string $InlinerName
	 * @param \System\String|string $InlinerNameSignature
	 * @param \System\String|string $InlineeNamespace
	 * @param \System\String|string $InlineeName
	 * @param \System\String|string $InlineeNameSignature
	 * @param \System\Boolean $FailAlways
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MethodJitInliningFailedAnsi($MethodBeingCompiledNamespace, $MethodBeingCompiledName, $MethodBeingCompiledNameSignature, $InlinerNamespace, $InlinerName, $InlinerNameSignature, $InlineeNamespace, $InlineeName, $InlineeNameSignature, $FailAlways){}
	/**
	 * @param \System\String|string $MethodBeingCompiledNamespace
	 * @param \System\String|string $MethodBeingCompiledName
	 * @param \System\String|string $MethodBeingCompiledNameSignature
	 * @param \System\String|string $CallerNamespace
	 * @param \System\String|string $CallerName
	 * @param \System\String|string $CallerNameSignature
	 * @param \System\String|string $CalleeNamespace
	 * @param \System\String|string $CalleeName
	 * @param \System\String|string $CalleeNameSignature
	 * @param \System\Boolean $TailPrefix
	 * @param \System\UInt32 $TailCallType
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MethodJitTailCallSucceeded($MethodBeingCompiledNamespace, $MethodBeingCompiledName, $MethodBeingCompiledNameSignature, $CallerNamespace, $CallerName, $CallerNameSignature, $CalleeNamespace, $CalleeName, $CalleeNameSignature, $TailPrefix, $TailCallType, $ClrInstanceID){}
	/**
	 * @param \System\String|string $MethodBeingCompiledNamespace
	 * @param \System\String|string $MethodBeingCompiledName
	 * @param \System\String|string $MethodBeingCompiledNameSignature
	 * @param \System\String|string $CallerNamespace
	 * @param \System\String|string $CallerName
	 * @param \System\String|string $CallerNameSignature
	 * @param \System\String|string $CalleeNamespace
	 * @param \System\String|string $CalleeName
	 * @param \System\String|string $CalleeNameSignature
	 * @param \System\Boolean $TailPrefix
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MethodJitTailCallFailedAnsi($MethodBeingCompiledNamespace, $MethodBeingCompiledName, $MethodBeingCompiledNameSignature, $CallerNamespace, $CallerName, $CallerNameSignature, $CalleeNamespace, $CalleeName, $CalleeNameSignature, $TailPrefix){}
	/**
	 * @param \System\UInt64 $MethodID
	 * @param \System\UInt64 $ReJITID
	 * @param \System\Byte $MethodExtent
	 * @param \System\UInt16 $CountOfMapEntries
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MethodILToNativeMap_V1($MethodID, $ReJITID, $MethodExtent, $CountOfMapEntries){}
	/**
	 * @param \System\String|string $MethodBeingCompiledNamespace
	 * @param \System\String|string $MethodBeingCompiledName
	 * @param \System\String|string $MethodBeingCompiledNameSignature
	 * @param \System\String|string $CallerNamespace
	 * @param \System\String|string $CallerName
	 * @param \System\String|string $CallerNameSignature
	 * @param \System\String|string $CalleeNamespace
	 * @param \System\String|string $CalleeName
	 * @param \System\String|string $CalleeNameSignature
	 * @param \System\Boolean $TailPrefix
	 * @param \System\String|string $FailReason
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MethodJitTailCallFailed($MethodBeingCompiledNamespace, $MethodBeingCompiledName, $MethodBeingCompiledNameSignature, $CallerNamespace, $CallerName, $CallerNameSignature, $CalleeNamespace, $CalleeName, $CalleeNameSignature, $TailPrefix, $FailReason, $ClrInstanceID){}
	/**
	 * @param \System\String|string $MethodBeingCompiledNamespace
	 * @param \System\String|string $MethodBeingCompiledName
	 * @param \System\String|string $MethodBeingCompiledNameSignature
	 * @param \System\String|string $InlinerNamespace
	 * @param \System\String|string $InlinerName
	 * @param \System\String|string $InlinerNameSignature
	 * @param \System\String|string $InlineeNamespace
	 * @param \System\String|string $InlineeName
	 * @param \System\String|string $InlineeNameSignature
	 * @param \System\Boolean $FailAlways
	 * @param \System\String|string $FailReason
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MethodJitInliningFailed($MethodBeingCompiledNamespace, $MethodBeingCompiledName, $MethodBeingCompiledNameSignature, $InlinerNamespace, $InlinerName, $InlinerNameSignature, $InlineeNamespace, $InlineeName, $InlineeNameSignature, $FailAlways, $FailReason, $ClrInstanceID){}
	/**
	 * @param \System\UInt64 $ModuleID
	 * @param \System\UInt64 $AssemblyID
	 * @param \System\UInt32 $ModuleFlags
	 * @param \System\UInt32 $Reserved1
	 * @param \System\String|string $ModuleILPath
	 * @param \System\String|string $ModuleNativePath
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ModuleDCStartV2($ModuleID, $AssemblyID, $ModuleFlags, $Reserved1, $ModuleILPath, $ModuleNativePath){}
	/**
	 * @param \System\UInt64 $ModuleID
	 * @param \System\UInt64 $AssemblyID
	 * @param \System\UInt32 $ModuleFlags
	 * @param \System\UInt32 $Reserved1
	 * @param \System\String|string $ModuleILPath
	 * @param \System\String|string $ModuleNativePath
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ModuleDCEndV2($ModuleID, $AssemblyID, $ModuleFlags, $Reserved1, $ModuleILPath, $ModuleNativePath){}
	/**
	 * @param \System\UInt64 $ModuleID
	 * @param \System\UInt64 $AssemblyID
	 * @param \System\UInt64 $AppDomainID
	 * @param \System\UInt32 $ModuleFlags
	 * @param \System\UInt32 $Reserved1
	 * @param \System\String|string $ModuleILPath
	 * @param \System\String|string $ModuleNativePath
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DomainModuleLoad_V1($ModuleID, $AssemblyID, $AppDomainID, $ModuleFlags, $Reserved1, $ModuleILPath, $ModuleNativePath, $ClrInstanceID){}
	/**
	 * @param \System\UInt64 $ModuleID
	 * @param \System\UInt64 $AssemblyID
	 * @param \System\UInt32 $ModuleFlags
	 * @param \System\UInt32 $Reserved1
	 * @param \System\String|string $ModuleILPath
	 * @param \System\String|string $ModuleNativePath
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\Guid $ManagedPdbSignature
	 * @param \System\UInt32 $ManagedPdbAge
	 * @param \System\String|string $ManagedPdbBuildPath
	 * @param \System\Guid $NativePdbSignature
	 * @param \System\UInt32 $NativePdbAge
	 * @param \System\String|string $NativePdbBuildPath
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ModuleLoad_V2($ModuleID, $AssemblyID, $ModuleFlags, $Reserved1, $ModuleILPath, $ModuleNativePath, $ClrInstanceID, $ManagedPdbSignature, $ManagedPdbAge, $ManagedPdbBuildPath, $NativePdbSignature, $NativePdbAge, $NativePdbBuildPath){}
	/**
	 * @param \System\UInt64 $ModuleID
	 * @param \System\UInt64 $AssemblyID
	 * @param \System\UInt32 $ModuleFlags
	 * @param \System\UInt32 $Reserved1
	 * @param \System\String|string $ModuleILPath
	 * @param \System\String|string $ModuleNativePath
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\Guid $ManagedPdbSignature
	 * @param \System\UInt32 $ManagedPdbAge
	 * @param \System\String|string $ManagedPdbBuildPath
	 * @param \System\Guid $NativePdbSignature
	 * @param \System\UInt32 $NativePdbAge
	 * @param \System\String|string $NativePdbBuildPath
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ModuleUnload_V2($ModuleID, $AssemblyID, $ModuleFlags, $Reserved1, $ModuleILPath, $ModuleNativePath, $ClrInstanceID, $ManagedPdbSignature, $ManagedPdbAge, $ManagedPdbBuildPath, $NativePdbSignature, $NativePdbAge, $NativePdbBuildPath){}
	/**
	 * @param \System\UInt64 $AssemblyID
	 * @param \System\UInt64 $AppDomainID
	 * @param \System\UInt64 $BindingID
	 * @param \System\UInt32 $AssemblyFlags
	 * @param \System\String|string $FullyQualifiedAssemblyName
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AssemblyLoad_V1($AssemblyID, $AppDomainID, $BindingID, $AssemblyFlags, $FullyQualifiedAssemblyName, $ClrInstanceID){}
	/**
	 * @param \System\UInt64 $AssemblyID
	 * @param \System\UInt64 $AppDomainID
	 * @param \System\UInt64 $BindingID
	 * @param \System\UInt32 $AssemblyFlags
	 * @param \System\String|string $FullyQualifiedAssemblyName
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AssemblyUnload_V1($AssemblyID, $AppDomainID, $BindingID, $AssemblyFlags, $FullyQualifiedAssemblyName, $ClrInstanceID){}
	/**
	 * @param \System\UInt64 $AppDomainID
	 * @param \System\UInt32 $AppDomainFlags
	 * @param \System\String|string $AppDomainName
	 * @param \System\UInt32 $AppDomainIndex
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AppDomainLoad_V1($AppDomainID, $AppDomainFlags, $AppDomainName, $AppDomainIndex, $ClrInstanceID){}
	/**
	 * @param \System\UInt64 $AppDomainID
	 * @param \System\UInt32 $AppDomainFlags
	 * @param \System\String|string $AppDomainName
	 * @param \System\UInt32 $AppDomainIndex
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AppDomainUnload_V1($AppDomainID, $AppDomainFlags, $AppDomainName, $AppDomainIndex, $ClrInstanceID){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\UInt64 $ModuleID
	 * @param \System\UInt32 $RangeBegin
	 * @param \System\UInt32 $RangeSize
	 * @param \System\Byte $RangeType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ModuleRangeLoad($ClrInstanceID, $ModuleID, $RangeBegin, $RangeSize, $RangeType){}
	/**
	 * @param \System\UInt32 $VerificationFlags
	 * @param \System\UInt32 $ErrorCode
	 * @param \System\String|string $FullyQualifiedAssemblyName
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function StrongNameVerificationStart_V1($VerificationFlags, $ErrorCode, $FullyQualifiedAssemblyName, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $VerificationFlags
	 * @param \System\UInt32 $ErrorCode
	 * @param \System\String|string $FullyQualifiedAssemblyName
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function StrongNameVerificationStop_V1($VerificationFlags, $ErrorCode, $FullyQualifiedAssemblyName, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $VerificationFlags
	 * @param \System\UInt32 $ErrorCode
	 * @param \System\String|string $ModulePath
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AuthenticodeVerificationStart_V1($VerificationFlags, $ErrorCode, $ModulePath, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $VerificationFlags
	 * @param \System\UInt32 $ErrorCode
	 * @param \System\String|string $ModulePath
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AuthenticodeVerificationStop_V1($VerificationFlags, $ErrorCode, $ModulePath, $ClrInstanceID){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\UInt16 $Sku
	 * @param \System\UInt16 $BclMajorVersion
	 * @param \System\UInt16 $BclMinorVersion
	 * @param \System\UInt16 $BclBuildNumber
	 * @param \System\UInt16 $BclQfeNumber
	 * @param \System\UInt16 $VMMajorVersion
	 * @param \System\UInt16 $VMMinorVersion
	 * @param \System\UInt16 $VMBuildNumber
	 * @param \System\UInt16 $VMQfeNumber
	 * @param \System\UInt32 $StartupFlags
	 * @param \System\Byte $StartupMode
	 * @param \System\String|string $CommandLine
	 * @param \System\Guid $ComObjectGuid
	 * @param \System\String|string $RuntimeDllPath
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RuntimeInformationStart($ClrInstanceID, $Sku, $BclMajorVersion, $BclMinorVersion, $BclBuildNumber, $BclQfeNumber, $VMMajorVersion, $VMMinorVersion, $VMBuildNumber, $VMQfeNumber, $StartupFlags, $StartupMode, $CommandLine, $ComObjectGuid, $RuntimeDllPath){}
	/**
	 * @param \System\UInt64 $BytesAllocated
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IncreaseMemoryPressure($BytesAllocated, $ClrInstanceID){}
	/**
	 * @param \System\UInt64 $BytesFreed
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DecreaseMemoryPressure($BytesFreed, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $HeapNum
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\UInt32 $Type
	 * @param \System\UInt64 $Bytes
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCMarkWithType($HeapNum, $ClrInstanceID, $Type, $Bytes){}
	/**
	 * @param \System\UInt32 $Heap
	 * @param \System\UInt32 $JoinTime
	 * @param \System\UInt32 $JoinType
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\UInt32 $JoinID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCJoin_V2($Heap, $JoinTime, $JoinType, $ClrInstanceID, $JoinID){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\IntPtr $FreeListAllocated
	 * @param \System\IntPtr $FreeListRejected
	 * @param \System\IntPtr $EndOfSegAllocated
	 * @param \System\IntPtr $CondemnedAllocated
	 * @param \System\IntPtr $PinnedAllocated
	 * @param \System\IntPtr $PinnedAllocatedAdvance
	 * @param \System\UInt32 $RunningFreeListEfficiency
	 * @param \System\UInt32 $CondemnReasons0
	 * @param \System\UInt32 $CondemnReasons1
	 * @param \System\UInt32 $CompactMechanisms
	 * @param \System\UInt32 $ExpandMechanisms
	 * @param \System\UInt32 $HeapIndex
	 * @param \System\IntPtr $ExtraGen0Commit
	 * @param \System\UInt32 $Count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCPerHeapHistory_V3($ClrInstanceID, $FreeListAllocated, $FreeListRejected, $EndOfSegAllocated, $CondemnedAllocated, $PinnedAllocated, $PinnedAllocatedAdvance, $RunningFreeListEfficiency, $CondemnReasons0, $CondemnReasons1, $CompactMechanisms, $ExpandMechanisms, $HeapIndex, $ExtraGen0Commit, $Count){}
	/**
	 * @param \System\UInt64 $FinalYoungestDesired
	 * @param \System\Int32|int $NumHeaps
	 * @param \System\UInt32 $CondemnedGeneration
	 * @param \System\UInt32 $Gen0ReductionCount
	 * @param \System\UInt32 $Reason
	 * @param \System\UInt32 $GlobalMechanisms
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\UInt32 $PauseMode
	 * @param \System\UInt32 $MemoryPressure
	 * @param \System\UInt32 $CondemnReasons0
	 * @param \System\UInt32 $CondemnReasons1
	 * @param \System\UInt32 $Count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCGlobalHeapHistory_V4($FinalYoungestDesired, $NumHeaps, $CondemnedGeneration, $Gen0ReductionCount, $Reason, $GlobalMechanisms, $ClrInstanceID, $PauseMode, $MemoryPressure, $CondemnReasons0, $CondemnReasons1, $Count){}
	/**
	 * @param \System\UInt32 $Count
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GenAwareBegin($Count, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $Count
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GenAwareEnd($Count, $ClrInstanceID){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\UInt16 $Count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCLOHCompact($ClrInstanceID, $Count){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\UInt16 $BucketKind
	 * @param \System\UInt64 $TotalSize
	 * @param \System\UInt16 $Count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GCFitBucketInfo($ClrInstanceID, $BucketKind, $TotalSize, $Count){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DebugIPCEventStart(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DebugIPCEventEnd(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DebugExceptionProcessingStart(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DebugExceptionProcessingEnd(){}
	/**
	 * @param \System\UInt64 $ModuleId
	 * @param \System\UInt16 $TotalChunks
	 * @param \System\UInt16 $ChunkNumber
	 * @param \System\UInt32 $ChunkLength
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CodeSymbols($ModuleId, $TotalChunks, $ChunkNumber, $ChunkLength){}
	/**
	 * @param \System\Int32|int $EventID
	 * @param \System\String|string $EventName
	 * @param \System\String|string $EventSourceName
	 * @param \System\String|string $Payload
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EventSource($EventID, $EventName, $EventSourceName, $Payload){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\UInt32 $Flags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TieredCompilationSettings($ClrInstanceID, $Flags){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TieredCompilationPause($ClrInstanceID){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\UInt32 $NewMethodCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TieredCompilationResume($ClrInstanceID, $NewMethodCount){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\UInt32 $PendingMethodCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TieredCompilationBackgroundJitStart($ClrInstanceID, $PendingMethodCount){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\UInt32 $PendingMethodCount
	 * @param \System\UInt32 $JittedMethodCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TieredCompilationBackgroundJitStop($ClrInstanceID, $PendingMethodCount, $JittedMethodCount){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\String|string $AssemblyName
	 * @param \System\String|string $AssemblyPath
	 * @param \System\String|string $RequestingAssembly
	 * @param \System\String|string $AssemblyLoadContext
	 * @param \System\String|string $RequestingAssemblyLoadContext
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AssemblyLoadStart($ClrInstanceID, $AssemblyName, $AssemblyPath, $RequestingAssembly, $AssemblyLoadContext, $RequestingAssemblyLoadContext){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\String|string $AssemblyName
	 * @param \System\String|string $AssemblyPath
	 * @param \System\String|string $RequestingAssembly
	 * @param \System\String|string $AssemblyLoadContext
	 * @param \System\String|string $RequestingAssemblyLoadContext
	 * @param \System\Boolean $Success
	 * @param \System\String|string $ResultAssemblyName
	 * @param \System\String|string $ResultAssemblyPath
	 * @param \System\Boolean $Cached
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AssemblyLoadStop($ClrInstanceID, $AssemblyName, $AssemblyPath, $RequestingAssembly, $AssemblyLoadContext, $RequestingAssemblyLoadContext, $Success, $ResultAssemblyName, $ResultAssemblyPath, $Cached){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\String|string $AssemblyName
	 * @param \System\UInt16 $Stage
	 * @param \System\String|string $AssemblyLoadContext
	 * @param \System\UInt16 $Result
	 * @param \System\String|string $ResultAssemblyName
	 * @param \System\String|string $ResultAssemblyPath
	 * @param \System\String|string $ErrorMessage
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ResolutionAttempted($ClrInstanceID, $AssemblyName, $Stage, $AssemblyLoadContext, $Result, $ResultAssemblyName, $ResultAssemblyPath, $ErrorMessage){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\String|string $AssemblyName
	 * @param \System\String|string $HandlerName
	 * @param \System\String|string $AssemblyLoadContext
	 * @param \System\String|string $ResultAssemblyName
	 * @param \System\String|string $ResultAssemblyPath
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AssemblyLoadContextResolvingHandlerInvoked($ClrInstanceID, $AssemblyName, $HandlerName, $AssemblyLoadContext, $ResultAssemblyName, $ResultAssemblyPath){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\String|string $AssemblyName
	 * @param \System\String|string $HandlerName
	 * @param \System\String|string $ResultAssemblyName
	 * @param \System\String|string $ResultAssemblyPath
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AppDomainAssemblyResolveHandlerInvoked($ClrInstanceID, $AssemblyName, $HandlerName, $ResultAssemblyName, $ResultAssemblyPath){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\String|string $AssemblyName
	 * @param \System\Boolean $IsTrackedLoad
	 * @param \System\String|string $RequestingAssemblyPath
	 * @param \System\String|string $ComputedRequestedAssemblyPath
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AssemblyLoadFromResolveHandlerInvoked($ClrInstanceID, $AssemblyName, $IsTrackedLoad, $RequestingAssemblyPath, $ComputedRequestedAssemblyPath){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\String|string $FilePath
	 * @param \System\UInt16 $Source
	 * @param \System\Int32|int $Result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function KnownPathProbed($ClrInstanceID, $FilePath, $Source, $Result){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\UInt32 $MethodFlags
	 * @param \System\UInt32 $DataSize
	 * @param \System\UInt64 $MethodID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function JitInstrumentationData($ClrInstanceID, $MethodFlags, $DataSize, $MethodID){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\UInt32 $MethodFlags
	 * @param \System\UInt32 $DataSize
	 * @param \System\UInt64 $MethodID
	 * @param \System\UInt64 $ModuleID
	 * @param \System\UInt32 $MethodToken
	 * @param \System\String|string $MethodNamespace
	 * @param \System\String|string $MethodName
	 * @param \System\String|string $MethodSignature
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function JitInstrumentationDataVerbose($ClrInstanceID, $MethodFlags, $DataSize, $MethodID, $ModuleID, $MethodToken, $MethodNamespace, $MethodName, $MethodSignature){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\String|string $Message
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ProfilerMessage($ClrInstanceID, $Message){}
	/**
	 * @param \System\UInt16 $ClrInstanceID
	 * @param \System\String|string $Name
	 * @param \System\Int64|int $Timestamp
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ExecutionCheckpoint($ClrInstanceID, $Name, $Timestamp){}
	/**
	 * @uses NativeRuntimeEventSourceMethodsOverride::IsEnabled_1 ()
	 * @uses NativeRuntimeEventSourceMethodsOverride::IsEnabled_2 ($level, $keywords)
	 * @uses NativeRuntimeEventSourceMethodsOverride::IsEnabled_3 ($level, $keywords, $channel)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsEnabled(mixed ...$args){}
	/**
	 * @uses NativeRuntimeEventSourceMethodsOverride::WriteEvent_1 ($eventId)
	 * @uses NativeRuntimeEventSourceMethodsOverride::WriteEvent_2 ($eventId, $arg1)
	 * @uses NativeRuntimeEventSourceMethodsOverride::WriteEvent_3 ($eventId, $arg1, $arg2)
	 * @uses NativeRuntimeEventSourceMethodsOverride::WriteEvent_4 ($eventId, $arg1, $arg2, $arg3)
	 * @uses NativeRuntimeEventSourceMethodsOverride::WriteEvent_5 ($eventId, $arg1)
	 * @uses NativeRuntimeEventSourceMethodsOverride::WriteEvent_6 ($eventId, $arg1, $arg2)
	 * @uses NativeRuntimeEventSourceMethodsOverride::WriteEvent_7 ($eventId, $arg1, $arg2, $arg3)
	 * @uses NativeRuntimeEventSourceMethodsOverride::WriteEvent_8 ($eventId, $arg1)
	 * @uses NativeRuntimeEventSourceMethodsOverride::WriteEvent_9 ($eventId, $arg1, $arg2)
	 * @uses NativeRuntimeEventSourceMethodsOverride::WriteEvent_10 ($eventId, $arg1, $arg2, $arg3)
	 * @uses NativeRuntimeEventSourceMethodsOverride::WriteEvent_11 ($eventId, $arg1, $arg2)
	 * @uses NativeRuntimeEventSourceMethodsOverride::WriteEvent_12 ($eventId, $arg1, $arg2, $arg3)
	 * @uses NativeRuntimeEventSourceMethodsOverride::WriteEvent_13 ($eventId, $arg1, $arg2)
	 * @uses NativeRuntimeEventSourceMethodsOverride::WriteEvent_14 ($eventId, $arg1, $arg2)
	 * @uses NativeRuntimeEventSourceMethodsOverride::WriteEvent_15 ($eventId, $arg1, $arg2)
	 * @uses NativeRuntimeEventSourceMethodsOverride::WriteEvent_16 ($eventId, $arg1)
	 * @uses NativeRuntimeEventSourceMethodsOverride::WriteEvent_17 ($eventId, $arg1, $arg2)
	 * @uses NativeRuntimeEventSourceMethodsOverride::WriteEvent_18 ($eventId, $args)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteEvent(mixed ...$args){}
	/**
	 * @uses NativeRuntimeEventSourceMethodsOverride::Dispose_1 ()
	 * @uses NativeRuntimeEventSourceMethodsOverride::Dispose_2 ($disposing)
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
	 * @uses NativeRuntimeEventSourceMethodsOverride::Write_1 ($eventName)
	 * @uses NativeRuntimeEventSourceMethodsOverride::Write_2 ($eventName, $options)
	 * @uses NativeRuntimeEventSourceMethodsOverride::Write_3 ($eventName, $data)
	 * @uses NativeRuntimeEventSourceMethodsOverride::Write_4 ($eventName, $options, $data)
	 * @uses NativeRuntimeEventSourceMethodsOverride::Write_5 ($eventName, $options, $data)
	 * @uses NativeRuntimeEventSourceMethodsOverride::Write_6 ($eventName, $options, $activityId, $relatedActivityId, $data)
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
