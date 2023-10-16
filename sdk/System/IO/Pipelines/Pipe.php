<?php
namespace System\IO\Pipelines;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PipeMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function AdvanceReader_1($consumed){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function AdvanceReader_2($consumed, $examined){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function AdvanceReader_3($consumedSegment, $consumedIndex, $examinedSegment, $examinedIndex){}
}
/**
 */
class Pipe extends \System\Object
{
	/**
	 * @var \System\IO\Pipelines\PipeReader
	 * @property
	 */
	public readonly $Reader;
	/**
	 * @var \System\IO\Pipelines\PipeWriter
	 * @property
	 */
	public readonly $Writer;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_UseSynchronizationContext(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_MinimumSegmentSize(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_PauseWriterThreshold(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_ResumeWriterThreshold(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_ReaderScheduler(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_WriterScheduler(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_SyncObj(){}
	/**
	 * @return \System\Int64|int
	 */
	protected  function get_Length(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ResetState(){}
	/**
	 * @param \System\Int32|int $sizeHint
	 * @return \System\Memory_1
	 */
	protected  function GetMemory($sizeHint){}
	/**
	 * @param \System\Int32|int $sizeHint
	 * @return \System\Span_1
	 */
	protected  function GetSpan($sizeHint){}
	/**
	 * @param \System\Int32|int $sizeHint
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AllocateWriteHeadIfNeeded($sizeHint){}
	/**
	 * @param \System\Int32|int $sizeHint
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AllocateWriteHeadSynchronized($sizeHint){}
	/**
	 * @param \System\Int32|int $sizeHint
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AllocateSegment($sizeHint){}
	/**
	 * @param \System\Int32|int $sizeHint
	 * @param \System\Int32|int $maxBufferSize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetSegmentSize($sizeHint, $maxBufferSize){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateSegmentUnsynchronized(){}
	/**
	 * @param \System\IO\Pipelines\BufferSegment $segment
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReturnSegmentUnsynchronized($segment){}
	/**
	 * @return \System\Boolean
	 */
	protected  function CommitUnsynchronized(){}
	/**
	 * @param \System\Int32|int $bytes
	 * @return \System\Void|void
	 */
	protected  function Advance($bytes){}
	/**
	 * @param \System\Int32|int $bytesWritten
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AdvanceCore($bytesWritten){}
	/**
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	protected  function FlushAsync($cancellationToken){}
	/**
	 * @param \System\IO\Pipelines\CompletionData& $completionData
	 * @param \System\Threading\Tasks\ValueTask_1& $result
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrepareFlush($completionData, $result, $cancellationToken){}
	/**
	 * @param \System\Exception $exception
	 * @return \System\Void|void
	 */
	protected  function CompleteWriter($exception){}
	/**
	 * @uses PipeMethodsOverride::AdvanceReader_1 ($consumed)
	 * @uses PipeMethodsOverride::AdvanceReader_2 ($consumed, $examined)
	 * @uses PipeMethodsOverride::AdvanceReader_3 ($consumedSegment, $consumedIndex, $examinedSegment, $examinedIndex)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AdvanceReader(mixed ...$args){}
	/**
	 * @param \System\Exception $exception
	 * @return \System\Void|void
	 */
	protected  function CompleteReader($exception){}
	/**
	 * @param \System\Action_2 $callback
	 * @param \System\Object|object $state
	 * @return \System\Void|void
	 */
	protected  function OnWriterCompleted($callback, $state){}
	/**
	 * @return \System\Void|void
	 */
	protected  function CancelPendingRead(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function CancelPendingFlush(){}
	/**
	 * @param \System\Action_2 $callback
	 * @param \System\Object|object $state
	 * @return \System\Void|void
	 */
	protected  function OnReaderCompleted($callback, $state){}
	/**
	 * @param \System\Int32|int $minimumBytes
	 * @param \System\Threading\CancellationToken $token
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	protected  function ReadAtLeastAsync($minimumBytes, $token){}
	/**
	 * @param \System\Threading\CancellationToken $token
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	protected  function ReadAsync($token){}
	/**
	 * @param \System\IO\Pipelines\ReadResult& $result
	 * @return \System\Boolean
	 */
	protected  function TryRead($result){}
	/**
	 * @param \System\IO\Pipelines\PipeScheduler $scheduler
	 * @param \System\IO\Pipelines\PipeCompletionCallbacks $completionCallbacks
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ScheduleCallbacks($scheduler, $completionCallbacks){}
	/**
	 * @param \System\IO\Pipelines\PipeScheduler $scheduler
	 * @param \System\IO\Pipelines\CompletionData& $completionData
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TrySchedule($scheduler, $completionData){}
	/**
	 * @param \System\IO\Pipelines\PipeScheduler $scheduler
	 * @param \System\IO\Pipelines\CompletionData& $completionData
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ScheduleWithContext($scheduler, $completionData){}
	/**
	 * @param \System\Object|object $state
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ExecuteWithoutExecutionContext($state){}
	/**
	 * @param \System\Object|object $state
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ExecuteWithExecutionContext($state){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CompletePipe(){}
	/**
	 * @return \System\Threading\Tasks\Sources\ValueTaskSourceStatus
	 */
	protected  function GetReadAsyncStatus(){}
	/**
	 * @param \System\Action_1 $continuation
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\Sources\ValueTaskSourceOnCompletedFlags $flags
	 * @return \System\Void|void
	 */
	protected  function OnReadAsyncCompleted($continuation, $state, $flags){}
	/**
	 * @return \System\IO\Pipelines\ReadResult
	 */
	protected  function GetReadAsyncResult(){}
	/**
	 * @param \System\IO\Pipelines\ReadResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetReadResult($result){}
	/**
	 * @return \System\Threading\Tasks\Sources\ValueTaskSourceStatus
	 */
	protected  function GetFlushAsyncStatus(){}
	/**
	 * @return \System\IO\Pipelines\FlushResult
	 */
	protected  function GetFlushAsyncResult(){}
	/**
	 * @return \System\Int64|int
	 */
	protected  function GetUnflushedBytes(){}
	/**
	 * @param \System\IO\Pipelines\FlushResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetFlushResult($result){}
	/**
	 * @param \System\ReadOnlyMemory_1 $source
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	protected  function WriteAsync($source, $cancellationToken){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WriteMultiSegment($source){}
	/**
	 * @param \System\Action_1 $continuation
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\Sources\ValueTaskSourceOnCompletedFlags $flags
	 * @return \System\Void|void
	 */
	protected  function OnFlushAsyncCompleted($continuation, $state, $flags){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReaderCancellationRequested(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WriterCancellationRequested(){}
	/**
	 * @return \System\IO\Pipelines\PipeReader
	 */
	public  function get_Reader(){}
	/**
	 * @return \System\IO\Pipelines\PipeWriter
	 */
	public  function get_Writer(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Reset(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
