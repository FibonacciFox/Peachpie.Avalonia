<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MultiProducerMultiConsumerQueue_1Override {
	/**
	 * @deprecated
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Enqueue_1 ($item){}
	/**
	 * @deprecated
	 * @param \T& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function TryDequeue_1 (&$result){}
	/**
	 * @deprecated
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function get_IsEmpty_1 (){}
	/**
	 * @deprecated
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function get_Count_1 (){}
}
final class MultiProducerMultiConsumerQueue_1 extends \System\Collections\Concurrent\ConcurrentQueue_1 implements
	\System\Collections\Concurrent\IProducerConsumerCollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\ICollection,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Threading\Tasks\IProducerConsumerQueue_1
{
	use MultiProducerMultiConsumerQueue_1Override;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsEmpty;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	private function TryAdd($item){}
	private function TryTake(&$item){}
	/**
	 */
	public function __construct(){}
}