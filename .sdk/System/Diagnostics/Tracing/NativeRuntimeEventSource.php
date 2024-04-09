<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait NativeRuntimeEventSourceOverride {
	/**
	 * @deprecated
	 * @param \System\IntPtr $NativeOverlapped
	 * @param \System\IntPtr $Overlapped
	 * @param \System\Boolean|bool $MultiDequeues
	 * @param \System\UInt16 $ClrInstanceID
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function ThreadPoolIOEnqueue_1 ($NativeOverlapped, $Overlapped, $MultiDequeues, $ClrInstanceID){}
	/**
	 * @deprecated
	 * @param \System\Threading\NativeOverlapped* $nativeOverlapped
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function ThreadPoolIOEnqueue_2 ($nativeOverlapped){}
	/**
	 * @deprecated
	 * @param \System\Threading\RegisteredWaitHandle $registeredWaitHandle
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function ThreadPoolIOEnqueue_3 ($registeredWaitHandle){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $NativeOverlapped
	 * @param \System\IntPtr $Overlapped
	 * @param \System\UInt16 $ClrInstanceID
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function ThreadPoolIODequeue_1 ($NativeOverlapped, $Overlapped, $ClrInstanceID){}
	/**
	 * @deprecated
	 * @param \System\Threading\NativeOverlapped* $nativeOverlapped
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function ThreadPoolIODequeue_2 ($nativeOverlapped){}
	/**
	 * @deprecated
	 * @param \System\Threading\RegisteredWaitHandle $registeredWaitHandle
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function ThreadPoolIODequeue_3 ($registeredWaitHandle){}
	/**
	 * @deprecated
	 * @param \System\Threading\NativeOverlapped* $nativeOverlapped
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function ThreadPoolIOPack_1 ($nativeOverlapped){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $NativeOverlapped
	 * @param \System\IntPtr $Overlapped
	 * @param \System\UInt16 $ClrInstanceID
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function ThreadPoolIOPack_2 ($NativeOverlapped, $Overlapped, $ClrInstanceID){}
}
final class NativeRuntimeEventSource extends \System\Diagnostics\Tracing\EventSource implements
	\System\IDisposable
{
	use NativeRuntimeEventSourceOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Diagnostics\Tracing\NativeRuntimeEventSource
	 */
	public static $Log;
	/**
	 * @field
	 * @var \System\String|string
	 */
	const EventSourceName = 'Microsoft-Windows-DotNETRuntime';
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
	 * @param \System\Diagnostics\Tracing\NativeRuntimeEventSource+ThreadAdjustmentReasonMap $Reason
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
	 * @param \System\Boolean|bool $MultiDequeues
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
	 * @param \System\ReadOnlySpan_1 $payload [generic: System\Byte]
	 * @return \System\Void|void
	 */
	protected function ProcessEvent($eventID, $osThreadID, $timeStamp, $activityId, $childActivityId, $payload){}
	/**
	 * @param \System\UInt32 $ActiveWorkerThreadCount
	 * @param \System\UInt32 $RetiredWorkerThreadCount
	 * @param \System\UInt16 $ClrInstanceID
	 * @return \System\Void|void
	 */
	public function ThreadPoolWorkerThreadStart($ActiveWorkerThreadCount, $RetiredWorkerThreadCount, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $ActiveWorkerThreadCount
	 * @param \System\UInt32 $RetiredWorkerThreadCount
	 * @param \System\UInt16 $ClrInstanceID
	 * @return \System\Void|void
	 */
	public function ThreadPoolWorkerThreadStop($ActiveWorkerThreadCount, $RetiredWorkerThreadCount, $ClrInstanceID){}
	/**
	 * @param \System\UInt32 $ActiveWorkerThreadCount
	 * @param \System\UInt32 $RetiredWorkerThreadCount
	 * @param \System\UInt16 $ClrInstanceID
	 * @return \System\Void|void
	 */
	public function ThreadPoolWorkerThreadWait($ActiveWorkerThreadCount, $RetiredWorkerThreadCount, $ClrInstanceID){}
	/**
	 * @param \System\Double|double $Throughput
	 * @param \System\UInt16 $ClrInstanceID
	 * @return \System\Void|void
	 */
	public function ThreadPoolWorkerThreadAdjustmentSample($Throughput, $ClrInstanceID){}
	/**
	 * @param \System\Double|double $AverageThroughput
	 * @param \System\UInt32 $NewWorkerThreadCount
	 * @param \System\Diagnostics\Tracing\NativeRuntimeEventSource+ThreadAdjustmentReasonMap $Reason
	 * @param \System\UInt16 $ClrInstanceID
	 * @return \System\Void|void
	 */
	public function ThreadPoolWorkerThreadAdjustmentAdjustment($AverageThroughput, $NewWorkerThreadCount, $Reason, $ClrInstanceID){}
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
	public function ThreadPoolWorkerThreadAdjustmentStats($Duration, $Throughput, $ThreadWave, $ThroughputWave, $ThroughputErrorEstimate, $AverageThroughputErrorEstimate, $ThroughputRatio, $Confidence, $NewControlSetting, $NewThreadWaveMagnitude, $ClrInstanceID){}
	/**
	 * @uses NativeRuntimeEventSourceOverride::ThreadPoolIOEnqueue_1 <br>private , args: ($NativeOverlapped, $Overlapped, $MultiDequeues, $ClrInstanceID)<br>
	 * @uses NativeRuntimeEventSourceOverride::ThreadPoolIOEnqueue_2 <br>public , args: ($nativeOverlapped)<br>
	 * @uses NativeRuntimeEventSourceOverride::ThreadPoolIOEnqueue_3 <br>public , args: ($registeredWaitHandle)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function ThreadPoolIOEnqueue (\override ...$args){}
	/**
	 * @uses NativeRuntimeEventSourceOverride::ThreadPoolIODequeue_1 <br>private , args: ($NativeOverlapped, $Overlapped, $ClrInstanceID)<br>
	 * @uses NativeRuntimeEventSourceOverride::ThreadPoolIODequeue_2 <br>public , args: ($nativeOverlapped)<br>
	 * @uses NativeRuntimeEventSourceOverride::ThreadPoolIODequeue_3 <br>public , args: ($registeredWaitHandle)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function ThreadPoolIODequeue (\override ...$args){}
	/**
	 * @param \System\UInt32 $Count
	 * @param \System\UInt16 $ClrInstanceID
	 * @return \System\Void|void
	 */
	public function ThreadPoolWorkingThreadCount($Count, $ClrInstanceID){}
	/**
	 * @uses NativeRuntimeEventSourceOverride::ThreadPoolIOPack_1 <br>public , args: ($nativeOverlapped)<br>
	 * @uses NativeRuntimeEventSourceOverride::ThreadPoolIOPack_2 <br>private , args: ($NativeOverlapped, $Overlapped, $ClrInstanceID)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function ThreadPoolIOPack (\override ...$args){}
	/**
	 * @param \System\UInt16 $MinWorkerThreads
	 * @param \System\UInt16 $MaxWorkerThreads
	 * @param \System\UInt16 $MinIOCompletionThreads
	 * @param \System\UInt16 $MaxIOCompletionThreads
	 * @param \System\UInt16 $ClrInstanceID
	 * @return \System\Void|void
	 */
	public function ThreadPoolMinMaxThreads($MinWorkerThreads, $MaxWorkerThreads, $MinIOCompletionThreads, $MaxIOCompletionThreads, $ClrInstanceID){}
	private function GCStart_V2($Count, $Depth, $Reason, $Type, $ClrInstanceID, $ClientSequenceNumber){}
	private function GCEnd_V1($Count, $Depth, $ClrInstanceID){}
	private function GCRestartEEEnd_V1($ClrInstanceID){}
	private function GCHeapStats_V2($GenerationSize0, $TotalPromotedSize0, $GenerationSize1, $TotalPromotedSize1, $GenerationSize2, $TotalPromotedSize2, $GenerationSize3, $TotalPromotedSize3, $FinalizationPromotedSize, $FinalizationPromotedCount, $PinnedObjectCount, $SinkBlockCount, $GCHandleCount, $ClrInstanceID, $GenerationSize4, $TotalPromotedSize4){}
	private function GCCreateSegment_V1($Address, $Size, $Type, $ClrInstanceID){}
	private function GCFreeSegment_V1($Address, $ClrInstanceID){}
	private function GCRestartEEBegin_V1($ClrInstanceID){}
	private function GCSuspendEEEnd_V1($ClrInstanceID){}
	private function GCSuspendEEBegin_V1($Reason, $Count, $ClrInstanceID){}
	private function GCAllocationTick_V4($AllocationAmount, $AllocationKind, $ClrInstanceID, $AllocationAmount64, $TypeID, $TypeName, $HeapIndex, $Address, $ObjectSize){}
	private function GCCreateConcurrentThread_V1($ClrInstanceID){}
	private function GCTerminateConcurrentThread_V1($ClrInstanceID){}
	private function GCFinalizersEnd_V1($Count, $ClrInstanceID){}
	private function GCFinalizersBegin_V1($ClrInstanceID){}
	private function BulkType($Count, $ClrInstanceID){}
	private function GCBulkRootEdge($Index, $Count, $ClrInstanceID){}
	private function GCBulkRootConditionalWeakTableElementEdge($Index, $Count, $ClrInstanceID){}
	private function GCBulkNode($Index, $Count, $ClrInstanceID){}
	private function GCBulkEdge($Index, $Count, $ClrInstanceID){}
	private function GCSampledObjectAllocationHigh($Address, $TypeID, $ObjectCountForTypeSample, $TotalSizeForTypeSample, $ClrInstanceID){}
	private function GCBulkSurvivingObjectRanges($Index, $Count, $ClrInstanceID){}
	private function GCBulkMovedObjectRanges($Index, $Count, $ClrInstanceID){}
	private function GCGenerationRange($Generation, $RangeStart, $RangeUsedLength, $RangeReservedLength, $ClrInstanceID){}
	private function GCMarkStackRoots($HeapNum, $ClrInstanceID){}
	private function GCMarkFinalizeQueueRoots($HeapNum, $ClrInstanceID){}
	private function GCMarkHandles($HeapNum, $ClrInstanceID){}
	private function GCMarkOlderGenerationRoots($HeapNum, $ClrInstanceID){}
	private function FinalizeObject($TypeID, $ObjectID, $ClrInstanceID){}
	private function SetGCHandle($HandleID, $ObjectID, $Kind, $Generation, $AppDomainID, $ClrInstanceID){}
	private function DestroyGCHandle($HandleID, $ClrInstanceID){}
	private function GCSampledObjectAllocationLow($Address, $TypeID, $ObjectCountForTypeSample, $TotalSizeForTypeSample, $ClrInstanceID){}
	private function PinObjectAtGCTime($HandleID, $ObjectID, $ObjectSize, $TypeName, $ClrInstanceID){}
	private function GCTriggered($Reason, $ClrInstanceID){}
	private function GCBulkRootCCW($Count, $ClrInstanceID){}
	private function GCBulkRCW($Count, $ClrInstanceID){}
	private function GCBulkRootStaticVar($Count, $AppDomainID, $ClrInstanceID){}
	private function GCDynamicEvent($Name, $DataSize){}
	private function WorkerThreadCreate($WorkerThreadCount, $RetiredWorkerThreads){}
	private function WorkerThreadTerminate($WorkerThreadCount, $RetiredWorkerThreads){}
	private function WorkerThreadRetire($WorkerThreadCount, $RetiredWorkerThreads){}
	private function WorkerThreadUnretire($WorkerThreadCount, $RetiredWorkerThreads){}
	private function IOThreadCreate_V1($IOThreadCount, $RetiredIOThreads, $ClrInstanceID){}
	private function IOThreadTerminate_V1($IOThreadCount, $RetiredIOThreads, $ClrInstanceID){}
	private function IOThreadRetire_V1($IOThreadCount, $RetiredIOThreads, $ClrInstanceID){}
	private function IOThreadUnretire_V1($IOThreadCount, $RetiredIOThreads, $ClrInstanceID){}
	private function ThreadpoolSuspensionSuspendThread($ClrThreadID, $CpuUtilization){}
	private function ThreadpoolSuspensionResumeThread($ClrThreadID, $CpuUtilization){}
	private function YieldProcessorMeasurement($ClrInstanceID, $NsPerYield, $EstablishedNsPerYield){}
	private function ThreadCreating($ID, $ClrInstanceID){}
	private function ThreadRunning($ID, $ClrInstanceID){}
	private function MethodDetails($MethodID, $TypeID, $MethodToken, $TypeParameterCount, $LoaderModuleID){}
	private function TypeLoadStart($TypeLoadStartID, $ClrInstanceID){}
	private function TypeLoadStop($TypeLoadStartID, $ClrInstanceID, $LoadLevel, $TypeID, $TypeName){}
	private function ExceptionThrown_V1($ExceptionType, $ExceptionMessage, $ExceptionEIP, $ExceptionHRESULT, $ExceptionFlags, $ClrInstanceID){}
	private function ExceptionCatchStart($EntryEIP, $MethodID, $MethodName, $ClrInstanceID){}
	private function ExceptionCatchStop(){}
	private function ExceptionFinallyStart($EntryEIP, $MethodID, $MethodName, $ClrInstanceID){}
	private function ExceptionFinallyStop(){}
	private function ExceptionFilterStart($EntryEIP, $MethodID, $MethodName, $ClrInstanceID){}
	private function ExceptionFilterStop(){}
	private function ExceptionThrownStop(){}
	private function ContentionStart_V1($ContentionFlags, $ClrInstanceID){}
	private function ContentionStop_V1($ContentionFlags, $ClrInstanceID, $DurationNs){}
	private function CLRStackWalk($ClrInstanceID, $Reserved1, $Reserved2, $FrameCount){}
	private function AppDomainMemAllocated($AppDomainID, $Allocated, $ClrInstanceID){}
	private function AppDomainMemSurvived($AppDomainID, $Survived, $ProcessSurvived, $ClrInstanceID){}
	private function ThreadCreated($ManagedThreadID, $AppDomainID, $Flags, $ManagedThreadIndex, $OSThreadID, $ClrInstanceID){}
	private function ThreadTerminated($ManagedThreadID, $AppDomainID, $ClrInstanceID){}
	private function ThreadDomainEnter($ManagedThreadID, $AppDomainID, $ClrInstanceID){}
	private function ILStubGenerated($ClrInstanceID, $ModuleID, $StubMethodID, $StubFlags, $ManagedInteropMethodToken, $ManagedInteropMethodNamespace, $ManagedInteropMethodName, $ManagedInteropMethodSignature, $NativeMethodSignature, $StubMethodSignature, $StubMethodILCode){}
	private function ILStubCacheHit($ClrInstanceID, $ModuleID, $StubMethodID, $ManagedInteropMethodToken, $ManagedInteropMethodNamespace, $ManagedInteropMethodName, $ManagedInteropMethodSignature){}
	private function DCStartCompleteV2(){}
	private function DCEndCompleteV2(){}
	private function MethodDCStartV2($MethodID, $ModuleID, $MethodStartAddress, $MethodSize, $MethodToken, $MethodFlags){}
	private function MethodDCEndV2($MethodID, $ModuleID, $MethodStartAddress, $MethodSize, $MethodToken, $MethodFlags){}
	private function MethodDCStartVerboseV2($MethodID, $ModuleID, $MethodStartAddress, $MethodSize, $MethodToken, $MethodFlags, $MethodNamespace, $MethodName, $MethodSignature){}
	private function MethodDCEndVerboseV2($MethodID, $ModuleID, $MethodStartAddress, $MethodSize, $MethodToken, $MethodFlags, $MethodNamespace, $MethodName, $MethodSignature){}
	private function MethodLoad_V2($MethodID, $ModuleID, $MethodStartAddress, $MethodSize, $MethodToken, $MethodFlags, $ClrInstanceID, $ReJITID){}
	private function R2RGetEntryPoint($MethodID, $MethodNamespace, $MethodName, $MethodSignature, $EntryPoint, $ClrInstanceID){}
	private function R2RGetEntryPointStart($MethodID, $ClrInstanceID){}
	private function MethodUnload_V2($MethodID, $ModuleID, $MethodStartAddress, $MethodSize, $MethodToken, $MethodFlags, $ClrInstanceID, $ReJITID){}
	private function MethodLoadVerbose_V2($MethodID, $ModuleID, $MethodStartAddress, $MethodSize, $MethodToken, $MethodFlags, $MethodNamespace, $MethodName, $MethodSignature, $ClrInstanceID, $ReJITID){}
	private function MethodUnloadVerbose_V2($MethodID, $ModuleID, $MethodStartAddress, $MethodSize, $MethodToken, $MethodFlags, $MethodNamespace, $MethodName, $MethodSignature, $ClrInstanceID, $ReJITID){}
	private function MethodJittingStarted_V1($MethodID, $ModuleID, $MethodToken, $MethodILSize, $MethodNamespace, $MethodName, $MethodSignature, $ClrInstanceID){}
	private function MethodJitMemoryAllocatedForCode($MethodID, $ModuleID, $JitHotCodeRequestSize, $JitRODataRequestSize, $AllocatedSizeForJitCode, $JitAllocFlag, $ClrInstanceID){}
	private function MethodJitInliningSucceeded($MethodBeingCompiledNamespace, $MethodBeingCompiledName, $MethodBeingCompiledNameSignature, $InlinerNamespace, $InlinerName, $InlinerNameSignature, $InlineeNamespace, $InlineeName, $InlineeNameSignature, $ClrInstanceID){}
	private function MethodJitInliningFailedAnsi($MethodBeingCompiledNamespace, $MethodBeingCompiledName, $MethodBeingCompiledNameSignature, $InlinerNamespace, $InlinerName, $InlinerNameSignature, $InlineeNamespace, $InlineeName, $InlineeNameSignature, $FailAlways){}
	private function MethodJitTailCallSucceeded($MethodBeingCompiledNamespace, $MethodBeingCompiledName, $MethodBeingCompiledNameSignature, $CallerNamespace, $CallerName, $CallerNameSignature, $CalleeNamespace, $CalleeName, $CalleeNameSignature, $TailPrefix, $TailCallType, $ClrInstanceID){}
	private function MethodJitTailCallFailedAnsi($MethodBeingCompiledNamespace, $MethodBeingCompiledName, $MethodBeingCompiledNameSignature, $CallerNamespace, $CallerName, $CallerNameSignature, $CalleeNamespace, $CalleeName, $CalleeNameSignature, $TailPrefix){}
	private function MethodILToNativeMap_V1($MethodID, $ReJITID, $MethodExtent, $CountOfMapEntries){}
	private function MethodJitTailCallFailed($MethodBeingCompiledNamespace, $MethodBeingCompiledName, $MethodBeingCompiledNameSignature, $CallerNamespace, $CallerName, $CallerNameSignature, $CalleeNamespace, $CalleeName, $CalleeNameSignature, $TailPrefix, $FailReason, $ClrInstanceID){}
	private function MethodJitInliningFailed($MethodBeingCompiledNamespace, $MethodBeingCompiledName, $MethodBeingCompiledNameSignature, $InlinerNamespace, $InlinerName, $InlinerNameSignature, $InlineeNamespace, $InlineeName, $InlineeNameSignature, $FailAlways, $FailReason, $ClrInstanceID){}
	private function ModuleDCStartV2($ModuleID, $AssemblyID, $ModuleFlags, $Reserved1, $ModuleILPath, $ModuleNativePath){}
	private function ModuleDCEndV2($ModuleID, $AssemblyID, $ModuleFlags, $Reserved1, $ModuleILPath, $ModuleNativePath){}
	private function DomainModuleLoad_V1($ModuleID, $AssemblyID, $AppDomainID, $ModuleFlags, $Reserved1, $ModuleILPath, $ModuleNativePath, $ClrInstanceID){}
	private function ModuleLoad_V2($ModuleID, $AssemblyID, $ModuleFlags, $Reserved1, $ModuleILPath, $ModuleNativePath, $ClrInstanceID, $ManagedPdbSignature, $ManagedPdbAge, $ManagedPdbBuildPath, $NativePdbSignature, $NativePdbAge, $NativePdbBuildPath){}
	private function ModuleUnload_V2($ModuleID, $AssemblyID, $ModuleFlags, $Reserved1, $ModuleILPath, $ModuleNativePath, $ClrInstanceID, $ManagedPdbSignature, $ManagedPdbAge, $ManagedPdbBuildPath, $NativePdbSignature, $NativePdbAge, $NativePdbBuildPath){}
	private function AssemblyLoad_V1($AssemblyID, $AppDomainID, $BindingID, $AssemblyFlags, $FullyQualifiedAssemblyName, $ClrInstanceID){}
	private function AssemblyUnload_V1($AssemblyID, $AppDomainID, $BindingID, $AssemblyFlags, $FullyQualifiedAssemblyName, $ClrInstanceID){}
	private function AppDomainLoad_V1($AppDomainID, $AppDomainFlags, $AppDomainName, $AppDomainIndex, $ClrInstanceID){}
	private function AppDomainUnload_V1($AppDomainID, $AppDomainFlags, $AppDomainName, $AppDomainIndex, $ClrInstanceID){}
	private function ModuleRangeLoad($ClrInstanceID, $ModuleID, $RangeBegin, $RangeSize, $RangeType){}
	private function StrongNameVerificationStart_V1($VerificationFlags, $ErrorCode, $FullyQualifiedAssemblyName, $ClrInstanceID){}
	private function StrongNameVerificationStop_V1($VerificationFlags, $ErrorCode, $FullyQualifiedAssemblyName, $ClrInstanceID){}
	private function AuthenticodeVerificationStart_V1($VerificationFlags, $ErrorCode, $ModulePath, $ClrInstanceID){}
	private function AuthenticodeVerificationStop_V1($VerificationFlags, $ErrorCode, $ModulePath, $ClrInstanceID){}
	private function RuntimeInformationStart($ClrInstanceID, $Sku, $BclMajorVersion, $BclMinorVersion, $BclBuildNumber, $BclQfeNumber, $VMMajorVersion, $VMMinorVersion, $VMBuildNumber, $VMQfeNumber, $StartupFlags, $StartupMode, $CommandLine, $ComObjectGuid, $RuntimeDllPath){}
	private function IncreaseMemoryPressure($BytesAllocated, $ClrInstanceID){}
	private function DecreaseMemoryPressure($BytesFreed, $ClrInstanceID){}
	private function GCMarkWithType($HeapNum, $ClrInstanceID, $Type, $Bytes){}
	private function GCJoin_V2($Heap, $JoinTime, $JoinType, $ClrInstanceID, $JoinID){}
	private function GCPerHeapHistory_V3($ClrInstanceID, $FreeListAllocated, $FreeListRejected, $EndOfSegAllocated, $CondemnedAllocated, $PinnedAllocated, $PinnedAllocatedAdvance, $RunningFreeListEfficiency, $CondemnReasons0, $CondemnReasons1, $CompactMechanisms, $ExpandMechanisms, $HeapIndex, $ExtraGen0Commit, $Count){}
	private function GCGlobalHeapHistory_V4($FinalYoungestDesired, $NumHeaps, $CondemnedGeneration, $Gen0ReductionCount, $Reason, $GlobalMechanisms, $ClrInstanceID, $PauseMode, $MemoryPressure, $CondemnReasons0, $CondemnReasons1, $Count){}
	private function GenAwareBegin($Count, $ClrInstanceID){}
	private function GenAwareEnd($Count, $ClrInstanceID){}
	private function GCLOHCompact($ClrInstanceID, $Count){}
	private function GCFitBucketInfo($ClrInstanceID, $BucketKind, $TotalSize, $Count){}
	private function DebugIPCEventStart(){}
	private function DebugIPCEventEnd(){}
	private function DebugExceptionProcessingStart(){}
	private function DebugExceptionProcessingEnd(){}
	private function CodeSymbols($ModuleId, $TotalChunks, $ChunkNumber, $ChunkLength){}
	private function EventSource($EventID, $EventName, $EventSourceName, $Payload){}
	private function TieredCompilationSettings($ClrInstanceID, $Flags){}
	private function TieredCompilationPause($ClrInstanceID){}
	private function TieredCompilationResume($ClrInstanceID, $NewMethodCount){}
	private function TieredCompilationBackgroundJitStart($ClrInstanceID, $PendingMethodCount){}
	private function TieredCompilationBackgroundJitStop($ClrInstanceID, $PendingMethodCount, $JittedMethodCount){}
	private function AssemblyLoadStart($ClrInstanceID, $AssemblyName, $AssemblyPath, $RequestingAssembly, $AssemblyLoadContext, $RequestingAssemblyLoadContext){}
	private function AssemblyLoadStop($ClrInstanceID, $AssemblyName, $AssemblyPath, $RequestingAssembly, $AssemblyLoadContext, $RequestingAssemblyLoadContext, $Success, $ResultAssemblyName, $ResultAssemblyPath, $Cached){}
	private function ResolutionAttempted($ClrInstanceID, $AssemblyName, $Stage, $AssemblyLoadContext, $Result, $ResultAssemblyName, $ResultAssemblyPath, $ErrorMessage){}
	private function AssemblyLoadContextResolvingHandlerInvoked($ClrInstanceID, $AssemblyName, $HandlerName, $AssemblyLoadContext, $ResultAssemblyName, $ResultAssemblyPath){}
	private function AppDomainAssemblyResolveHandlerInvoked($ClrInstanceID, $AssemblyName, $HandlerName, $ResultAssemblyName, $ResultAssemblyPath){}
	private function AssemblyLoadFromResolveHandlerInvoked($ClrInstanceID, $AssemblyName, $IsTrackedLoad, $RequestingAssemblyPath, $ComputedRequestedAssemblyPath){}
	private function KnownPathProbed($ClrInstanceID, $FilePath, $Source, $Result){}
	private function JitInstrumentationData($ClrInstanceID, $MethodFlags, $DataSize, $MethodID){}
	private function JitInstrumentationDataVerbose($ClrInstanceID, $MethodFlags, $DataSize, $MethodID, $ModuleID, $MethodToken, $MethodNamespace, $MethodName, $MethodSignature){}
	private function ProfilerMessage($ClrInstanceID, $Message){}
	private function ExecutionCheckpoint($ClrInstanceID, $Name, $Timestamp){}
}