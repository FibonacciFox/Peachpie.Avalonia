<?php
namespace System\IO\Pipelines;
/**
 */
class StreamPipeWriter extends \System\IO\Pipelines\PipeWriter implements 
	\System\Buffers\IBufferWriter_1
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
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanGetUnflushedBytes;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $UnflushedBytes;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_InternalTokenSource(){}
	/**
	 * @return \System\IO\Stream
	 */
	public  function get_InnerStream(){}
	/**
	 * @param \System\Int32|int $sizeHint
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AllocateMemory($sizeHint){}
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
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Cancel(){}
	/**
	 * @param \System\Boolean $writeToStream
	 * @param \System\ReadOnlyMemory_1 $data
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FlushAsyncInternal($writeToStream, $data, $cancellationToken){}
	/**
	 * @param \System\Boolean $writeToStream
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FlushInternal($writeToStream){}
}
