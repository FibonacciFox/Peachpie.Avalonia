<?php
namespace Microsoft\Win32\SafeHandles;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ThreadPoolValueTaskSourceOverride {
	/**
	 * @deprecated
	 * @param \System\Int16 $token
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function GetResult_1 ($token){}
	/**
	 * @deprecated
	 * @param \System\Int16 $token
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function GetResult_2 ($token){}
	/**
	 * @deprecated
	 * @param \System\Int16 $token
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public function GetResult_3 ($token){}
}
final class ThreadPoolValueTaskSource extends \System\Object implements
	\System\Threading\IThreadPoolWorkItem,
	\System\Threading\Tasks\Sources\IValueTaskSource_1,
	\System\Threading\Tasks\Sources\IValueTaskSource
{
	use ThreadPoolValueTaskSourceOverride;


	/**
	 * @param \System\Int16 $token
	 * @return \System\Threading\Tasks\Sources\ValueTaskSourceStatus
	 */
	public function GetStatus($token){}
	/**
	 * @param \System\Action_1 $continuation [generic: System\Object]
	 * @param \System\Object|object $state
	 * @param \System\Int16 $token
	 * @param \System\Threading\Tasks\Sources\ValueTaskSourceOnCompletedFlags $flags
	 * @return \System\Void|void
	 */
	public function OnCompleted($continuation, $state, $token, $flags){}
	/**
	 * @uses ThreadPoolValueTaskSourceOverride::GetResult_1 <br>private , args: ($token)<br>
	 * @uses ThreadPoolValueTaskSourceOverride::GetResult_2 <br>private , args: ($token)<br>
	 * @uses ThreadPoolValueTaskSourceOverride::GetResult_3 <br>public , args: ($token)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\Int32|int|\System\Int64|int|mixed|\override
	 */
	#[MethodOverridePublic]function GetResult (\override ...$args){}
	private function ExecuteInternal(){}
	private function Execute(){}
	private function QueueToThreadPool(){}
	/**
	 * @param \System\Memory_1 $buffer [generic: System\Byte]
	 * @param \System\Int64|int $fileOffset
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\IO\Strategies\OSFileStreamStrategy $strategy
	 * @return \System\Threading\Tasks\ValueTask_1[System\Int32]
	 */
	public function QueueRead($buffer, $fileOffset, $cancellationToken, $strategy){}
	/**
	 * @param \System\ReadOnlyMemory_1 $buffer [generic: System\Byte]
	 * @param \System\Int64|int $fileOffset
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\IO\Strategies\OSFileStreamStrategy $strategy
	 * @return \System\Threading\Tasks\ValueTask
	 */
	public function QueueWrite($buffer, $fileOffset, $cancellationToken, $strategy){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $buffers [generic: System\Memory_1[System\Byte]
	 * @param \System\Int64|int $fileOffset
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask_1[System\Int64]
	 */
	public function QueueReadScatter($buffers, $fileOffset, $cancellationToken){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $buffers [generic: System\ReadOnlyMemory_1[System\Byte]
	 * @param \System\Int64|int $fileOffset
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask
	 */
	public function QueueWriteGather($buffers, $fileOffset, $cancellationToken){}
}