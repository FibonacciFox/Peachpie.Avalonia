<?php
namespace System\IO\Pipelines;
/**
 */
class DefaultPipeWriter extends \System\IO\Pipelines\PipeWriter implements 
	\System\Buffers\IBufferWriter_1,
	\System\Threading\Tasks\Sources\IValueTaskSource_1
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
	 * @param \System\Int16 $token
	 * @return \System\Threading\Tasks\Sources\ValueTaskSourceStatus
	 */
	public  function GetStatus($token){}
	/**
	 * @param \System\Int16 $token
	 * @return \System\IO\Pipelines\FlushResult
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
}
