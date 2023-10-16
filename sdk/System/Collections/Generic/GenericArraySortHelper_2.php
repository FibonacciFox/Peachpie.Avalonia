<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class GenericArraySortHelper_2 extends \System\Object implements 
	\System\Collections\Generic\IArraySortHelper_2
{
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
	 * @param \System\Int32|int $i
	 * @param \System\Int32|int $j
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SwapIfGreaterWithValues($keys, $values, $i, $j){}
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
	 * @param \System\Int32|int $depthLimit
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IntroSort($keys, $values, $depthLimit){}
	/**
	 * @param \System\Span_1 $keys
	 * @param \System\Span_1 $values
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PickPivotAndPartition($keys, $values){}
	/**
	 * @param \System\Span_1 $keys
	 * @param \System\Span_1 $values
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function HeapSort($keys, $values){}
	/**
	 * @param \System\Span_1 $keys
	 * @param \System\Span_1 $values
	 * @param \System\Int32|int $i
	 * @param \System\Int32|int $n
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DownHeap($keys, $values, $i, $n){}
	/**
	 * @param \System\Span_1 $keys
	 * @param \System\Span_1 $values
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InsertionSort($keys, $values){}
	/**
	 * @param \System\Collections\Generic\TKey& $left
	 * @param \System\Collections\Generic\TKey& $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function LessThan($left, $right){}
	/**
	 * @param \System\Collections\Generic\TKey& $left
	 * @param \System\Collections\Generic\TKey& $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GreaterThan($left, $right){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
