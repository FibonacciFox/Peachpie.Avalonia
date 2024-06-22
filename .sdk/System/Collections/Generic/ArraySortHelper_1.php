<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ArraySortHelper_1Override {
	/**
	 * @deprecated
	 * @param \System\Span_1 $keys [generic: T]
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: T]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Sort_1 ($keys, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Span_1 $keys [generic: T]
	 * @param \System\Comparison_1 $comparer [generic: T]
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function Sort_2 ($keys, $comparer){}
}
final class ArraySortHelper_1 extends \System\Object implements
	\System\Collections\Generic\IArraySortHelper_1
{
	use ArraySortHelper_1Override;

	/**
	 * @property
	 * @var \System\Collections\Generic\IArraySortHelper_1[T]
	 * @since readonly
	 */
	public $Default;
	private static function CreateArraySortHelper(){}
	/**
	 * @uses ArraySortHelper_1Override::Sort_1 <br>public , args: ($keys, $comparer)<br>
	 * @uses ArraySortHelper_1Override::Sort_2 <br>protected , args: ($keys, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Sort (\override ...$args){}
	/**
	 * @param \T $array
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $length
	 * @param \T|object $value
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: T]
	 * @return \System\Int32|int
	 */
	public function BinarySearch($array, $index, $length, $value, $comparer){}
	/**
	 * @param \T $array
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $length
	 * @param \T|object $value
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: T]
	 * @return \System\Int32|int
	 */
	protected static function InternalBinarySearch($array, $index, $length, $value, $comparer){}
	private static function SwapIfGreater($keys, $comparer, $i, $j){}
	private static function Swap($a, $i, $j){}
	/**
	 * @param \System\Span_1 $keys [generic: T]
	 * @param \System\Comparison_1 $comparer [generic: T]
	 * @return \System\Void|void
	 */
	protected static function IntrospectiveSort($keys, $comparer){}
	private static function IntroSort($keys, $depthLimit, $comparer){}
	private static function PickPivotAndPartition($keys, $comparer){}
	private static function HeapSort($keys, $comparer){}
	private static function DownHeap($keys, $i, $n, $comparer){}
	private static function InsertionSort($keys, $comparer){}
	/**
	 */
	public function __construct(){}
}