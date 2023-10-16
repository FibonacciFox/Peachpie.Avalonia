<?php
namespace System\IO\Pipelines;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait StreamPipeReaderMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AdvanceTo_1($consumed){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AdvanceTo_2($consumed, $examined){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function AdvanceTo_3($consumedSegment, $consumedIndex, $examinedSegment, $examinedIndex){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function CopyToAsync_1($destination, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function CopyToAsync_2($destination, $cancellationToken){}
}
/**
 */
class StreamPipeReader extends \System\IO\Pipelines\PipeReader
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $InitialSegmentPoolSize;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $MaxSegmentPoolSize;
	/**
	 * @var \System\IO\Stream
	 * @property
	 */
	public readonly $InnerStream;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_LeaveOpen(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_UseZeroByteReads(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_BufferSize(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_MaxBufferSize(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_MinimumReadThreshold(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Pool(){}
	/**
	 * @return \System\IO\Stream
	 */
	public  function get_InnerStream(){}
	/**
	 * @uses StreamPipeReaderMethodsOverride::AdvanceTo_1 ($consumed)
	 * @uses StreamPipeReaderMethodsOverride::AdvanceTo_2 ($consumed, $examined)
	 * @uses StreamPipeReaderMethodsOverride::AdvanceTo_3 ($consumedSegment, $consumedIndex, $examinedSegment, $examinedIndex)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AdvanceTo(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_InternalTokenSource(){}
	/**
	 * @uses StreamPipeReaderMethodsOverride::CopyToAsync_1 ($destination, $cancellationToken)
	 * @uses StreamPipeReaderMethodsOverride::CopyToAsync_2 ($destination, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyToAsync(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ClearCancellationToken(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ThrowIfCompleted(){}
	/**
	 * @param \System\Threading\CancellationTokenSource $source
	 * @param \System\IO\Pipelines\ReadResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryReadInternal($source, $result){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetCurrentReadOnlySequence(){}
	/**
	 * @param \System\Nullable_1 $minimumSize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AllocateReadTail($minimumSize){}
	/**
	 * @param \System\Nullable_1 $minimumSize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AllocateSegment($minimumSize){}
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
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Cancel(){}
}
