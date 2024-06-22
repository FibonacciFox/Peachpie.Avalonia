<?php
namespace System\Linq;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EnumerablePartition_1Override {
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\Collections\Generic\IEnumerator_1 $en [generic: TSource]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function SkipAndCount_1 ($index, $en){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $index
	 * @param \System\Collections\Generic\IEnumerator_1 $en [generic: TSource]
	 * @return \System\UInt32
	 */
	#[MethodOverride]private static function SkipAndCount_2 ($index, $en){}
}
final class EnumerablePartition_1 extends \System\Linq\Iterator_1 implements
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator,
	\System\Linq\IPartition_1,
	\System\Linq\IIListProvider_1
{
	use EnumerablePartition_1Override;

	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_state;
	/**
	 * @field
	 * @var \TSource
	 */
	protected $_current;
	/**
	 * @property
	 * @var \TSource
	 * @since readonly
	 */
	public $Current;
	/**
	 * @param \System\Boolean|bool $onlyIfCheap
	 * @return \System\Int32|int
	 */
	public function GetCount($onlyIfCheap){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Linq\IPartition_1[TSource]
	 */
	public function Skip($count){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Linq\IPartition_1[TSource]
	 */
	public function Take($count){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Boolean& &$found
	 * @return \TSource
	 */
	public function TryGetElementAt($index, &$found){}
	/**
	 * @param \System\Boolean& &$found
	 * @return \TSource
	 */
	public function TryGetFirst(&$found){}
	/**
	 * @param \System\Boolean& &$found
	 * @return \TSource
	 */
	public function TryGetLast(&$found){}
	/**
	 * @return \TSource[]
	 */
	public function ToArray(){}
	/**
	 * @return \System\Collections\Generic\List_1[TSource]
	 */
	public function ToList(){}
	private function SkipBeforeFirst($en){}
	private static function SkipBefore($index, $en){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses EnumerablePartition_1Override::SkipAndCount_1 <br>private , args: ($index, $en)<br>
	 * @uses EnumerablePartition_1Override::SkipAndCount_2 <br>private , args: ($index, $en)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|\System\UInt32|mixed|\override
	 */
	#[MethodOverridePrivate]function SkipAndCount (\override ...$args){}
	private function Reset(){}
}