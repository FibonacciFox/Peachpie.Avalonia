<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ArraySortHelper_1MethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Sort_1($keys, $comparer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function Sort_2($keys, $comparer){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ArraySortHelper_1 extends \System\Object implements 
	\System\Collections\Generic\IArraySortHelper_1
{
	/**
	 * @var \System\Collections\Generic\IArraySortHelper_1[T]
	 * @property
	 */
	public readonly $Default;
	/**
	 * @return \System\Collections\Generic\IArraySortHelper_1
	 */
	public static function get_Default(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateArraySortHelper(){}
	/**
	 * @uses ArraySortHelper_1MethodsOverride::Sort_1 ($keys, $comparer)
	 * @uses ArraySortHelper_1MethodsOverride::Sort_2 ($keys, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Sort(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\T[] $array
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $length
	 * @param \System\Collections\Generic\T $value
	 * @param \System\Collections\Generic\IComparer_1 $comparer
	 * @return \System\Int32|int
	 */
	public  function BinarySearch($array, $index, $length, $value, $comparer){}
	/**
	 * @param \System\Collections\Generic\T[] $array
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $length
	 * @param \System\Collections\Generic\T $value
	 * @param \System\Collections\Generic\IComparer_1 $comparer
	 * @return \System\Int32|int
	 */
	protected static function InternalBinarySearch($array, $index, $length, $value, $comparer){}
	/**
	 * @param \System\Span_1 $keys
	 * @param \System\Comparison_1 $comparer
	 * @param \System\Int32|int $i
	 * @param \System\Int32|int $j
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SwapIfGreater($keys, $comparer, $i, $j){}
	/**
	 * @param \System\Span_1 $a
	 * @param \System\Int32|int $i
	 * @param \System\Int32|int $j
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Swap($a, $i, $j){}
	/**
	 * @param \System\Span_1 $keys
	 * @param \System\Comparison_1 $comparer
	 * @return \System\Void|void
	 */
	protected static function IntrospectiveSort($keys, $comparer){}
	/**
	 * @param \System\Span_1 $keys
	 * @param \System\Int32|int $depthLimit
	 * @param \System\Comparison_1 $comparer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IntroSort($keys, $depthLimit, $comparer){}
	/**
	 * @param \System\Span_1 $keys
	 * @param \System\Comparison_1 $comparer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PickPivotAndPartition($keys, $comparer){}
	/**
	 * @param \System\Span_1 $keys
	 * @param \System\Comparison_1 $comparer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function HeapSort($keys, $comparer){}
	/**
	 * @param \System\Span_1 $keys
	 * @param \System\Int32|int $i
	 * @param \System\Int32|int $n
	 * @param \System\Comparison_1 $comparer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DownHeap($keys, $i, $n, $comparer){}
	/**
	 * @param \System\Span_1 $keys
	 * @param \System\Comparison_1 $comparer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InsertionSort($keys, $comparer){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
