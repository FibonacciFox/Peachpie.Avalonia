<?php
namespace System\IO\Pipelines;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PipeReaderMethodsOverride
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
	 * @return \System\IO\Pipelines\PipeReader
	 */
	#[MethodOverride] public static function Create_1($stream, $readerOptions){}
	/**
	 * @return \System\IO\Pipelines\PipeReader
	 */
	#[MethodOverride] public static function Create_2($sequence){}
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
class PipeReader extends \System\Object
{
	/**
	 * @param \System\IO\Pipelines\ReadResult& $result
	 * @return \System\Boolean
	 */
	public  function TryRead($result){}
	/**
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	public  function ReadAsync($cancellationToken){}
	/**
	 * @param \System\Int32|int $minimumSize
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	public  function ReadAtLeastAsync($minimumSize, $cancellationToken){}
	/**
	 * @param \System\Int32|int $minimumSize
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	protected  function ReadAtLeastAsyncCore($minimumSize, $cancellationToken){}
	/**
	 * @uses PipeReaderMethodsOverride::AdvanceTo_1 ($consumed)
	 * @uses PipeReaderMethodsOverride::AdvanceTo_2 ($consumed, $examined)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AdvanceTo(mixed ...$args){}
	/**
	 * @param \System\Boolean $leaveOpen
	 * @return \System\IO\Stream
	 */
	public  function AsStream($leaveOpen){}
	/**
	 * @return \System\Void|void
	 */
	public  function CancelPendingRead(){}
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
	 * @param \System\Action_2 $callback
	 * @param \System\Object|object $state
	 * @return \System\Void|void
	 */
	public  function OnWriterCompleted($callback, $state){}
	/**
	 * @uses PipeReaderMethodsOverride::Create_1 ($stream, $readerOptions)
	 * @uses PipeReaderMethodsOverride::Create_2 ($sequence)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Create(mixed ...$args){}
	/**
	 * @uses PipeReaderMethodsOverride::CopyToAsync_1 ($destination, $cancellationToken)
	 * @uses PipeReaderMethodsOverride::CopyToAsync_2 ($destination, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyToAsync(mixed ...$args){}
	/**
	 * @param \System\IO\Pipelines\TStream $destination
	 * @param \System\Func_4 $writeAsync
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CopyToAsyncCore($destination, $writeAsync, $cancellationToken){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
