<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ArraySortHelper_2 extends \System\Object implements 
	\System\Collections\Generic\IArraySortHelper_2
{
	/**
	 * @var \System\Collections\Generic\IArraySortHelper_2[TKey,TValue]
	 * @property
	 */
	public readonly $Default;
	/**
	 * @return \System\Collections\Generic\IArraySortHelper_2
	 */
	public static function get_Default(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateArraySortHelper(){}
	/**
	 * @param \System\Span_1 $keys
	 * @param \System\Span_1 $values
	 * @param \System\Collections\Generic\IComparer_1 $comparer
	 * @return \System\Void|void
	 */
	public  function Sort($keys, $values, $comparer){}
	/**
	 * @param \System\Span_1 $keys
	 * @param \System\Span_1 $values
	 * @param \System\Collections\Generic\IComparer_1 $comparer
	 * @param \System\Int32|int $i
	 * @param \System\Int32|int $j
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SwapIfGreaterWithValues($keys, $values, $comparer, $i, $j){}
	/**
	 * @param \System\Span_1 $keys
	 * @param \System\Span_1 $values
	 * @param \System\Int32|int $i
	 * @param \System\Int32|int $j
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Swap($keys, $values, $i, $j){}
	/**
	 * @param \System\Span_1 $keys
	 * @param \System\Span_1 $values
	 * @param \System\Collections\Generic\IComparer_1 $comparer
	 * @return \System\Void|void
	 */
	protected static function IntrospectiveSort($keys, $values, $comparer){}
	/**
	 * @param \System\Span_1 $keys
	 * @param \System\Span_1 $values
	 * @param \System\Int32|int $depthLimit
	 * @param \System\Collections\Generic\IComparer_1 $comparer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IntroSort($keys, $values, $depthLimit, $comparer){}
	/**
	 * @param \System\Span_1 $keys
	 * @param \System\Span_1 $values
	 * @param \System\Collections\Generic\IComparer_1 $comparer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PickPivotAndPartition($keys, $values, $comparer){}
	/**
	 * @param \System\Span_1 $keys
	 * @param \System\Span_1 $values
	 * @param \System\Collections\Generic\IComparer_1 $comparer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function HeapSort($keys, $values, $comparer){}
	/**
	 * @param \System\Span_1 $keys
	 * @param \System\Span_1 $values
	 * @param \System\Int32|int $i
	 * @param \System\Int32|int $n
	 * @param \System\Collections\Generic\IComparer_1 $comparer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DownHeap($keys, $values, $i, $n, $comparer){}
	/**
	 * @param \System\Span_1 $keys
	 * @param \System\Span_1 $values
	 * @param \System\Collections\Generic\IComparer_1 $comparer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InsertionSort($keys, $values, $comparer){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
