<?php
namespace System\Linq;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EmptyPartition_1Override {
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
	/**
	 * @deprecated
	 * @return \TElement
	 */
	#[MethodOverride]public function get_Current_1 (){}
	/**
	 * @deprecated
	 * @return \System\Object|object
	 */
	#[MethodOverride]private function get_Current_2 (){}
}
final class EmptyPartition_1 extends \System\Object implements
	\System\Linq\IPartition_1,
	\System\Linq\IIListProvider_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator
{
	use EmptyPartition_1Override;

	/**
	 * @field
	 * @since readonly
	 * @var \System\Linq\IPartition_1[TElement]
	 */
	public static $Instance;
	/**
	 * @property
	 * @var \TElement
	 * @since readonly
	 */
	public $Current;
	/**
	 * @uses EmptyPartition_1Override::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses EmptyPartition_1Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function MoveNext(){}
	/**
	 * @uses EmptyPartition_1Override::get_Current_1 <br>public , args: ()<br>
	 * @uses EmptyPartition_1Override::get_Current_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \TElement|\System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function get_Current (){}
	private function Reset(){}
	private function Dispose(){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Linq\IPartition_1[TElement]
	 */
	public function Skip($count){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Linq\IPartition_1[TElement]
	 */
	public function Take($count){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Boolean& &$found
	 * @return \TElement
	 */
	public function TryGetElementAt($index, &$found){}
	/**
	 * @param \System\Boolean& &$found
	 * @return \TElement
	 */
	public function TryGetFirst(&$found){}
	/**
	 * @param \System\Boolean& &$found
	 * @return \TElement
	 */
	public function TryGetLast(&$found){}
	/**
	 * @return \TElement[]
	 */
	public function ToArray(){}
	/**
	 * @return \System\Collections\Generic\List_1[TElement]
	 */
	public function ToList(){}
	/**
	 * @param \System\Boolean|bool $onlyIfCheap
	 * @return \System\Int32|int
	 */
	public function GetCount($onlyIfCheap){}
}