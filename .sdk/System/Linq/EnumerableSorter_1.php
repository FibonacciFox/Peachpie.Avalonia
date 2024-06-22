<?php
namespace System\Linq;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EnumerableSorter_1Override {
	/**
	 * @deprecated
	 * @param \TElement $elements
	 * @param \System\Int32|int $count
	 * @return \System\Int32
	 */
	#[MethodOverride]protected function Sort_1 ($elements, $count){}
	/**
	 * @deprecated
	 * @param \TElement $elements
	 * @param \System\Int32|int $count
	 * @param \System\Int32|int $minIdx
	 * @param \System\Int32|int $maxIdx
	 * @return \System\Int32
	 */
	#[MethodOverride]protected function Sort_2 ($elements, $count, $minIdx, $maxIdx){}
}
class EnumerableSorter_1 extends \System\Object
{
	use EnumerableSorter_1Override;

	/**
	 * @field
	 * @since readonly
	 * @var \System\Func_2[TElement,TElement]
	 */
	protected static $IdentityFunc;
	/**
	 * @param \TElement $elements
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	abstract protected function ComputeKeys($elements, $count);
	/**
	 * @param \System\Int32|int $index1
	 * @param \System\Int32|int $index2
	 * @return \System\Int32|int
	 */
	abstract protected function CompareAnyKeys($index1, $index2);
	private function ComputeMap($elements, $count){}
	/**
	 * @uses EnumerableSorter_1Override::Sort_1 <br>protected , args: ($elements, $count)<br>
	 * @uses EnumerableSorter_1Override::Sort_2 <br>protected , args: ($elements, $count, $minIdx, $maxIdx)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|mixed|\override
	 */
	#[MethodOverrideProtected]function Sort (\override ...$args){}
	/**
	 * @param \TElement $elements
	 * @param \System\Int32|int $count
	 * @param \System\Int32|int $idx
	 * @return \TElement
	 */
	protected function ElementAt($elements, $count, $idx){}
	/**
	 * @param \System\Int32 $map
	 * @param \System\Int32|int $left
	 * @param \System\Int32|int $right
	 * @return \System\Void|void
	 */
	abstract protected function QuickSort($map, $left, $right);
	/**
	 * @param \System\Int32 $map
	 * @param \System\Int32|int $left
	 * @param \System\Int32|int $right
	 * @param \System\Int32|int $minIdx
	 * @param \System\Int32|int $maxIdx
	 * @return \System\Void|void
	 */
	abstract protected function PartialQuickSort($map, $left, $right, $minIdx, $maxIdx);
	/**
	 * @param \System\Int32 $map
	 * @param \System\Int32|int $right
	 * @param \System\Int32|int $idx
	 * @return \System\Int32|int
	 */
	abstract protected function QuickSelect($map, $right, $idx);
	/**
	 * @param \System\Int32 $map
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	abstract protected function Min($map, $count);
}