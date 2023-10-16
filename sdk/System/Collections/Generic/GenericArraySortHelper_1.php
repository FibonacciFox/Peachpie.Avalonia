<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GenericArraySortHelper_1MethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function BinarySearch_1($array, $index, $length, $value, $comparer){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function BinarySearch_2($array, $index, $length, $value){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class GenericArraySortHelper_1 extends \System\Object implements 
	\System\Collections\Generic\IArraySortHelper_1
{
	/**
	 * @param \System\Span_1 $keys
	 * @param \System\Collections\Generic\IComparer_1 $comparer
	 * @return \System\Void|void
	 */
	public  function Sort($keys, $comparer){}
	/**
	 * @uses GenericArraySortHelper_1MethodsOverride::BinarySearch_1 ($array, $index, $length, $value, $comparer)
	 * @uses GenericArraySortHelper_1MethodsOverride::BinarySearch_2 ($array, $index, $length, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function BinarySearch(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\T& $i
	 * @param \System\Collections\Generic\T& $j
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SwapIfGreater($i, $j){}
	/**
	 * @param \System\Collections\Generic\T& $i
	 * @param \System\Collections\Generic\T& $j
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Swap($i, $j){}
	/**
	 * @param \System\Span_1 $keys
	 * @param \System\Int32|int $depthLimit
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IntroSort($keys, $depthLimit){}
	/**
	 * @param \System\Span_1 $keys
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PickPivotAndPartition($keys){}
	/**
	 * @param \System\Span_1 $keys
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function HeapSort($keys){}
	/**
	 * @param \System\Span_1 $keys
	 * @param \System\Int32|int $i
	 * @param \System\Int32|int $n
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DownHeap($keys, $i, $n){}
	/**
	 * @param \System\Span_1 $keys
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InsertionSort($keys){}
	/**
	 * @param \System\Collections\Generic\T& $left
	 * @param \System\Collections\Generic\T& $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function LessThan($left, $right){}
	/**
	 * @param \System\Collections\Generic\T& $left
	 * @param \System\Collections\Generic\T& $right
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
