<?php
namespace System\Collections\Concurrent;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ConcurrentQueue_1Override {
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function CopyTo_1 ($array, $index){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_2 ($array, $index){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]public function GetEnumerator_2 (){}
	/**
	 * @deprecated
	 * @param \System\Collections\Concurrent\ConcurrentQueueSegment_1 $s [generic: T]
	 * @param \System\Int32|int $head
	 * @param \System\Int32|int $tail
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function GetCount_1 ($s, $head, $tail){}
	/**
	 * @deprecated
	 * @param \System\Collections\Concurrent\ConcurrentQueueSegment_1 $head [generic: T]
	 * @param \System\Int32|int $headHead
	 * @param \System\Collections\Concurrent\ConcurrentQueueSegment_1 $tail [generic: T]
	 * @param \System\Int32|int $tailTail
	 * @return \System\Int64|int
	 */
	#[MethodOverride]private static function GetCount_2 ($head, $headHead, $tail, $tailTail){}
	/**
	 * @deprecated
	 * @param \T& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TryPeek_1 (&$result){}
	/**
	 * @deprecated
	 * @param \T& &$result
	 * @param \System\Boolean|bool $resultUsed
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function TryPeek_2 (&$result, $resultUsed){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $collection [generic: T]
	 */
	#[MethodOverride]public function __construct_2 ($collection){}
}
class ConcurrentQueue_1 extends \System\Object implements
	\System\Collections\Concurrent\IProducerConsumerCollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\ICollection,
	\System\Collections\Generic\IReadOnlyCollection_1
{
	use ConcurrentQueue_1Override;

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
	 * @uses ConcurrentQueue_1Override::CopyTo_1 <br>private , args: ($array, $index)<br>
	 * @uses ConcurrentQueue_1Override::CopyTo_2 <br>public , args: ($array, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function CopyTo (\override ...$args){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	/**
	 * @uses ConcurrentQueue_1Override::GetEnumerator_1 <br>private , args: ()<br>
	 * @uses ConcurrentQueue_1Override::GetEnumerator_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\IEnumerator|\System\Collections\Generic\IEnumerator_1|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	private function TryAdd($item){}
	private function TryTake(&$item){}
	/**
	 * @return \T[]
	 */
	public function ToArray(){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ConcurrentQueue_1Override::GetCount_1 <br>private , args: ($s, $head, $tail)<br>
	 * @uses ConcurrentQueue_1Override::GetCount_2 <br>private , args: ($head, $headHead, $tail, $tailTail)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|\System\Int64|int|mixed|\override
	 */
	#[MethodOverridePrivate]function GetCount (\override ...$args){}
	private function SnapForObservation(&$head, &$headHead, &$tail, &$tailTail){}
	private static function GetItemWhenAvailable($segment, $i){}
	private static function Enumerate($head, $headHead, $tail, $tailTail){}
	/**
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	public function Enqueue($item){}
	private function EnqueueSlow($item){}
	/**
	 * @param \T& &$result
	 * @return \System\Boolean|bool
	 */
	public function TryDequeue(&$result){}
	private function TryDequeueSlow(&$item){}
	/**
	 * @uses ConcurrentQueue_1Override::TryPeek_1 <br>public , args: (&$result)<br>
	 * @uses ConcurrentQueue_1Override::TryPeek_2 <br>private , args: (&$result, $resultUsed)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryPeek (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	/**
	 * @uses ConcurrentQueue_1Override::__construct_1 <br>public , args: ()<br>
	 * @uses ConcurrentQueue_1Override::__construct_2 <br>public , args: ($collection)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}