<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait GenericArraySortHelper_1Override {
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $length
	 * @param \T|object $value
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: T]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function BinarySearch_1 ($array, $index, $length, $value, $comparer){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $length
	 * @param \T|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function BinarySearch_2 ($array, $index, $length, $value){}
}
final class GenericArraySortHelper_1 extends \System\Object implements
	\System\Collections\Generic\IArraySortHelper_1
{
	use GenericArraySortHelper_1Override;

	/**
	 * @param \System\Span_1 $keys [generic: T]
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: T]
	 * @return \System\Void|void
	 */
	public function Sort($keys, $comparer){}
	/**
	 * @uses GenericArraySortHelper_1Override::BinarySearch_1 <br>public , args: ($array, $index, $length, $value, $comparer)<br>
	 * @uses GenericArraySortHelper_1Override::BinarySearch_2 <br>private , args: ($array, $index, $length, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function BinarySearch (\override ...$args){}
	private static function SwapIfGreater($i, $j){}
	private static function Swap($i, $j){}
	private static function IntroSort($keys, $depthLimit){}
	private static function PickPivotAndPartition($keys){}
	private static function HeapSort($keys){}
	private static function DownHeap($keys, $i, $n){}
	private static function InsertionSort($keys){}
	private static function LessThan($left, $right){}
	private static function GreaterThan($left, $right){}
	/**
	 */
	public function __construct(){}
}