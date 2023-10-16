<?php
namespace System\IO\Pipelines;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DefaultPipeReaderMethodsOverride
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
class DefaultPipeReader extends \System\IO\Pipelines\PipeReader implements 
	\System\Threading\Tasks\Sources\IValueTaskSource_1
{
	/**
	 * @uses DefaultPipeReaderMethodsOverride::AdvanceTo_1 ($consumed)
	 * @uses DefaultPipeReaderMethodsOverride::AdvanceTo_2 ($consumed, $examined)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AdvanceTo(mixed ...$args){}
	/**
	 * @param \System\Int16 $token
	 * @return \System\Threading\Tasks\Sources\ValueTaskSourceStatus
	 */
	public  function GetStatus($token){}
	/**
	 * @param \System\Int16 $token
	 * @return \System\IO\Pipelines\ReadResult
	 */
	public  function GetResult($token){}
	/**
	 * @param \System\Action_1 $continuation
	 * @param \System\Object|object $state
	 * @param \System\Int16 $token
	 * @param \System\Threading\Tasks\Sources\ValueTaskSourceOnCompletedFlags $flags
	 * @return \System\Void|void
	 */
	public  function OnCompleted($continuation, $state, $token, $flags){}
	/**
	 * @uses DefaultPipeReaderMethodsOverride::CopyToAsync_1 ($destination, $cancellationToken)
	 * @uses DefaultPipeReaderMethodsOverride::CopyToAsync_2 ($destination, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyToAsync(mixed ...$args){}
}
