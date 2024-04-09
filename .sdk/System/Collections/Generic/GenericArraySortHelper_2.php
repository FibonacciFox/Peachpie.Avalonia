<?php
namespace System\Collections\Generic;
final class GenericArraySortHelper_2 extends \System\Object implements
	\System\Collections\Generic\IArraySortHelper_2
{

	/**
	 * @param \System\Span_1 $keys [generic: TKey]
	 * @param \System\Span_1 $values [generic: TValue]
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: TKey]
	 * @return \System\Void|void
	 */
	public function Sort($keys, $values, $comparer){}
	private static function SwapIfGreaterWithValues($keys, $values, $i, $j){}
	private static function Swap($keys, $values, $i, $j){}
	private static function IntroSort($keys, $values, $depthLimit){}
	private static function PickPivotAndPartition($keys, $values){}
	private static function HeapSort($keys, $values){}
	private static function DownHeap($keys, $values, $i, $n){}
	private static function InsertionSort($keys, $values){}
	private static function LessThan($left, $right){}
	private static function GreaterThan($left, $right){}
	/**
	 */
	public function __construct(){}
}