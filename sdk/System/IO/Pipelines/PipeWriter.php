<?php
namespace System\IO\Pipelines;
/**
 */
class PipeWriter extends \System\Object implements 
	\System\Buffers\IBufferWriter_1
{
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
	 * @param \System\Exception $exception
	 * @return \System\Void|void
	 */
	public  function Complete($exception){}
	/**
	 * @param \System\Exception $exception
	 * @return \System\Threading\Tasks\ValueTask
	 */
	public  function CompleteAsync($exception){}
	/**
	 * @return \System\Void|void
	 */
	public  function CancelPendingFlush(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanGetUnflushedBytes(){}
	/**
	 * @param \System\Action_2 $callback
	 * @param \System\Object|object $state
	 * @return \System\Void|void
	 */
	public  function OnReaderCompleted($callback, $state){}
	/**
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	public  function FlushAsync($cancellationToken){}
	/**
	 * @param \System\Int32|int $bytes
	 * @return \System\Void|void
	 */
	public  function Advance($bytes){}
	/**
	 * @param \System\Int32|int $sizeHint
	 * @return \System\Memory_1
	 */
	public  function GetMemory($sizeHint){}
	/**
	 * @param \System\Int32|int $sizeHint
	 * @return \System\Span_1
	 */
	public  function GetSpan($sizeHint){}
	/**
	 * @param \System\Boolean $leaveOpen
	 * @return \System\IO\Stream
	 */
	public  function AsStream($leaveOpen){}
	/**
	 * @param \System\IO\Stream $stream
	 * @param \System\IO\Pipelines\StreamPipeWriterOptions $writerOptions
	 * @return \System\IO\Pipelines\PipeWriter
	 */
	public static function Create($stream, $writerOptions){}
	/**
	 * @param \System\ReadOnlyMemory_1 $source
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	public  function WriteAsync($source, $cancellationToken){}
	/**
	 * @param \System\IO\Stream $source
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	protected  function CopyFromAsync($source, $cancellationToken){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_UnflushedBytes(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
