<?php
namespace System\Collections\Generic;
final class ArraySortHelper_2 extends \System\Object implements
	\System\Collections\Generic\IArraySortHelper_2
{

	/**
	 * @property
	 * @var \System\Collections\Generic\IArraySortHelper_2[TKey,TValue]
	 * @since readonly
	 */
	public $Default;
	private static function CreateArraySortHelper(){}
	/**
	 * @param \System\Span_1 $keys [generic: TKey]
	 * @param \System\Span_1 $values [generic: TValue]
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: TKey]
	 * @return \System\Void|void
	 */
	public function Sort($keys, $values, $comparer){}
	private static function SwapIfGreaterWithValues($keys, $values, $comparer, $i, $j){}
	private static function Swap($keys, $values, $i, $j){}
	/**
	 * @param \System\Span_1 $keys [generic: TKey]
	 * @param \System\Span_1 $values [generic: TValue]
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: TKey]
	 * @return \System\Void|void
	 */
	protected static function IntrospectiveSort($keys, $values, $comparer){}
	private static function IntroSort($keys, $values, $depthLimit, $comparer){}
	private static function PickPivotAndPartition($keys, $values, $comparer){}
	private static function HeapSort($keys, $values, $comparer){}
	private static function DownHeap($keys, $values, $i, $n, $comparer){}
	private static function InsertionSort($keys, $values, $comparer){}
	/**
	 */
	public function __construct(){}
}