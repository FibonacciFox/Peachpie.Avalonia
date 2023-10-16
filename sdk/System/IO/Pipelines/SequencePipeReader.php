<?php
namespace System\IO\Pipelines;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SequencePipeReaderMethodsOverride
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
class SequencePipeReader extends \System\IO\Pipelines\PipeReader
{
	/**
	 * @uses SequencePipeReaderMethodsOverride::AdvanceTo_1 ($consumed)
	 * @uses SequencePipeReaderMethodsOverride::AdvanceTo_2 ($consumed, $examined)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AdvanceTo(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ThrowIfCompleted(){}
	/**
	 * @uses SequencePipeReaderMethodsOverride::CopyToAsync_1 ($destination, $cancellationToken)
	 * @uses SequencePipeReaderMethodsOverride::CopyToAsync_2 ($destination, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyToAsync(mixed ...$args){}
}
