<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SingleProducerSingleConsumerQueue_1Override {
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]public function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_2 (){}
}
final class SingleProducerSingleConsumerQueue_1 extends \System\Object implements
	\System\Threading\Tasks\IProducerConsumerQueue_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	use SingleProducerSingleConsumerQueue_1Override;

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
	/**
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	public function Enqueue($item){}
	private function EnqueueSlow($item, $segment){}
	/**
	 * @param \T& &$result
	 * @return \System\Boolean|bool
	 */
	public function TryDequeue(&$result){}
	private function TryDequeueSlow($segment, $array, &$result){}
	/**
	 * @uses SingleProducerSingleConsumerQueue_1Override::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses SingleProducerSingleConsumerQueue_1Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
}