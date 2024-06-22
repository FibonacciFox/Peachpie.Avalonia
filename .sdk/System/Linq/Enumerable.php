<?php
namespace System\Linq;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EnumerableOverride {
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_3 $func [generic: TSource,TSource,TSource]
	 * @return \TSource
	 */
	#[MethodOverride]public static function Aggregate_1 ($source, $func){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \TAccumulate $seed
	 * @param \System\Func_3 $func [generic: TAccumulate,TSource,TAccumulate]
	 * @return \TAccumulate
	 */
	#[MethodOverride]public static function Aggregate_2 ($source, $seed, $func){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \TAccumulate $seed
	 * @param \System\Func_3 $func [generic: TAccumulate,TSource,TAccumulate]
	 * @param \System\Func_2 $resultSelector [generic: TAccumulate,TResult]
	 * @return \TResult
	 */
	#[MethodOverride]public static function Aggregate_3 ($source, $seed, $func, $resultSelector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function Any_1 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $predicate [generic: TSource,System\Boolean]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function Any_2 ($source, $predicate){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Int32]
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function Average_1 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Int64]
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function Average_2 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Single]
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Average_3 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Double]
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function Average_4 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Decimal]
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Average_5 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @return \TResult
	 */
	#[MethodOverride]private static function Average_6 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Nullable_1[System\Int32]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Average_7 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Nullable_1[System\Int64]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Average_8 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Nullable_1[System\Single]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Average_9 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Nullable_1[System\Double]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Average_10 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Nullable_1[System\Decimal]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Average_11 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Nullable_1[TSource]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]private static function Average_12 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Int32]
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function Average_13 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Int64]
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function Average_14 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Single]
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Average_15 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Double]
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function Average_16 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Decimal]
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Average_17 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,TSelector]
	 * @return \TResult
	 */
	#[MethodOverride]private static function Average_18 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Nullable_1[System\Int32]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Average_19 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Nullable_1[System\Int64]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Average_20 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Nullable_1[System\Single]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Average_21 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Nullable_1[System\Double]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Average_22 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Nullable_1[System\Decimal]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Average_23 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Nullable_1[TSelector]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]private static function Average_24 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \TSource $value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function Contains_1 ($source, $value){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \TSource $value
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TSource]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function Contains_2 ($source, $value, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Count_1 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $predicate [generic: TSource,System\Boolean]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Count_2 ($source, $predicate){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function LongCount_1 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $predicate [generic: TSource,System\Boolean]
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function LongCount_2 ($source, $predicate){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function DefaultIfEmpty_1 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \TSource $defaultValue
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function DefaultIfEmpty_2 ($source, $defaultValue){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function Distinct_1 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TSource]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function Distinct_2 ($source, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function DistinctBy_1 ($source, $keySelector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TKey]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function DistinctBy_2 ($source, $keySelector, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Int32|int $index
	 * @return \TSource
	 */
	#[MethodOverride]public static function ElementAt_1 ($source, $index){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Index $index
	 * @return \TSource
	 */
	#[MethodOverride]public static function ElementAt_2 ($source, $index){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Int32|int $index
	 * @return \TSource
	 */
	#[MethodOverride]public static function ElementAtOrDefault_1 ($source, $index){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Index $index
	 * @return \TSource
	 */
	#[MethodOverride]public static function ElementAtOrDefault_2 ($source, $index){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $first [generic: TSource]
	 * @param \System\Collections\Generic\IEnumerable_1 $second [generic: TSource]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function Except_1 ($first, $second){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $first [generic: TSource]
	 * @param \System\Collections\Generic\IEnumerable_1 $second [generic: TSource]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TSource]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function Except_2 ($first, $second, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $first [generic: TSource]
	 * @param \System\Collections\Generic\IEnumerable_1 $second [generic: TKey]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function ExceptBy_1 ($first, $second, $keySelector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $first [generic: TSource]
	 * @param \System\Collections\Generic\IEnumerable_1 $second [generic: TKey]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TKey]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function ExceptBy_2 ($first, $second, $keySelector, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @return \TSource
	 */
	#[MethodOverride]public static function First_1 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $predicate [generic: TSource,System\Boolean]
	 * @return \TSource
	 */
	#[MethodOverride]public static function First_2 ($source, $predicate){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @return \TSource
	 */
	#[MethodOverride]public static function FirstOrDefault_1 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \TSource $defaultValue
	 * @return \TSource
	 */
	#[MethodOverride]public static function FirstOrDefault_2 ($source, $defaultValue){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $predicate [generic: TSource,System\Boolean]
	 * @return \TSource
	 */
	#[MethodOverride]public static function FirstOrDefault_3 ($source, $predicate){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $predicate [generic: TSource,System\Boolean]
	 * @param \TSource $defaultValue
	 * @return \TSource
	 */
	#[MethodOverride]public static function FirstOrDefault_4 ($source, $predicate, $defaultValue){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Boolean& &$found
	 * @return \TSource
	 */
	#[MethodOverride]private static function TryGetFirst_1 ($source, &$found){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $predicate [generic: TSource,System\Boolean]
	 * @param \System\Boolean& &$found
	 * @return \TSource
	 */
	#[MethodOverride]private static function TryGetFirst_2 ($source, $predicate, &$found){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function GroupBy_1 ($source, $keySelector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TKey]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function GroupBy_2 ($source, $keySelector, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @param \System\Func_2 $elementSelector [generic: TSource,TElement]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function GroupBy_3 ($source, $keySelector, $elementSelector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @param \System\Func_2 $elementSelector [generic: TSource,TElement]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TKey]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function GroupBy_4 ($source, $keySelector, $elementSelector, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @param \System\Func_3 $resultSelector [generic: TKey,System\Collections\Generic\IEnumerable_1[TSource]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function GroupBy_5 ($source, $keySelector, $resultSelector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @param \System\Func_2 $elementSelector [generic: TSource,TElement]
	 * @param \System\Func_3 $resultSelector [generic: TKey,System\Collections\Generic\IEnumerable_1[TElement]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function GroupBy_6 ($source, $keySelector, $elementSelector, $resultSelector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @param \System\Func_3 $resultSelector [generic: TKey,System\Collections\Generic\IEnumerable_1[TSource]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TKey]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function GroupBy_7 ($source, $keySelector, $resultSelector, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @param \System\Func_2 $elementSelector [generic: TSource,TElement]
	 * @param \System\Func_3 $resultSelector [generic: TKey,System\Collections\Generic\IEnumerable_1[TElement]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TKey]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function GroupBy_8 ($source, $keySelector, $elementSelector, $resultSelector, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $outer [generic: TOuter]
	 * @param \System\Collections\Generic\IEnumerable_1 $inner [generic: TInner]
	 * @param \System\Func_2 $outerKeySelector [generic: TOuter,TKey]
	 * @param \System\Func_2 $innerKeySelector [generic: TInner,TKey]
	 * @param \System\Func_3 $resultSelector [generic: TOuter,System\Collections\Generic\IEnumerable_1[TInner]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function GroupJoin_1 ($outer, $inner, $outerKeySelector, $innerKeySelector, $resultSelector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $outer [generic: TOuter]
	 * @param \System\Collections\Generic\IEnumerable_1 $inner [generic: TInner]
	 * @param \System\Func_2 $outerKeySelector [generic: TOuter,TKey]
	 * @param \System\Func_2 $innerKeySelector [generic: TInner,TKey]
	 * @param \System\Func_3 $resultSelector [generic: TOuter,System\Collections\Generic\IEnumerable_1[TInner]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TKey]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function GroupJoin_2 ($outer, $inner, $outerKeySelector, $innerKeySelector, $resultSelector, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $first [generic: TSource]
	 * @param \System\Collections\Generic\IEnumerable_1 $second [generic: TSource]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function Intersect_1 ($first, $second){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $first [generic: TSource]
	 * @param \System\Collections\Generic\IEnumerable_1 $second [generic: TSource]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TSource]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function Intersect_2 ($first, $second, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $first [generic: TSource]
	 * @param \System\Collections\Generic\IEnumerable_1 $second [generic: TKey]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function IntersectBy_1 ($first, $second, $keySelector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $first [generic: TSource]
	 * @param \System\Collections\Generic\IEnumerable_1 $second [generic: TKey]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TKey]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function IntersectBy_2 ($first, $second, $keySelector, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $outer [generic: TOuter]
	 * @param \System\Collections\Generic\IEnumerable_1 $inner [generic: TInner]
	 * @param \System\Func_2 $outerKeySelector [generic: TOuter,TKey]
	 * @param \System\Func_2 $innerKeySelector [generic: TInner,TKey]
	 * @param \System\Func_3 $resultSelector [generic: TOuter,TInner,TResult]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function Join_1 ($outer, $inner, $outerKeySelector, $innerKeySelector, $resultSelector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $outer [generic: TOuter]
	 * @param \System\Collections\Generic\IEnumerable_1 $inner [generic: TInner]
	 * @param \System\Func_2 $outerKeySelector [generic: TOuter,TKey]
	 * @param \System\Func_2 $innerKeySelector [generic: TInner,TKey]
	 * @param \System\Func_3 $resultSelector [generic: TOuter,TInner,TResult]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TKey]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function Join_2 ($outer, $inner, $outerKeySelector, $innerKeySelector, $resultSelector, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @return \TSource
	 */
	#[MethodOverride]public static function Last_1 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $predicate [generic: TSource,System\Boolean]
	 * @return \TSource
	 */
	#[MethodOverride]public static function Last_2 ($source, $predicate){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @return \TSource
	 */
	#[MethodOverride]public static function LastOrDefault_1 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \TSource $defaultValue
	 * @return \TSource
	 */
	#[MethodOverride]public static function LastOrDefault_2 ($source, $defaultValue){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $predicate [generic: TSource,System\Boolean]
	 * @return \TSource
	 */
	#[MethodOverride]public static function LastOrDefault_3 ($source, $predicate){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $predicate [generic: TSource,System\Boolean]
	 * @param \TSource $defaultValue
	 * @return \TSource
	 */
	#[MethodOverride]public static function LastOrDefault_4 ($source, $predicate, $defaultValue){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Boolean& &$found
	 * @return \TSource
	 */
	#[MethodOverride]private static function TryGetLast_1 ($source, &$found){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $predicate [generic: TSource,System\Boolean]
	 * @param \System\Boolean& &$found
	 * @return \TSource
	 */
	#[MethodOverride]private static function TryGetLast_2 ($source, $predicate, &$found){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @return \System\Linq\ILookup_2
	 */
	#[MethodOverride]public static function ToLookup_1 ($source, $keySelector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TKey]
	 * @return \System\Linq\ILookup_2
	 */
	#[MethodOverride]public static function ToLookup_2 ($source, $keySelector, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @param \System\Func_2 $elementSelector [generic: TSource,TElement]
	 * @return \System\Linq\ILookup_2
	 */
	#[MethodOverride]public static function ToLookup_3 ($source, $keySelector, $elementSelector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @param \System\Func_2 $elementSelector [generic: TSource,TElement]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TKey]
	 * @return \System\Linq\ILookup_2
	 */
	#[MethodOverride]public static function ToLookup_4 ($source, $keySelector, $elementSelector, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Int32]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Max_1 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Nullable_1[System\Int32]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Max_2 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Int64]
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function Max_3 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Nullable_1[System\Int64]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Max_4 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Double]
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function Max_5 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Nullable_1[System\Double]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Max_6 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Single]
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Max_7 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Nullable_1[System\Single]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Max_8 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Decimal]
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Max_9 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Nullable_1[System\Decimal]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Max_10 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @return \TSource
	 */
	#[MethodOverride]public static function Max_11 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: TSource]
	 * @return \TSource
	 */
	#[MethodOverride]public static function Max_12 ($source, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Int32]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Max_13 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Nullable_1[System\Int32]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Max_14 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Int64]
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function Max_15 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Nullable_1[System\Int64]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Max_16 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Single]
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Max_17 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Nullable_1[System\Single]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Max_18 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Double]
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function Max_19 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Nullable_1[System\Double]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Max_20 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Decimal]
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Max_21 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Nullable_1[System\Decimal]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Max_22 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,TResult]
	 * @return \TResult
	 */
	#[MethodOverride]public static function Max_23 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: T]
	 * @return \T|object
	 */
	#[MethodOverride]private static function MaxInteger_1 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Nullable_1[T]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]private static function MaxInteger_2 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,TResult]
	 * @return \TResult
	 */
	#[MethodOverride]private static function MaxInteger_3 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Nullable_1[TResult]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]private static function MaxInteger_4 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: T]
	 * @return \T|object
	 */
	#[MethodOverride]private static function MaxFloat_1 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Nullable_1[T]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]private static function MaxFloat_2 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,TResult]
	 * @return \TResult
	 */
	#[MethodOverride]private static function MaxFloat_3 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Nullable_1[TResult]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]private static function MaxFloat_4 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @return \TSource
	 */
	#[MethodOverride]public static function MaxBy_1 ($source, $keySelector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: TKey]
	 * @return \TSource
	 */
	#[MethodOverride]public static function MaxBy_2 ($source, $keySelector, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Int32]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Min_1 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Int64]
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function Min_2 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Nullable_1[System\Int32]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Min_3 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Nullable_1[System\Int64]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Min_4 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Single]
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Min_5 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Nullable_1[System\Single]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Min_6 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Double]
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function Min_7 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Nullable_1[System\Double]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Min_8 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Decimal]
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Min_9 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Nullable_1[System\Decimal]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Min_10 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @return \TSource
	 */
	#[MethodOverride]public static function Min_11 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: TSource]
	 * @return \TSource
	 */
	#[MethodOverride]public static function Min_12 ($source, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Int32]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Min_13 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Nullable_1[System\Int32]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Min_14 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Int64]
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function Min_15 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Nullable_1[System\Int64]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Min_16 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Single]
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Min_17 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Nullable_1[System\Single]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Min_18 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Double]
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function Min_19 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Nullable_1[System\Double]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Min_20 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Decimal]
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Min_21 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Nullable_1[System\Decimal]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Min_22 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,TResult]
	 * @return \TResult
	 */
	#[MethodOverride]public static function Min_23 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: T]
	 * @return \T|object
	 */
	#[MethodOverride]private static function MinInteger_1 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Nullable_1[T]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]private static function MinInteger_2 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,TResult]
	 * @return \TResult
	 */
	#[MethodOverride]private static function MinInteger_3 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Nullable_1[TResult]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]private static function MinInteger_4 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: T]
	 * @return \T|object
	 */
	#[MethodOverride]private static function MinFloat_1 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Nullable_1[T]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]private static function MinFloat_2 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,TResult]
	 * @return \TResult
	 */
	#[MethodOverride]private static function MinFloat_3 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Nullable_1[TResult]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]private static function MinFloat_4 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @return \TSource
	 */
	#[MethodOverride]public static function MinBy_1 ($source, $keySelector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: TKey]
	 * @return \TSource
	 */
	#[MethodOverride]public static function MinBy_2 ($source, $keySelector, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: T]
	 * @return \System\Linq\IOrderedEnumerable_1
	 */
	#[MethodOverride]public static function Order_1 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: T]
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: T]
	 * @return \System\Linq\IOrderedEnumerable_1
	 */
	#[MethodOverride]public static function Order_2 ($source, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @return \System\Linq\IOrderedEnumerable_1
	 */
	#[MethodOverride]public static function OrderBy_1 ($source, $keySelector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: TKey]
	 * @return \System\Linq\IOrderedEnumerable_1
	 */
	#[MethodOverride]public static function OrderBy_2 ($source, $keySelector, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: T]
	 * @return \System\Linq\IOrderedEnumerable_1
	 */
	#[MethodOverride]public static function OrderDescending_1 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: T]
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: T]
	 * @return \System\Linq\IOrderedEnumerable_1
	 */
	#[MethodOverride]public static function OrderDescending_2 ($source, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @return \System\Linq\IOrderedEnumerable_1
	 */
	#[MethodOverride]public static function OrderByDescending_1 ($source, $keySelector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: TKey]
	 * @return \System\Linq\IOrderedEnumerable_1
	 */
	#[MethodOverride]public static function OrderByDescending_2 ($source, $keySelector, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Linq\IOrderedEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @return \System\Linq\IOrderedEnumerable_1
	 */
	#[MethodOverride]public static function ThenBy_1 ($source, $keySelector){}
	/**
	 * @deprecated
	 * @param \System\Linq\IOrderedEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: TKey]
	 * @return \System\Linq\IOrderedEnumerable_1
	 */
	#[MethodOverride]public static function ThenBy_2 ($source, $keySelector, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Linq\IOrderedEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @return \System\Linq\IOrderedEnumerable_1
	 */
	#[MethodOverride]public static function ThenByDescending_1 ($source, $keySelector){}
	/**
	 * @deprecated
	 * @param \System\Linq\IOrderedEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: TKey]
	 * @return \System\Linq\IOrderedEnumerable_1
	 */
	#[MethodOverride]public static function ThenByDescending_2 ($source, $keySelector, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,TResult]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function Select_1 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_3 $selector [generic: TSource,System\Int32,TResult]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function Select_2 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Collections\Generic\IEnumerable_1[TResult]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function SelectMany_1 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_3 $selector [generic: TSource,System\Int32,System\Collections\Generic\IEnumerable_1[TResult]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function SelectMany_2 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_3 $collectionSelector [generic: TSource,System\Int32,System\Collections\Generic\IEnumerable_1[TCollection]
	 * @param \System\Func_3 $resultSelector [generic: TSource,TCollection,TResult]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function SelectMany_3 ($source, $collectionSelector, $resultSelector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $collectionSelector [generic: TSource,System\Collections\Generic\IEnumerable_1[TCollection]
	 * @param \System\Func_3 $resultSelector [generic: TSource,TCollection,TResult]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function SelectMany_4 ($source, $collectionSelector, $resultSelector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_3 $selector [generic: TSource,System\Int32,System\Collections\Generic\IEnumerable_1[TResult]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]private static function SelectManyIterator_1 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_3 $collectionSelector [generic: TSource,System\Int32,System\Collections\Generic\IEnumerable_1[TCollection]
	 * @param \System\Func_3 $resultSelector [generic: TSource,TCollection,TResult]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]private static function SelectManyIterator_2 ($source, $collectionSelector, $resultSelector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $collectionSelector [generic: TSource,System\Collections\Generic\IEnumerable_1[TCollection]
	 * @param \System\Func_3 $resultSelector [generic: TSource,TCollection,TResult]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]private static function SelectManyIterator_3 ($source, $collectionSelector, $resultSelector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $first [generic: TSource]
	 * @param \System\Collections\Generic\IEnumerable_1 $second [generic: TSource]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function SequenceEqual_1 ($first, $second){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $first [generic: TSource]
	 * @param \System\Collections\Generic\IEnumerable_1 $second [generic: TSource]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TSource]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function SequenceEqual_2 ($first, $second, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @return \TSource
	 */
	#[MethodOverride]public static function Single_1 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $predicate [generic: TSource,System\Boolean]
	 * @return \TSource
	 */
	#[MethodOverride]public static function Single_2 ($source, $predicate){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @return \TSource
	 */
	#[MethodOverride]public static function SingleOrDefault_1 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \TSource $defaultValue
	 * @return \TSource
	 */
	#[MethodOverride]public static function SingleOrDefault_2 ($source, $defaultValue){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $predicate [generic: TSource,System\Boolean]
	 * @return \TSource
	 */
	#[MethodOverride]public static function SingleOrDefault_3 ($source, $predicate){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $predicate [generic: TSource,System\Boolean]
	 * @param \TSource $defaultValue
	 * @return \TSource
	 */
	#[MethodOverride]public static function SingleOrDefault_4 ($source, $predicate, $defaultValue){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Boolean& &$found
	 * @return \TSource
	 */
	#[MethodOverride]private static function TryGetSingle_1 ($source, &$found){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $predicate [generic: TSource,System\Boolean]
	 * @param \System\Boolean& &$found
	 * @return \TSource
	 */
	#[MethodOverride]private static function TryGetSingle_2 ($source, $predicate, &$found){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $predicate [generic: TSource,System\Boolean]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function SkipWhile_1 ($source, $predicate){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_3 $predicate [generic: TSource,System\Int32,System\Boolean]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function SkipWhile_2 ($source, $predicate){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $predicate [generic: TSource,System\Boolean]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]private static function SkipWhileIterator_1 ($source, $predicate){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_3 $predicate [generic: TSource,System\Int32,System\Boolean]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]private static function SkipWhileIterator_2 ($source, $predicate){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Int32]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Sum_1 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Int64]
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function Sum_2 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Single]
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Sum_3 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Double]
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function Sum_4 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Decimal]
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Sum_5 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @return \TResult
	 */
	#[MethodOverride]private static function Sum_6 ($source){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $span [generic: T]
	 * @return \TResult
	 */
	#[MethodOverride]private static function Sum_7 ($span){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Nullable_1[System\Int32]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Sum_8 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Nullable_1[System\Int64]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Sum_9 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Nullable_1[System\Single]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Sum_10 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Nullable_1[System\Double]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Sum_11 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Nullable_1[System\Decimal]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Sum_12 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: System\Nullable_1[TSource]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]private static function Sum_13 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Int32]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Sum_14 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Int64]
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function Sum_15 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Single]
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Sum_16 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Double]
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function Sum_17 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Decimal]
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Sum_18 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,TResult]
	 * @return \TResult
	 */
	#[MethodOverride]private static function Sum_19 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Nullable_1[System\Int32]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Sum_20 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Nullable_1[System\Int64]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Sum_21 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Nullable_1[System\Single]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Sum_22 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Nullable_1[System\Double]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Sum_23 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Nullable_1[System\Decimal]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function Sum_24 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,System\Nullable_1[TResult]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]private static function Sum_25 ($source, $selector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Int32|int $count
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function Take_1 ($source, $count){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Range $range
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function Take_2 ($source, $range){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $predicate [generic: TSource,System\Boolean]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function TakeWhile_1 ($source, $predicate){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_3 $predicate [generic: TSource,System\Int32,System\Boolean]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function TakeWhile_2 ($source, $predicate){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $predicate [generic: TSource,System\Boolean]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]private static function TakeWhileIterator_1 ($source, $predicate){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_3 $predicate [generic: TSource,System\Int32,System\Boolean]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]private static function TakeWhileIterator_2 ($source, $predicate){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @return \System\Collections\Generic\Dictionary_2
	 */
	#[MethodOverride]public static function ToDictionary_1 ($source, $keySelector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TKey]
	 * @return \System\Collections\Generic\Dictionary_2
	 */
	#[MethodOverride]public static function ToDictionary_2 ($source, $keySelector, $comparer){}
	/**
	 * @deprecated
	 * @param \TSource $source
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TKey]
	 * @return \System\Collections\Generic\Dictionary_2
	 */
	#[MethodOverride]private static function ToDictionary_3 ($source, $keySelector, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\List_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TKey]
	 * @return \System\Collections\Generic\Dictionary_2
	 */
	#[MethodOverride]private static function ToDictionary_4 ($source, $keySelector, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @param \System\Func_2 $elementSelector [generic: TSource,TElement]
	 * @return \System\Collections\Generic\Dictionary_2
	 */
	#[MethodOverride]public static function ToDictionary_5 ($source, $keySelector, $elementSelector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @param \System\Func_2 $elementSelector [generic: TSource,TElement]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TKey]
	 * @return \System\Collections\Generic\Dictionary_2
	 */
	#[MethodOverride]public static function ToDictionary_6 ($source, $keySelector, $elementSelector, $comparer){}
	/**
	 * @deprecated
	 * @param \TSource $source
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @param \System\Func_2 $elementSelector [generic: TSource,TElement]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TKey]
	 * @return \System\Collections\Generic\Dictionary_2
	 */
	#[MethodOverride]private static function ToDictionary_7 ($source, $keySelector, $elementSelector, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\List_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @param \System\Func_2 $elementSelector [generic: TSource,TElement]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TKey]
	 * @return \System\Collections\Generic\Dictionary_2
	 */
	#[MethodOverride]private static function ToDictionary_8 ($source, $keySelector, $elementSelector, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @return \System\Collections\Generic\HashSet_1
	 */
	#[MethodOverride]public static function ToHashSet_1 ($source){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TSource]
	 * @return \System\Collections\Generic\HashSet_1
	 */
	#[MethodOverride]public static function ToHashSet_2 ($source, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $first [generic: TSource]
	 * @param \System\Collections\Generic\IEnumerable_1 $second [generic: TSource]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function Union_1 ($first, $second){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $first [generic: TSource]
	 * @param \System\Collections\Generic\IEnumerable_1 $second [generic: TSource]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TSource]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function Union_2 ($first, $second, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $first [generic: TSource]
	 * @param \System\Collections\Generic\IEnumerable_1 $second [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function UnionBy_1 ($first, $second, $keySelector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $first [generic: TSource]
	 * @param \System\Collections\Generic\IEnumerable_1 $second [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TKey]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function UnionBy_2 ($first, $second, $keySelector, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $predicate [generic: TSource,System\Boolean]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function Where_1 ($source, $predicate){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_3 $predicate [generic: TSource,System\Int32,System\Boolean]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function Where_2 ($source, $predicate){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $first [generic: TFirst]
	 * @param \System\Collections\Generic\IEnumerable_1 $second [generic: TSecond]
	 * @param \System\Func_3 $resultSelector [generic: TFirst,TSecond,TResult]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function Zip_1 ($first, $second, $resultSelector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $first [generic: TFirst]
	 * @param \System\Collections\Generic\IEnumerable_1 $second [generic: TSecond]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function Zip_2 ($first, $second){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $first [generic: TFirst]
	 * @param \System\Collections\Generic\IEnumerable_1 $second [generic: TSecond]
	 * @param \System\Collections\Generic\IEnumerable_1 $third [generic: TThird]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function Zip_3 ($first, $second, $third){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $first [generic: TFirst]
	 * @param \System\Collections\Generic\IEnumerable_1 $second [generic: TSecond]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]private static function ZipIterator_1 ($first, $second){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $first [generic: TFirst]
	 * @param \System\Collections\Generic\IEnumerable_1 $second [generic: TSecond]
	 * @param \System\Func_3 $resultSelector [generic: TFirst,TSecond,TResult]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]private static function ZipIterator_2 ($first, $second, $resultSelector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $first [generic: TFirst]
	 * @param \System\Collections\Generic\IEnumerable_1 $second [generic: TSecond]
	 * @param \System\Collections\Generic\IEnumerable_1 $third [generic: TThird]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]private static function ZipIterator_3 ($first, $second, $third){}
}
class Enumerable extends \System\Object
{
	use EnumerableOverride;


	/**
	 * @return \System\Collections\Generic\IEnumerable_1[TResult]
	 */
	public static function Empty(){}
	private static function SkipIterator($source, $count){}
	private static function TakeIterator($source, $count){}
	private static function TakeRangeIterator($source, $startIndex, $endIndex){}
	/**
	 * @uses EnumerableOverride::Aggregate_1 <br>public , args: ($source, $func)<br>
	 * @uses EnumerableOverride::Aggregate_2 <br>public , args: ($source, $seed, $func)<br>
	 * @uses EnumerableOverride::Aggregate_3 <br>public , args: ($source, $seed, $func, $resultSelector)<br>
	 * @var mixed|\override ...$args
	 * @return \TSource|\TAccumulate|\TResult|mixed|\override
	 */
	#[MethodOverridePublic]function Aggregate (\override ...$args){}
	/**
	 * @uses EnumerableOverride::Any_1 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Any_2 <br>public , args: ($source, $predicate)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function Any (\override ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $predicate [generic: TSource,System\Boolean]
	 * @return \System\Boolean|bool
	 */
	public static function All($source, $predicate){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \TSource $element
	 * @return \System\Collections\Generic\IEnumerable_1[TSource]
	 */
	public static function Append($source, $element){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \TSource $element
	 * @return \System\Collections\Generic\IEnumerable_1[TSource]
	 */
	public static function Prepend($source, $element){}
	/**
	 * @uses EnumerableOverride::Average_1 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Average_2 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Average_3 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Average_4 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Average_5 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Average_6 <br>private , args: ($source)<br>
	 * @uses EnumerableOverride::Average_7 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Average_8 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Average_9 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Average_10 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Average_11 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Average_12 <br>private , args: ($source)<br>
	 * @uses EnumerableOverride::Average_13 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Average_14 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Average_15 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Average_16 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Average_17 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Average_18 <br>private , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Average_19 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Average_20 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Average_21 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Average_22 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Average_23 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Average_24 <br>private , args: ($source, $selector)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Double|double|\System\Single|\System\Decimal|\TResult|\System\Nullable_1|mixed|\override
	 */
	#[MethodOverridePublic]function Average (\override ...$args){}
	/**
	 * @param \System\Collections\IEnumerable $source
	 * @return \System\Collections\Generic\IEnumerable_1[TResult]
	 */
	public static function OfType($source){}
	private static function OfTypeIterator($source){}
	/**
	 * @param \System\Collections\IEnumerable $source
	 * @return \System\Collections\Generic\IEnumerable_1[TResult]
	 */
	public static function Cast($source){}
	private static function CastIterator($source){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Int32|int $size
	 * @return \System\Collections\Generic\IEnumerable_1[TSource[]]
	 */
	public static function Chunk($source, $size){}
	private static function ChunkIterator($source, $size){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $first [generic: TSource]
	 * @param \System\Collections\Generic\IEnumerable_1 $second [generic: TSource]
	 * @return \System\Collections\Generic\IEnumerable_1[TSource]
	 */
	public static function Concat($first, $second){}
	/**
	 * @uses EnumerableOverride::Contains_1 <br>public , args: ($source, $value)<br>
	 * @uses EnumerableOverride::Contains_2 <br>public , args: ($source, $value, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function Contains (\override ...$args){}
	/**
	 * @uses EnumerableOverride::Count_1 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Count_2 <br>public , args: ($source, $predicate)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function Count (\override ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Int32& &$count
	 * @return \System\Boolean|bool
	 */
	public static function TryGetNonEnumeratedCount($source, &$count){}
	/**
	 * @uses EnumerableOverride::LongCount_1 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::LongCount_2 <br>public , args: ($source, $predicate)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int64|int|mixed|\override
	 */
	#[MethodOverridePublic]function LongCount (\override ...$args){}
	/**
	 * @uses EnumerableOverride::DefaultIfEmpty_1 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::DefaultIfEmpty_2 <br>public , args: ($source, $defaultValue)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function DefaultIfEmpty (\override ...$args){}
	/**
	 * @uses EnumerableOverride::Distinct_1 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Distinct_2 <br>public , args: ($source, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function Distinct (\override ...$args){}
	/**
	 * @uses EnumerableOverride::DistinctBy_1 <br>public , args: ($source, $keySelector)<br>
	 * @uses EnumerableOverride::DistinctBy_2 <br>public , args: ($source, $keySelector, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function DistinctBy (\override ...$args){}
	private static function DistinctByIterator($source, $keySelector, $comparer){}
	/**
	 * @uses EnumerableOverride::ElementAt_1 <br>public , args: ($source, $index)<br>
	 * @uses EnumerableOverride::ElementAt_2 <br>public , args: ($source, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \TSource|mixed|\override
	 */
	#[MethodOverridePublic]function ElementAt (\override ...$args){}
	/**
	 * @uses EnumerableOverride::ElementAtOrDefault_1 <br>public , args: ($source, $index)<br>
	 * @uses EnumerableOverride::ElementAtOrDefault_2 <br>public , args: ($source, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \TSource|mixed|\override
	 */
	#[MethodOverridePublic]function ElementAtOrDefault (\override ...$args){}
	private static function TryGetElement($source, $index, &$element){}
	private static function TryGetElementFromEnd($source, $indexFromEnd, &$element){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @return \System\Collections\Generic\IEnumerable_1[TSource]
	 */
	public static function AsEnumerable($source){}
	private static function TryGetSpan($source, &$span){}
	/**
	 * @uses EnumerableOverride::Except_1 <br>public , args: ($first, $second)<br>
	 * @uses EnumerableOverride::Except_2 <br>public , args: ($first, $second, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function Except (\override ...$args){}
	/**
	 * @uses EnumerableOverride::ExceptBy_1 <br>public , args: ($first, $second, $keySelector)<br>
	 * @uses EnumerableOverride::ExceptBy_2 <br>public , args: ($first, $second, $keySelector, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function ExceptBy (\override ...$args){}
	private static function ExceptIterator($first, $second, $comparer){}
	private static function ExceptByIterator($first, $second, $keySelector, $comparer){}
	/**
	 * @uses EnumerableOverride::First_1 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::First_2 <br>public , args: ($source, $predicate)<br>
	 * @var mixed|\override ...$args
	 * @return \TSource|mixed|\override
	 */
	#[MethodOverridePublic]function First (\override ...$args){}
	/**
	 * @uses EnumerableOverride::FirstOrDefault_1 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::FirstOrDefault_2 <br>public , args: ($source, $defaultValue)<br>
	 * @uses EnumerableOverride::FirstOrDefault_3 <br>public , args: ($source, $predicate)<br>
	 * @uses EnumerableOverride::FirstOrDefault_4 <br>public , args: ($source, $predicate, $defaultValue)<br>
	 * @var mixed|\override ...$args
	 * @return \TSource|mixed|\override
	 */
	#[MethodOverridePublic]function FirstOrDefault (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses EnumerableOverride::TryGetFirst_1 <br>private , args: ($source, &$found)<br>
	 * @uses EnumerableOverride::TryGetFirst_2 <br>private , args: ($source, $predicate, &$found)<br>
	 * @var mixed|\override ...$args
	 * @return \TSource|mixed|\override
	 */
	#[MethodOverridePrivate]function TryGetFirst (\override ...$args){}
	/**
	 * @uses EnumerableOverride::GroupBy_1 <br>public , args: ($source, $keySelector)<br>
	 * @uses EnumerableOverride::GroupBy_2 <br>public , args: ($source, $keySelector, $comparer)<br>
	 * @uses EnumerableOverride::GroupBy_3 <br>public , args: ($source, $keySelector, $elementSelector)<br>
	 * @uses EnumerableOverride::GroupBy_4 <br>public , args: ($source, $keySelector, $elementSelector, $comparer)<br>
	 * @uses EnumerableOverride::GroupBy_5 <br>public , args: ($source, $keySelector, $resultSelector)<br>
	 * @uses EnumerableOverride::GroupBy_6 <br>public , args: ($source, $keySelector, $elementSelector, $resultSelector)<br>
	 * @uses EnumerableOverride::GroupBy_7 <br>public , args: ($source, $keySelector, $resultSelector, $comparer)<br>
	 * @uses EnumerableOverride::GroupBy_8 <br>public , args: ($source, $keySelector, $elementSelector, $resultSelector, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function GroupBy (\override ...$args){}
	/**
	 * @uses EnumerableOverride::GroupJoin_1 <br>public , args: ($outer, $inner, $outerKeySelector, $innerKeySelector, $resultSelector)<br>
	 * @uses EnumerableOverride::GroupJoin_2 <br>public , args: ($outer, $inner, $outerKeySelector, $innerKeySelector, $resultSelector, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function GroupJoin (\override ...$args){}
	private static function GroupJoinIterator($outer, $inner, $outerKeySelector, $innerKeySelector, $resultSelector, $comparer){}
	/**
	 * @uses EnumerableOverride::Intersect_1 <br>public , args: ($first, $second)<br>
	 * @uses EnumerableOverride::Intersect_2 <br>public , args: ($first, $second, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function Intersect (\override ...$args){}
	/**
	 * @uses EnumerableOverride::IntersectBy_1 <br>public , args: ($first, $second, $keySelector)<br>
	 * @uses EnumerableOverride::IntersectBy_2 <br>public , args: ($first, $second, $keySelector, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function IntersectBy (\override ...$args){}
	private static function IntersectIterator($first, $second, $comparer){}
	private static function IntersectByIterator($first, $second, $keySelector, $comparer){}
	/**
	 * @uses EnumerableOverride::Join_1 <br>public , args: ($outer, $inner, $outerKeySelector, $innerKeySelector, $resultSelector)<br>
	 * @uses EnumerableOverride::Join_2 <br>public , args: ($outer, $inner, $outerKeySelector, $innerKeySelector, $resultSelector, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function Join (\override ...$args){}
	private static function JoinIterator($outer, $inner, $outerKeySelector, $innerKeySelector, $resultSelector, $comparer){}
	/**
	 * @uses EnumerableOverride::Last_1 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Last_2 <br>public , args: ($source, $predicate)<br>
	 * @var mixed|\override ...$args
	 * @return \TSource|mixed|\override
	 */
	#[MethodOverridePublic]function Last (\override ...$args){}
	/**
	 * @uses EnumerableOverride::LastOrDefault_1 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::LastOrDefault_2 <br>public , args: ($source, $defaultValue)<br>
	 * @uses EnumerableOverride::LastOrDefault_3 <br>public , args: ($source, $predicate)<br>
	 * @uses EnumerableOverride::LastOrDefault_4 <br>public , args: ($source, $predicate, $defaultValue)<br>
	 * @var mixed|\override ...$args
	 * @return \TSource|mixed|\override
	 */
	#[MethodOverridePublic]function LastOrDefault (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses EnumerableOverride::TryGetLast_1 <br>private , args: ($source, &$found)<br>
	 * @uses EnumerableOverride::TryGetLast_2 <br>private , args: ($source, $predicate, &$found)<br>
	 * @var mixed|\override ...$args
	 * @return \TSource|mixed|\override
	 */
	#[MethodOverridePrivate]function TryGetLast (\override ...$args){}
	/**
	 * @uses EnumerableOverride::ToLookup_1 <br>public , args: ($source, $keySelector)<br>
	 * @uses EnumerableOverride::ToLookup_2 <br>public , args: ($source, $keySelector, $comparer)<br>
	 * @uses EnumerableOverride::ToLookup_3 <br>public , args: ($source, $keySelector, $elementSelector)<br>
	 * @uses EnumerableOverride::ToLookup_4 <br>public , args: ($source, $keySelector, $elementSelector, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Linq\ILookup_2|mixed|\override
	 */
	#[MethodOverridePublic]function ToLookup (\override ...$args){}
	/**
	 * @uses EnumerableOverride::Max_1 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Max_2 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Max_3 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Max_4 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Max_5 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Max_6 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Max_7 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Max_8 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Max_9 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Max_10 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Max_11 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Max_12 <br>public , args: ($source, $comparer)<br>
	 * @uses EnumerableOverride::Max_13 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Max_14 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Max_15 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Max_16 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Max_17 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Max_18 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Max_19 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Max_20 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Max_21 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Max_22 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Max_23 <br>public , args: ($source, $selector)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|\System\Nullable_1|\System\Int64|int|\System\Double|double|\System\Single|\System\Decimal|\TSource|\TResult|mixed|\override
	 */
	#[MethodOverridePublic]function Max (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses EnumerableOverride::MaxInteger_1 <br>private , args: ($source)<br>
	 * @uses EnumerableOverride::MaxInteger_2 <br>private , args: ($source)<br>
	 * @uses EnumerableOverride::MaxInteger_3 <br>private , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::MaxInteger_4 <br>private , args: ($source, $selector)<br>
	 * @var mixed|\override ...$args
	 * @return \T|object|\System\Nullable_1|\TResult|mixed|\override
	 */
	#[MethodOverridePrivate]function MaxInteger (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses EnumerableOverride::MaxFloat_1 <br>private , args: ($source)<br>
	 * @uses EnumerableOverride::MaxFloat_2 <br>private , args: ($source)<br>
	 * @uses EnumerableOverride::MaxFloat_3 <br>private , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::MaxFloat_4 <br>private , args: ($source, $selector)<br>
	 * @var mixed|\override ...$args
	 * @return \T|object|\System\Nullable_1|\TResult|mixed|\override
	 */
	#[MethodOverridePrivate]function MaxFloat (\override ...$args){}
	/**
	 * @uses EnumerableOverride::MaxBy_1 <br>public , args: ($source, $keySelector)<br>
	 * @uses EnumerableOverride::MaxBy_2 <br>public , args: ($source, $keySelector, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \TSource|mixed|\override
	 */
	#[MethodOverridePublic]function MaxBy (\override ...$args){}
	/**
	 * @uses EnumerableOverride::Min_1 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Min_2 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Min_3 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Min_4 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Min_5 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Min_6 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Min_7 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Min_8 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Min_9 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Min_10 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Min_11 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Min_12 <br>public , args: ($source, $comparer)<br>
	 * @uses EnumerableOverride::Min_13 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Min_14 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Min_15 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Min_16 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Min_17 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Min_18 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Min_19 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Min_20 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Min_21 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Min_22 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Min_23 <br>public , args: ($source, $selector)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|\System\Int64|int|\System\Nullable_1|\System\Single|\System\Double|double|\System\Decimal|\TSource|\TResult|mixed|\override
	 */
	#[MethodOverridePublic]function Min (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses EnumerableOverride::MinInteger_1 <br>private , args: ($source)<br>
	 * @uses EnumerableOverride::MinInteger_2 <br>private , args: ($source)<br>
	 * @uses EnumerableOverride::MinInteger_3 <br>private , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::MinInteger_4 <br>private , args: ($source, $selector)<br>
	 * @var mixed|\override ...$args
	 * @return \T|object|\System\Nullable_1|\TResult|mixed|\override
	 */
	#[MethodOverridePrivate]function MinInteger (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses EnumerableOverride::MinFloat_1 <br>private , args: ($source)<br>
	 * @uses EnumerableOverride::MinFloat_2 <br>private , args: ($source)<br>
	 * @uses EnumerableOverride::MinFloat_3 <br>private , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::MinFloat_4 <br>private , args: ($source, $selector)<br>
	 * @var mixed|\override ...$args
	 * @return \T|object|\System\Nullable_1|\TResult|mixed|\override
	 */
	#[MethodOverridePrivate]function MinFloat (\override ...$args){}
	/**
	 * @uses EnumerableOverride::MinBy_1 <br>public , args: ($source, $keySelector)<br>
	 * @uses EnumerableOverride::MinBy_2 <br>public , args: ($source, $keySelector, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \TSource|mixed|\override
	 */
	#[MethodOverridePublic]function MinBy (\override ...$args){}
	/**
	 * @uses EnumerableOverride::Order_1 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Order_2 <br>public , args: ($source, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Linq\IOrderedEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function Order (\override ...$args){}
	/**
	 * @uses EnumerableOverride::OrderBy_1 <br>public , args: ($source, $keySelector)<br>
	 * @uses EnumerableOverride::OrderBy_2 <br>public , args: ($source, $keySelector, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Linq\IOrderedEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function OrderBy (\override ...$args){}
	/**
	 * @uses EnumerableOverride::OrderDescending_1 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::OrderDescending_2 <br>public , args: ($source, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Linq\IOrderedEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function OrderDescending (\override ...$args){}
	/**
	 * @uses EnumerableOverride::OrderByDescending_1 <br>public , args: ($source, $keySelector)<br>
	 * @uses EnumerableOverride::OrderByDescending_2 <br>public , args: ($source, $keySelector, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Linq\IOrderedEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function OrderByDescending (\override ...$args){}
	/**
	 * @uses EnumerableOverride::ThenBy_1 <br>public , args: ($source, $keySelector)<br>
	 * @uses EnumerableOverride::ThenBy_2 <br>public , args: ($source, $keySelector, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Linq\IOrderedEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function ThenBy (\override ...$args){}
	/**
	 * @uses EnumerableOverride::ThenByDescending_1 <br>public , args: ($source, $keySelector)<br>
	 * @uses EnumerableOverride::ThenByDescending_2 <br>public , args: ($source, $keySelector, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Linq\IOrderedEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function ThenByDescending (\override ...$args){}
	/**
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $count
	 * @return \System\Collections\Generic\IEnumerable_1[System\Int32]
	 */
	public static function Range($start, $count){}
	/**
	 * @param \TResult $element
	 * @param \System\Int32|int $count
	 * @return \System\Collections\Generic\IEnumerable_1[TResult]
	 */
	public static function Repeat($element, $count){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @return \System\Collections\Generic\IEnumerable_1[TSource]
	 */
	public static function Reverse($source){}
	/**
	 * @uses EnumerableOverride::Select_1 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Select_2 <br>public , args: ($source, $selector)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function Select (\override ...$args){}
	private static function CreateSelectIPartitionIterator($selector, $partition, $result){}
	private static function SelectIterator($source, $selector){}
	/**
	 * @uses EnumerableOverride::SelectMany_1 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::SelectMany_2 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::SelectMany_3 <br>public , args: ($source, $collectionSelector, $resultSelector)<br>
	 * @uses EnumerableOverride::SelectMany_4 <br>public , args: ($source, $collectionSelector, $resultSelector)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function SelectMany (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses EnumerableOverride::SelectManyIterator_1 <br>private , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::SelectManyIterator_2 <br>private , args: ($source, $collectionSelector, $resultSelector)<br>
	 * @uses EnumerableOverride::SelectManyIterator_3 <br>private , args: ($source, $collectionSelector, $resultSelector)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePrivate]function SelectManyIterator (\override ...$args){}
	/**
	 * @uses EnumerableOverride::SequenceEqual_1 <br>public , args: ($first, $second)<br>
	 * @uses EnumerableOverride::SequenceEqual_2 <br>public , args: ($first, $second, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function SequenceEqual (\override ...$args){}
	/**
	 * @uses EnumerableOverride::Single_1 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Single_2 <br>public , args: ($source, $predicate)<br>
	 * @var mixed|\override ...$args
	 * @return \TSource|mixed|\override
	 */
	#[MethodOverridePublic]function Single (\override ...$args){}
	/**
	 * @uses EnumerableOverride::SingleOrDefault_1 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::SingleOrDefault_2 <br>public , args: ($source, $defaultValue)<br>
	 * @uses EnumerableOverride::SingleOrDefault_3 <br>public , args: ($source, $predicate)<br>
	 * @uses EnumerableOverride::SingleOrDefault_4 <br>public , args: ($source, $predicate, $defaultValue)<br>
	 * @var mixed|\override ...$args
	 * @return \TSource|mixed|\override
	 */
	#[MethodOverridePublic]function SingleOrDefault (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses EnumerableOverride::TryGetSingle_1 <br>private , args: ($source, &$found)<br>
	 * @uses EnumerableOverride::TryGetSingle_2 <br>private , args: ($source, $predicate, &$found)<br>
	 * @var mixed|\override ...$args
	 * @return \TSource|mixed|\override
	 */
	#[MethodOverridePrivate]function TryGetSingle (\override ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Int32|int $count
	 * @return \System\Collections\Generic\IEnumerable_1[TSource]
	 */
	public static function Skip($source, $count){}
	/**
	 * @uses EnumerableOverride::SkipWhile_1 <br>public , args: ($source, $predicate)<br>
	 * @uses EnumerableOverride::SkipWhile_2 <br>public , args: ($source, $predicate)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function SkipWhile (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses EnumerableOverride::SkipWhileIterator_1 <br>private , args: ($source, $predicate)<br>
	 * @uses EnumerableOverride::SkipWhileIterator_2 <br>private , args: ($source, $predicate)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePrivate]function SkipWhileIterator (\override ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Int32|int $count
	 * @return \System\Collections\Generic\IEnumerable_1[TSource]
	 */
	public static function SkipLast($source, $count){}
	/**
	 * @uses EnumerableOverride::Sum_1 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Sum_2 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Sum_3 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Sum_4 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Sum_5 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Sum_6 <br>private , args: ($source)<br>
	 * @uses EnumerableOverride::Sum_7 <br>private , args: ($span)<br>
	 * @uses EnumerableOverride::Sum_8 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Sum_9 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Sum_10 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Sum_11 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Sum_12 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::Sum_13 <br>private , args: ($source)<br>
	 * @uses EnumerableOverride::Sum_14 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Sum_15 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Sum_16 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Sum_17 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Sum_18 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Sum_19 <br>private , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Sum_20 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Sum_21 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Sum_22 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Sum_23 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Sum_24 <br>public , args: ($source, $selector)<br>
	 * @uses EnumerableOverride::Sum_25 <br>private , args: ($source, $selector)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|\System\Int64|int|\System\Single|\System\Double|double|\System\Decimal|\TResult|\System\Nullable_1|mixed|\override
	 */
	#[MethodOverridePublic]function Sum (\override ...$args){}
	/**
	 * @uses EnumerableOverride::Take_1 <br>public , args: ($source, $count)<br>
	 * @uses EnumerableOverride::Take_2 <br>public , args: ($source, $range)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function Take (\override ...$args){}
	private static function TakeRangeFromEndIterator($source, $isStartIndexFromEnd, $startIndex, $isEndIndexFromEnd, $endIndex){}
	/**
	 * @uses EnumerableOverride::TakeWhile_1 <br>public , args: ($source, $predicate)<br>
	 * @uses EnumerableOverride::TakeWhile_2 <br>public , args: ($source, $predicate)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function TakeWhile (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses EnumerableOverride::TakeWhileIterator_1 <br>private , args: ($source, $predicate)<br>
	 * @uses EnumerableOverride::TakeWhileIterator_2 <br>private , args: ($source, $predicate)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePrivate]function TakeWhileIterator (\override ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Int32|int $count
	 * @return \System\Collections\Generic\IEnumerable_1[TSource]
	 */
	public static function TakeLast($source, $count){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @return \TSource[]
	 */
	public static function ToArray($source){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @return \System\Collections\Generic\List_1[TSource]
	 */
	public static function ToList($source){}
	/**
	 * @uses EnumerableOverride::ToDictionary_1 <br>public , args: ($source, $keySelector)<br>
	 * @uses EnumerableOverride::ToDictionary_2 <br>public , args: ($source, $keySelector, $comparer)<br>
	 * @uses EnumerableOverride::ToDictionary_3 <br>private , args: ($source, $keySelector, $comparer)<br>
	 * @uses EnumerableOverride::ToDictionary_4 <br>private , args: ($source, $keySelector, $comparer)<br>
	 * @uses EnumerableOverride::ToDictionary_5 <br>public , args: ($source, $keySelector, $elementSelector)<br>
	 * @uses EnumerableOverride::ToDictionary_6 <br>public , args: ($source, $keySelector, $elementSelector, $comparer)<br>
	 * @uses EnumerableOverride::ToDictionary_7 <br>private , args: ($source, $keySelector, $elementSelector, $comparer)<br>
	 * @uses EnumerableOverride::ToDictionary_8 <br>private , args: ($source, $keySelector, $elementSelector, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\Dictionary_2|mixed|\override
	 */
	#[MethodOverridePublic]function ToDictionary (\override ...$args){}
	/**
	 * @uses EnumerableOverride::ToHashSet_1 <br>public , args: ($source)<br>
	 * @uses EnumerableOverride::ToHashSet_2 <br>public , args: ($source, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\HashSet_1|mixed|\override
	 */
	#[MethodOverridePublic]function ToHashSet (\override ...$args){}
	private static function HashSetToArray($set){}
	private static function HashSetToList($set){}
	/**
	 * @uses EnumerableOverride::Union_1 <br>public , args: ($first, $second)<br>
	 * @uses EnumerableOverride::Union_2 <br>public , args: ($first, $second, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function Union (\override ...$args){}
	/**
	 * @uses EnumerableOverride::UnionBy_1 <br>public , args: ($first, $second, $keySelector)<br>
	 * @uses EnumerableOverride::UnionBy_2 <br>public , args: ($first, $second, $keySelector, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function UnionBy (\override ...$args){}
	private static function UnionByIterator($first, $second, $keySelector, $comparer){}
	/**
	 * @uses EnumerableOverride::Where_1 <br>public , args: ($source, $predicate)<br>
	 * @uses EnumerableOverride::Where_2 <br>public , args: ($source, $predicate)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function Where (\override ...$args){}
	private static function WhereIterator($source, $predicate){}
	/**
	 * @uses EnumerableOverride::Zip_1 <br>public , args: ($first, $second, $resultSelector)<br>
	 * @uses EnumerableOverride::Zip_2 <br>public , args: ($first, $second)<br>
	 * @uses EnumerableOverride::Zip_3 <br>public , args: ($first, $second, $third)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function Zip (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses EnumerableOverride::ZipIterator_1 <br>private , args: ($first, $second)<br>
	 * @uses EnumerableOverride::ZipIterator_2 <br>private , args: ($first, $second, $resultSelector)<br>
	 * @uses EnumerableOverride::ZipIterator_3 <br>private , args: ($first, $second, $third)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePrivate]function ZipIterator (\override ...$args){}
}