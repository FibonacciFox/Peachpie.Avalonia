<?php
namespace System\Linq;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EnumerableMethodsOverride
{
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function Aggregate_1($source, $func){}
	/**
	 * @return \System\Linq\TAccumulate
	 */
	#[MethodOverride] public static function Aggregate_2($source, $seed, $func){}
	/**
	 * @return \System\Linq\TResult
	 */
	#[MethodOverride] public static function Aggregate_3($source, $seed, $func, $resultSelector){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function Any_1($source){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function Any_2($source, $predicate){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function Average_1($source){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function Average_2($source){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Average_3($source){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function Average_4($source){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function Average_5($source){}
	/**
	 * @return \System\Linq\TResult
	 */
	#[MethodOverride] private static function Average_6($source){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Average_7($source){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Average_8($source){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Average_9($source){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Average_10($source){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Average_11($source){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] private static function Average_12($source){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function Average_13($source, $selector){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function Average_14($source, $selector){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Average_15($source, $selector){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function Average_16($source, $selector){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function Average_17($source, $selector){}
	/**
	 * @return \System\Linq\TResult
	 */
	#[MethodOverride] private static function Average_18($source, $selector){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Average_19($source, $selector){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Average_20($source, $selector){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Average_21($source, $selector){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Average_22($source, $selector){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Average_23($source, $selector){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] private static function Average_24($source, $selector){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function Contains_1($source, $value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function Contains_2($source, $value, $comparer){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Count_1($source){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Count_2($source, $predicate){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function LongCount_1($source){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function LongCount_2($source, $predicate){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function DefaultIfEmpty_1($source){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function DefaultIfEmpty_2($source, $defaultValue){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function Distinct_1($source){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function Distinct_2($source, $comparer){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function DistinctBy_1($source, $keySelector){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function DistinctBy_2($source, $keySelector, $comparer){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function ElementAt_1($source, $index){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function ElementAt_2($source, $index){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function ElementAtOrDefault_1($source, $index){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function ElementAtOrDefault_2($source, $index){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function Except_1($first, $second){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function Except_2($first, $second, $comparer){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function ExceptBy_1($first, $second, $keySelector){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function ExceptBy_2($first, $second, $keySelector, $comparer){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function First_1($source){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function First_2($source, $predicate){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function FirstOrDefault_1($source){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function FirstOrDefault_2($source, $defaultValue){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function FirstOrDefault_3($source, $predicate){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function FirstOrDefault_4($source, $predicate, $defaultValue){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] private static function TryGetFirst_1($source, $found){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] private static function TryGetFirst_2($source, $predicate, $found){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function GroupBy_1($source, $keySelector){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function GroupBy_2($source, $keySelector, $comparer){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function GroupBy_3($source, $keySelector, $elementSelector){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function GroupBy_4($source, $keySelector, $elementSelector, $comparer){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function GroupBy_5($source, $keySelector, $resultSelector){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function GroupBy_6($source, $keySelector, $elementSelector, $resultSelector){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function GroupBy_7($source, $keySelector, $resultSelector, $comparer){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function GroupBy_8($source, $keySelector, $elementSelector, $resultSelector, $comparer){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function GroupJoin_1($outer, $inner, $outerKeySelector, $innerKeySelector, $resultSelector){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function GroupJoin_2($outer, $inner, $outerKeySelector, $innerKeySelector, $resultSelector, $comparer){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function Intersect_1($first, $second){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function Intersect_2($first, $second, $comparer){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function IntersectBy_1($first, $second, $keySelector){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function IntersectBy_2($first, $second, $keySelector, $comparer){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function Join_1($outer, $inner, $outerKeySelector, $innerKeySelector, $resultSelector){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function Join_2($outer, $inner, $outerKeySelector, $innerKeySelector, $resultSelector, $comparer){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function Last_1($source){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function Last_2($source, $predicate){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function LastOrDefault_1($source){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function LastOrDefault_2($source, $defaultValue){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function LastOrDefault_3($source, $predicate){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function LastOrDefault_4($source, $predicate, $defaultValue){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] private static function TryGetLast_1($source, $found){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] private static function TryGetLast_2($source, $predicate, $found){}
	/**
	 * @return \System\Linq\ILookup_2
	 */
	#[MethodOverride] public static function ToLookup_1($source, $keySelector){}
	/**
	 * @return \System\Linq\ILookup_2
	 */
	#[MethodOverride] public static function ToLookup_2($source, $keySelector, $comparer){}
	/**
	 * @return \System\Linq\ILookup_2
	 */
	#[MethodOverride] public static function ToLookup_3($source, $keySelector, $elementSelector){}
	/**
	 * @return \System\Linq\ILookup_2
	 */
	#[MethodOverride] public static function ToLookup_4($source, $keySelector, $elementSelector, $comparer){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Max_1($source){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Max_2($source){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function Max_3($source){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Max_4($source){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function Max_5($source){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Max_6($source){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Max_7($source){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Max_8($source){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function Max_9($source){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Max_10($source){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function Max_11($source){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function Max_12($source, $comparer){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Max_13($source, $selector){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Max_14($source, $selector){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function Max_15($source, $selector){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Max_16($source, $selector){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Max_17($source, $selector){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Max_18($source, $selector){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function Max_19($source, $selector){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Max_20($source, $selector){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function Max_21($source, $selector){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Max_22($source, $selector){}
	/**
	 * @return \System\Linq\TResult
	 */
	#[MethodOverride] public static function Max_23($source, $selector){}
	/**
	 * @return \System\Linq\T
	 */
	#[MethodOverride] private static function MaxInteger_1($source){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] private static function MaxInteger_2($source){}
	/**
	 * @return \System\Linq\TResult
	 */
	#[MethodOverride] private static function MaxInteger_3($source, $selector){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] private static function MaxInteger_4($source, $selector){}
	/**
	 * @return \System\Linq\T
	 */
	#[MethodOverride] private static function MaxFloat_1($source){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] private static function MaxFloat_2($source){}
	/**
	 * @return \System\Linq\TResult
	 */
	#[MethodOverride] private static function MaxFloat_3($source, $selector){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] private static function MaxFloat_4($source, $selector){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function MaxBy_1($source, $keySelector){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function MaxBy_2($source, $keySelector, $comparer){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Min_1($source){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function Min_2($source){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Min_3($source){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Min_4($source){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Min_5($source){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Min_6($source){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function Min_7($source){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Min_8($source){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function Min_9($source){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Min_10($source){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function Min_11($source){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function Min_12($source, $comparer){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Min_13($source, $selector){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Min_14($source, $selector){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function Min_15($source, $selector){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Min_16($source, $selector){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Min_17($source, $selector){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Min_18($source, $selector){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function Min_19($source, $selector){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Min_20($source, $selector){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function Min_21($source, $selector){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Min_22($source, $selector){}
	/**
	 * @return \System\Linq\TResult
	 */
	#[MethodOverride] public static function Min_23($source, $selector){}
	/**
	 * @return \System\Linq\T
	 */
	#[MethodOverride] private static function MinInteger_1($source){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] private static function MinInteger_2($source){}
	/**
	 * @return \System\Linq\TResult
	 */
	#[MethodOverride] private static function MinInteger_3($source, $selector){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] private static function MinInteger_4($source, $selector){}
	/**
	 * @return \System\Linq\T
	 */
	#[MethodOverride] private static function MinFloat_1($source){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] private static function MinFloat_2($source){}
	/**
	 * @return \System\Linq\TResult
	 */
	#[MethodOverride] private static function MinFloat_3($source, $selector){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] private static function MinFloat_4($source, $selector){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function MinBy_1($source, $keySelector){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function MinBy_2($source, $keySelector, $comparer){}
	/**
	 * @return \System\Linq\IOrderedEnumerable_1
	 */
	#[MethodOverride] public static function Order_1($source){}
	/**
	 * @return \System\Linq\IOrderedEnumerable_1
	 */
	#[MethodOverride] public static function Order_2($source, $comparer){}
	/**
	 * @return \System\Linq\IOrderedEnumerable_1
	 */
	#[MethodOverride] public static function OrderBy_1($source, $keySelector){}
	/**
	 * @return \System\Linq\IOrderedEnumerable_1
	 */
	#[MethodOverride] public static function OrderBy_2($source, $keySelector, $comparer){}
	/**
	 * @return \System\Linq\IOrderedEnumerable_1
	 */
	#[MethodOverride] public static function OrderDescending_1($source){}
	/**
	 * @return \System\Linq\IOrderedEnumerable_1
	 */
	#[MethodOverride] public static function OrderDescending_2($source, $comparer){}
	/**
	 * @return \System\Linq\IOrderedEnumerable_1
	 */
	#[MethodOverride] public static function OrderByDescending_1($source, $keySelector){}
	/**
	 * @return \System\Linq\IOrderedEnumerable_1
	 */
	#[MethodOverride] public static function OrderByDescending_2($source, $keySelector, $comparer){}
	/**
	 * @return \System\Linq\IOrderedEnumerable_1
	 */
	#[MethodOverride] public static function ThenBy_1($source, $keySelector){}
	/**
	 * @return \System\Linq\IOrderedEnumerable_1
	 */
	#[MethodOverride] public static function ThenBy_2($source, $keySelector, $comparer){}
	/**
	 * @return \System\Linq\IOrderedEnumerable_1
	 */
	#[MethodOverride] public static function ThenByDescending_1($source, $keySelector){}
	/**
	 * @return \System\Linq\IOrderedEnumerable_1
	 */
	#[MethodOverride] public static function ThenByDescending_2($source, $keySelector, $comparer){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function Select_1($source, $selector){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function Select_2($source, $selector){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function SelectMany_1($source, $selector){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function SelectMany_2($source, $selector){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function SelectMany_3($source, $collectionSelector, $resultSelector){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function SelectMany_4($source, $collectionSelector, $resultSelector){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] private static function SelectManyIterator_1($source, $selector){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] private static function SelectManyIterator_2($source, $collectionSelector, $resultSelector){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] private static function SelectManyIterator_3($source, $collectionSelector, $resultSelector){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function SequenceEqual_1($first, $second){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function SequenceEqual_2($first, $second, $comparer){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function Single_1($source){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function Single_2($source, $predicate){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function SingleOrDefault_1($source){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function SingleOrDefault_2($source, $defaultValue){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function SingleOrDefault_3($source, $predicate){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public static function SingleOrDefault_4($source, $predicate, $defaultValue){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] private static function TryGetSingle_1($source, $found){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] private static function TryGetSingle_2($source, $predicate, $found){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function SkipWhile_1($source, $predicate){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function SkipWhile_2($source, $predicate){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] private static function SkipWhileIterator_1($source, $predicate){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] private static function SkipWhileIterator_2($source, $predicate){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Sum_1($source){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function Sum_2($source){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Sum_3($source){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function Sum_4($source){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function Sum_5($source){}
	/**
	 * @return \System\Linq\TResult
	 */
	#[MethodOverride] private static function Sum_6($source){}
	/**
	 * @return \System\Linq\TResult
	 */
	#[MethodOverride] private static function Sum_7($span){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Sum_8($source){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Sum_9($source){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Sum_10($source){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Sum_11($source){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Sum_12($source){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] private static function Sum_13($source){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Sum_14($source, $selector){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function Sum_15($source, $selector){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Sum_16($source, $selector){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function Sum_17($source, $selector){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function Sum_18($source, $selector){}
	/**
	 * @return \System\Linq\TResult
	 */
	#[MethodOverride] private static function Sum_19($source, $selector){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Sum_20($source, $selector){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Sum_21($source, $selector){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Sum_22($source, $selector){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Sum_23($source, $selector){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function Sum_24($source, $selector){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] private static function Sum_25($source, $selector){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function Take_1($source, $count){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function Take_2($source, $range){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function TakeWhile_1($source, $predicate){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function TakeWhile_2($source, $predicate){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] private static function TakeWhileIterator_1($source, $predicate){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] private static function TakeWhileIterator_2($source, $predicate){}
	/**
	 * @return \System\Collections\Generic\Dictionary_2
	 */
	#[MethodOverride] public static function ToDictionary_1($source, $keySelector){}
	/**
	 * @return \System\Collections\Generic\Dictionary_2
	 */
	#[MethodOverride] public static function ToDictionary_2($source, $keySelector, $comparer){}
	/**
	 * @return \System\Collections\Generic\Dictionary_2
	 */
	#[MethodOverride] private static function ToDictionary_3($source, $keySelector, $comparer){}
	/**
	 * @return \System\Collections\Generic\Dictionary_2
	 */
	#[MethodOverride] private static function ToDictionary_4($source, $keySelector, $comparer){}
	/**
	 * @return \System\Collections\Generic\Dictionary_2
	 */
	#[MethodOverride] public static function ToDictionary_5($source, $keySelector, $elementSelector){}
	/**
	 * @return \System\Collections\Generic\Dictionary_2
	 */
	#[MethodOverride] public static function ToDictionary_6($source, $keySelector, $elementSelector, $comparer){}
	/**
	 * @return \System\Collections\Generic\Dictionary_2
	 */
	#[MethodOverride] private static function ToDictionary_7($source, $keySelector, $elementSelector, $comparer){}
	/**
	 * @return \System\Collections\Generic\Dictionary_2
	 */
	#[MethodOverride] private static function ToDictionary_8($source, $keySelector, $elementSelector, $comparer){}
	/**
	 * @return \System\Collections\Generic\HashSet_1
	 */
	#[MethodOverride] public static function ToHashSet_1($source){}
	/**
	 * @return \System\Collections\Generic\HashSet_1
	 */
	#[MethodOverride] public static function ToHashSet_2($source, $comparer){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function Union_1($first, $second){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function Union_2($first, $second, $comparer){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function UnionBy_1($first, $second, $keySelector){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function UnionBy_2($first, $second, $keySelector, $comparer){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function Where_1($source, $predicate){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function Where_2($source, $predicate){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function Zip_1($first, $second, $resultSelector){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function Zip_2($first, $second){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function Zip_3($first, $second, $third){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] private static function ZipIterator_1($first, $second){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] private static function ZipIterator_2($first, $second, $resultSelector){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] private static function ZipIterator_3($first, $second, $third){}
}
/**
 */
class Enumerable extends \System\Object
{
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function Empty(){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source
	 * @param \System\Int32|int $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SkipIterator($source, $count){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source
	 * @param \System\Int32|int $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TakeIterator($source, $count){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $endIndex
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TakeRangeIterator($source, $startIndex, $endIndex){}
	/**
	 * @uses EnumerableMethodsOverride::Aggregate_1 ($source, $func)
	 * @uses EnumerableMethodsOverride::Aggregate_2 ($source, $seed, $func)
	 * @uses EnumerableMethodsOverride::Aggregate_3 ($source, $seed, $func, $resultSelector)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Aggregate(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::Any_1 ($source)
	 * @uses EnumerableMethodsOverride::Any_2 ($source, $predicate)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Any(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source
	 * @param \System\Func_2 $predicate
	 * @return \System\Boolean
	 */
	public static function All($source, $predicate){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source
	 * @param \System\Linq\TSource $element
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function Append($source, $element){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source
	 * @param \System\Linq\TSource $element
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function Prepend($source, $element){}
	/**
	 * @uses EnumerableMethodsOverride::Average_1 ($source)
	 * @uses EnumerableMethodsOverride::Average_2 ($source)
	 * @uses EnumerableMethodsOverride::Average_3 ($source)
	 * @uses EnumerableMethodsOverride::Average_4 ($source)
	 * @uses EnumerableMethodsOverride::Average_5 ($source)
	 * @uses EnumerableMethodsOverride::Average_6 ($source)
	 * @uses EnumerableMethodsOverride::Average_7 ($source)
	 * @uses EnumerableMethodsOverride::Average_8 ($source)
	 * @uses EnumerableMethodsOverride::Average_9 ($source)
	 * @uses EnumerableMethodsOverride::Average_10 ($source)
	 * @uses EnumerableMethodsOverride::Average_11 ($source)
	 * @uses EnumerableMethodsOverride::Average_12 ($source)
	 * @uses EnumerableMethodsOverride::Average_13 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Average_14 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Average_15 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Average_16 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Average_17 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Average_18 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Average_19 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Average_20 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Average_21 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Average_22 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Average_23 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Average_24 ($source, $selector)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Average(mixed ...$args){}
	/**
	 * @param \System\Collections\IEnumerable $source
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function OfType($source){}
	/**
	 * @param \System\Collections\IEnumerable $source
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function OfTypeIterator($source){}
	/**
	 * @param \System\Collections\IEnumerable $source
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function Cast($source){}
	/**
	 * @param \System\Collections\IEnumerable $source
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CastIterator($source){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source
	 * @param \System\Int32|int $size
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function Chunk($source, $size){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source
	 * @param \System\Int32|int $size
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ChunkIterator($source, $size){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $first
	 * @param \System\Collections\Generic\IEnumerable_1 $second
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function Concat($first, $second){}
	/**
	 * @uses EnumerableMethodsOverride::Contains_1 ($source, $value)
	 * @uses EnumerableMethodsOverride::Contains_2 ($source, $value, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Contains(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::Count_1 ($source)
	 * @uses EnumerableMethodsOverride::Count_2 ($source, $predicate)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Count(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source
	 * @param \System\Int32& $count
	 * @return \System\Boolean
	 */
	public static function TryGetNonEnumeratedCount($source, $count){}
	/**
	 * @uses EnumerableMethodsOverride::LongCount_1 ($source)
	 * @uses EnumerableMethodsOverride::LongCount_2 ($source, $predicate)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function LongCount(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::DefaultIfEmpty_1 ($source)
	 * @uses EnumerableMethodsOverride::DefaultIfEmpty_2 ($source, $defaultValue)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function DefaultIfEmpty(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::Distinct_1 ($source)
	 * @uses EnumerableMethodsOverride::Distinct_2 ($source, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Distinct(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::DistinctBy_1 ($source, $keySelector)
	 * @uses EnumerableMethodsOverride::DistinctBy_2 ($source, $keySelector, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function DistinctBy(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source
	 * @param \System\Func_2 $keySelector
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DistinctByIterator($source, $keySelector, $comparer){}
	/**
	 * @uses EnumerableMethodsOverride::ElementAt_1 ($source, $index)
	 * @uses EnumerableMethodsOverride::ElementAt_2 ($source, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ElementAt(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::ElementAtOrDefault_1 ($source, $index)
	 * @uses EnumerableMethodsOverride::ElementAtOrDefault_2 ($source, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ElementAtOrDefault(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source
	 * @param \System\Int32|int $index
	 * @param \System\Linq\TSource& $element
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryGetElement($source, $index, $element){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source
	 * @param \System\Int32|int $indexFromEnd
	 * @param \System\Linq\TSource& $element
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryGetElementFromEnd($source, $indexFromEnd, $element){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function AsEnumerable($source){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source
	 * @param \System\ReadOnlySpan_1& $span
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryGetSpan($source, $span){}
	/**
	 * @uses EnumerableMethodsOverride::Except_1 ($first, $second)
	 * @uses EnumerableMethodsOverride::Except_2 ($first, $second, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Except(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::ExceptBy_1 ($first, $second, $keySelector)
	 * @uses EnumerableMethodsOverride::ExceptBy_2 ($first, $second, $keySelector, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ExceptBy(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $first
	 * @param \System\Collections\Generic\IEnumerable_1 $second
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ExceptIterator($first, $second, $comparer){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $first
	 * @param \System\Collections\Generic\IEnumerable_1 $second
	 * @param \System\Func_2 $keySelector
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ExceptByIterator($first, $second, $keySelector, $comparer){}
	/**
	 * @uses EnumerableMethodsOverride::First_1 ($source)
	 * @uses EnumerableMethodsOverride::First_2 ($source, $predicate)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function First(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::FirstOrDefault_1 ($source)
	 * @uses EnumerableMethodsOverride::FirstOrDefault_2 ($source, $defaultValue)
	 * @uses EnumerableMethodsOverride::FirstOrDefault_3 ($source, $predicate)
	 * @uses EnumerableMethodsOverride::FirstOrDefault_4 ($source, $predicate, $defaultValue)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FirstOrDefault(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::TryGetFirst_1 ($source, $found)
	 * @uses EnumerableMethodsOverride::TryGetFirst_2 ($source, $predicate, $found)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryGetFirst(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::GroupBy_1 ($source, $keySelector)
	 * @uses EnumerableMethodsOverride::GroupBy_2 ($source, $keySelector, $comparer)
	 * @uses EnumerableMethodsOverride::GroupBy_3 ($source, $keySelector, $elementSelector)
	 * @uses EnumerableMethodsOverride::GroupBy_4 ($source, $keySelector, $elementSelector, $comparer)
	 * @uses EnumerableMethodsOverride::GroupBy_5 ($source, $keySelector, $resultSelector)
	 * @uses EnumerableMethodsOverride::GroupBy_6 ($source, $keySelector, $elementSelector, $resultSelector)
	 * @uses EnumerableMethodsOverride::GroupBy_7 ($source, $keySelector, $resultSelector, $comparer)
	 * @uses EnumerableMethodsOverride::GroupBy_8 ($source, $keySelector, $elementSelector, $resultSelector, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GroupBy(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::GroupJoin_1 ($outer, $inner, $outerKeySelector, $innerKeySelector, $resultSelector)
	 * @uses EnumerableMethodsOverride::GroupJoin_2 ($outer, $inner, $outerKeySelector, $innerKeySelector, $resultSelector, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GroupJoin(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $outer
	 * @param \System\Collections\Generic\IEnumerable_1 $inner
	 * @param \System\Func_2 $outerKeySelector
	 * @param \System\Func_2 $innerKeySelector
	 * @param \System\Func_3 $resultSelector
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GroupJoinIterator($outer, $inner, $outerKeySelector, $innerKeySelector, $resultSelector, $comparer){}
	/**
	 * @uses EnumerableMethodsOverride::Intersect_1 ($first, $second)
	 * @uses EnumerableMethodsOverride::Intersect_2 ($first, $second, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Intersect(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::IntersectBy_1 ($first, $second, $keySelector)
	 * @uses EnumerableMethodsOverride::IntersectBy_2 ($first, $second, $keySelector, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IntersectBy(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $first
	 * @param \System\Collections\Generic\IEnumerable_1 $second
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IntersectIterator($first, $second, $comparer){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $first
	 * @param \System\Collections\Generic\IEnumerable_1 $second
	 * @param \System\Func_2 $keySelector
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IntersectByIterator($first, $second, $keySelector, $comparer){}
	/**
	 * @uses EnumerableMethodsOverride::Join_1 ($outer, $inner, $outerKeySelector, $innerKeySelector, $resultSelector)
	 * @uses EnumerableMethodsOverride::Join_2 ($outer, $inner, $outerKeySelector, $innerKeySelector, $resultSelector, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Join(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $outer
	 * @param \System\Collections\Generic\IEnumerable_1 $inner
	 * @param \System\Func_2 $outerKeySelector
	 * @param \System\Func_2 $innerKeySelector
	 * @param \System\Func_3 $resultSelector
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function JoinIterator($outer, $inner, $outerKeySelector, $innerKeySelector, $resultSelector, $comparer){}
	/**
	 * @uses EnumerableMethodsOverride::Last_1 ($source)
	 * @uses EnumerableMethodsOverride::Last_2 ($source, $predicate)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Last(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::LastOrDefault_1 ($source)
	 * @uses EnumerableMethodsOverride::LastOrDefault_2 ($source, $defaultValue)
	 * @uses EnumerableMethodsOverride::LastOrDefault_3 ($source, $predicate)
	 * @uses EnumerableMethodsOverride::LastOrDefault_4 ($source, $predicate, $defaultValue)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function LastOrDefault(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::TryGetLast_1 ($source, $found)
	 * @uses EnumerableMethodsOverride::TryGetLast_2 ($source, $predicate, $found)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryGetLast(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::ToLookup_1 ($source, $keySelector)
	 * @uses EnumerableMethodsOverride::ToLookup_2 ($source, $keySelector, $comparer)
	 * @uses EnumerableMethodsOverride::ToLookup_3 ($source, $keySelector, $elementSelector)
	 * @uses EnumerableMethodsOverride::ToLookup_4 ($source, $keySelector, $elementSelector, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToLookup(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::Max_1 ($source)
	 * @uses EnumerableMethodsOverride::Max_2 ($source)
	 * @uses EnumerableMethodsOverride::Max_3 ($source)
	 * @uses EnumerableMethodsOverride::Max_4 ($source)
	 * @uses EnumerableMethodsOverride::Max_5 ($source)
	 * @uses EnumerableMethodsOverride::Max_6 ($source)
	 * @uses EnumerableMethodsOverride::Max_7 ($source)
	 * @uses EnumerableMethodsOverride::Max_8 ($source)
	 * @uses EnumerableMethodsOverride::Max_9 ($source)
	 * @uses EnumerableMethodsOverride::Max_10 ($source)
	 * @uses EnumerableMethodsOverride::Max_11 ($source)
	 * @uses EnumerableMethodsOverride::Max_12 ($source, $comparer)
	 * @uses EnumerableMethodsOverride::Max_13 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Max_14 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Max_15 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Max_16 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Max_17 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Max_18 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Max_19 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Max_20 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Max_21 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Max_22 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Max_23 ($source, $selector)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Max(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::MaxInteger_1 ($source)
	 * @uses EnumerableMethodsOverride::MaxInteger_2 ($source)
	 * @uses EnumerableMethodsOverride::MaxInteger_3 ($source, $selector)
	 * @uses EnumerableMethodsOverride::MaxInteger_4 ($source, $selector)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MaxInteger(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::MaxFloat_1 ($source)
	 * @uses EnumerableMethodsOverride::MaxFloat_2 ($source)
	 * @uses EnumerableMethodsOverride::MaxFloat_3 ($source, $selector)
	 * @uses EnumerableMethodsOverride::MaxFloat_4 ($source, $selector)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MaxFloat(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::MaxBy_1 ($source, $keySelector)
	 * @uses EnumerableMethodsOverride::MaxBy_2 ($source, $keySelector, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MaxBy(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::Min_1 ($source)
	 * @uses EnumerableMethodsOverride::Min_2 ($source)
	 * @uses EnumerableMethodsOverride::Min_3 ($source)
	 * @uses EnumerableMethodsOverride::Min_4 ($source)
	 * @uses EnumerableMethodsOverride::Min_5 ($source)
	 * @uses EnumerableMethodsOverride::Min_6 ($source)
	 * @uses EnumerableMethodsOverride::Min_7 ($source)
	 * @uses EnumerableMethodsOverride::Min_8 ($source)
	 * @uses EnumerableMethodsOverride::Min_9 ($source)
	 * @uses EnumerableMethodsOverride::Min_10 ($source)
	 * @uses EnumerableMethodsOverride::Min_11 ($source)
	 * @uses EnumerableMethodsOverride::Min_12 ($source, $comparer)
	 * @uses EnumerableMethodsOverride::Min_13 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Min_14 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Min_15 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Min_16 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Min_17 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Min_18 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Min_19 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Min_20 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Min_21 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Min_22 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Min_23 ($source, $selector)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Min(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::MinInteger_1 ($source)
	 * @uses EnumerableMethodsOverride::MinInteger_2 ($source)
	 * @uses EnumerableMethodsOverride::MinInteger_3 ($source, $selector)
	 * @uses EnumerableMethodsOverride::MinInteger_4 ($source, $selector)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MinInteger(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::MinFloat_1 ($source)
	 * @uses EnumerableMethodsOverride::MinFloat_2 ($source)
	 * @uses EnumerableMethodsOverride::MinFloat_3 ($source, $selector)
	 * @uses EnumerableMethodsOverride::MinFloat_4 ($source, $selector)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MinFloat(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::MinBy_1 ($source, $keySelector)
	 * @uses EnumerableMethodsOverride::MinBy_2 ($source, $keySelector, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MinBy(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::Order_1 ($source)
	 * @uses EnumerableMethodsOverride::Order_2 ($source, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Order(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::OrderBy_1 ($source, $keySelector)
	 * @uses EnumerableMethodsOverride::OrderBy_2 ($source, $keySelector, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function OrderBy(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::OrderDescending_1 ($source)
	 * @uses EnumerableMethodsOverride::OrderDescending_2 ($source, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function OrderDescending(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::OrderByDescending_1 ($source, $keySelector)
	 * @uses EnumerableMethodsOverride::OrderByDescending_2 ($source, $keySelector, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function OrderByDescending(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::ThenBy_1 ($source, $keySelector)
	 * @uses EnumerableMethodsOverride::ThenBy_2 ($source, $keySelector, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ThenBy(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::ThenByDescending_1 ($source, $keySelector)
	 * @uses EnumerableMethodsOverride::ThenByDescending_2 ($source, $keySelector, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ThenByDescending(mixed ...$args){}
	/**
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $count
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function Range($start, $count){}
	/**
	 * @param \System\Linq\TResult $element
	 * @param \System\Int32|int $count
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function Repeat($element, $count){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function Reverse($source){}
	/**
	 * @uses EnumerableMethodsOverride::Select_1 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Select_2 ($source, $selector)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Select(mixed ...$args){}
	/**
	 * @param \System\Func_2 $selector
	 * @param \System\Linq\IPartition_1 $partition
	 * @param \System\Collections\Generic\IEnumerable_1& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateSelectIPartitionIterator($selector, $partition, $result){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source
	 * @param \System\Func_3 $selector
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SelectIterator($source, $selector){}
	/**
	 * @uses EnumerableMethodsOverride::SelectMany_1 ($source, $selector)
	 * @uses EnumerableMethodsOverride::SelectMany_2 ($source, $selector)
	 * @uses EnumerableMethodsOverride::SelectMany_3 ($source, $collectionSelector, $resultSelector)
	 * @uses EnumerableMethodsOverride::SelectMany_4 ($source, $collectionSelector, $resultSelector)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SelectMany(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::SelectManyIterator_1 ($source, $selector)
	 * @uses EnumerableMethodsOverride::SelectManyIterator_2 ($source, $collectionSelector, $resultSelector)
	 * @uses EnumerableMethodsOverride::SelectManyIterator_3 ($source, $collectionSelector, $resultSelector)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SelectManyIterator(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::SequenceEqual_1 ($first, $second)
	 * @uses EnumerableMethodsOverride::SequenceEqual_2 ($first, $second, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SequenceEqual(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::Single_1 ($source)
	 * @uses EnumerableMethodsOverride::Single_2 ($source, $predicate)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Single(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::SingleOrDefault_1 ($source)
	 * @uses EnumerableMethodsOverride::SingleOrDefault_2 ($source, $defaultValue)
	 * @uses EnumerableMethodsOverride::SingleOrDefault_3 ($source, $predicate)
	 * @uses EnumerableMethodsOverride::SingleOrDefault_4 ($source, $predicate, $defaultValue)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SingleOrDefault(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::TryGetSingle_1 ($source, $found)
	 * @uses EnumerableMethodsOverride::TryGetSingle_2 ($source, $predicate, $found)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryGetSingle(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source
	 * @param \System\Int32|int $count
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function Skip($source, $count){}
	/**
	 * @uses EnumerableMethodsOverride::SkipWhile_1 ($source, $predicate)
	 * @uses EnumerableMethodsOverride::SkipWhile_2 ($source, $predicate)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SkipWhile(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::SkipWhileIterator_1 ($source, $predicate)
	 * @uses EnumerableMethodsOverride::SkipWhileIterator_2 ($source, $predicate)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SkipWhileIterator(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source
	 * @param \System\Int32|int $count
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function SkipLast($source, $count){}
	/**
	 * @uses EnumerableMethodsOverride::Sum_1 ($source)
	 * @uses EnumerableMethodsOverride::Sum_2 ($source)
	 * @uses EnumerableMethodsOverride::Sum_3 ($source)
	 * @uses EnumerableMethodsOverride::Sum_4 ($source)
	 * @uses EnumerableMethodsOverride::Sum_5 ($source)
	 * @uses EnumerableMethodsOverride::Sum_6 ($source)
	 * @uses EnumerableMethodsOverride::Sum_7 ($span)
	 * @uses EnumerableMethodsOverride::Sum_8 ($source)
	 * @uses EnumerableMethodsOverride::Sum_9 ($source)
	 * @uses EnumerableMethodsOverride::Sum_10 ($source)
	 * @uses EnumerableMethodsOverride::Sum_11 ($source)
	 * @uses EnumerableMethodsOverride::Sum_12 ($source)
	 * @uses EnumerableMethodsOverride::Sum_13 ($source)
	 * @uses EnumerableMethodsOverride::Sum_14 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Sum_15 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Sum_16 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Sum_17 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Sum_18 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Sum_19 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Sum_20 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Sum_21 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Sum_22 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Sum_23 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Sum_24 ($source, $selector)
	 * @uses EnumerableMethodsOverride::Sum_25 ($source, $selector)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Sum(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::Take_1 ($source, $count)
	 * @uses EnumerableMethodsOverride::Take_2 ($source, $range)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Take(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source
	 * @param \System\Boolean $isStartIndexFromEnd
	 * @param \System\Int32|int $startIndex
	 * @param \System\Boolean $isEndIndexFromEnd
	 * @param \System\Int32|int $endIndex
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TakeRangeFromEndIterator($source, $isStartIndexFromEnd, $startIndex, $isEndIndexFromEnd, $endIndex){}
	/**
	 * @uses EnumerableMethodsOverride::TakeWhile_1 ($source, $predicate)
	 * @uses EnumerableMethodsOverride::TakeWhile_2 ($source, $predicate)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TakeWhile(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::TakeWhileIterator_1 ($source, $predicate)
	 * @uses EnumerableMethodsOverride::TakeWhileIterator_2 ($source, $predicate)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TakeWhileIterator(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source
	 * @param \System\Int32|int $count
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function TakeLast($source, $count){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source
	 * @return \System\Linq\TSource[]
	 */
	public static function ToArray($source){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source
	 * @return \System\Collections\Generic\List_1
	 */
	public static function ToList($source){}
	/**
	 * @uses EnumerableMethodsOverride::ToDictionary_1 ($source, $keySelector)
	 * @uses EnumerableMethodsOverride::ToDictionary_2 ($source, $keySelector, $comparer)
	 * @uses EnumerableMethodsOverride::ToDictionary_3 ($source, $keySelector, $comparer)
	 * @uses EnumerableMethodsOverride::ToDictionary_4 ($source, $keySelector, $comparer)
	 * @uses EnumerableMethodsOverride::ToDictionary_5 ($source, $keySelector, $elementSelector)
	 * @uses EnumerableMethodsOverride::ToDictionary_6 ($source, $keySelector, $elementSelector, $comparer)
	 * @uses EnumerableMethodsOverride::ToDictionary_7 ($source, $keySelector, $elementSelector, $comparer)
	 * @uses EnumerableMethodsOverride::ToDictionary_8 ($source, $keySelector, $elementSelector, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToDictionary(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::ToHashSet_1 ($source)
	 * @uses EnumerableMethodsOverride::ToHashSet_2 ($source, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToHashSet(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\HashSet_1 $set
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function HashSetToArray($set){}
	/**
	 * @param \System\Collections\Generic\HashSet_1 $set
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function HashSetToList($set){}
	/**
	 * @uses EnumerableMethodsOverride::Union_1 ($first, $second)
	 * @uses EnumerableMethodsOverride::Union_2 ($first, $second, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Union(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::UnionBy_1 ($first, $second, $keySelector)
	 * @uses EnumerableMethodsOverride::UnionBy_2 ($first, $second, $keySelector, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function UnionBy(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $first
	 * @param \System\Collections\Generic\IEnumerable_1 $second
	 * @param \System\Func_2 $keySelector
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UnionByIterator($first, $second, $keySelector, $comparer){}
	/**
	 * @uses EnumerableMethodsOverride::Where_1 ($source, $predicate)
	 * @uses EnumerableMethodsOverride::Where_2 ($source, $predicate)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Where(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source
	 * @param \System\Func_3 $predicate
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WhereIterator($source, $predicate){}
	/**
	 * @uses EnumerableMethodsOverride::Zip_1 ($first, $second, $resultSelector)
	 * @uses EnumerableMethodsOverride::Zip_2 ($first, $second)
	 * @uses EnumerableMethodsOverride::Zip_3 ($first, $second, $third)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Zip(mixed ...$args){}
	/**
	 * @uses EnumerableMethodsOverride::ZipIterator_1 ($first, $second)
	 * @uses EnumerableMethodsOverride::ZipIterator_2 ($first, $second, $resultSelector)
	 * @uses EnumerableMethodsOverride::ZipIterator_3 ($first, $second, $third)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ZipIterator(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
