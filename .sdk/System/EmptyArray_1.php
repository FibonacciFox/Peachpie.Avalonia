<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ArrayOverride {
	/**
	 * @deprecated
	 * @param \System\Array|array $sourceArray
	 * @param \System\Array|array $destinationArray
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Copy_1 ($sourceArray, $destinationArray, $length){}
	/**
	 * @deprecated
	 * @param \System\Array|array $sourceArray
	 * @param \System\Int32|int $sourceIndex
	 * @param \System\Array|array $destinationArray
	 * @param \System\Int32|int $destinationIndex
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Copy_2 ($sourceArray, $sourceIndex, $destinationArray, $destinationIndex, $length){}
	/**
	 * @deprecated
	 * @param \System\Array|array $sourceArray
	 * @param \System\Int32|int $sourceIndex
	 * @param \System\Array|array $destinationArray
	 * @param \System\Int32|int $destinationIndex
	 * @param \System\Int32|int $length
	 * @param \System\Boolean|bool $reliable
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function Copy_3 ($sourceArray, $sourceIndex, $destinationArray, $destinationIndex, $length, $reliable){}
	/**
	 * @deprecated
	 * @param \System\Array|array $sourceArray
	 * @param \System\Array|array $destinationArray
	 * @param \System\Int64|int $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Copy_4 ($sourceArray, $destinationArray, $length){}
	/**
	 * @deprecated
	 * @param \System\Array|array $sourceArray
	 * @param \System\Int64|int $sourceIndex
	 * @param \System\Array|array $destinationArray
	 * @param \System\Int64|int $destinationIndex
	 * @param \System\Int64|int $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Copy_5 ($sourceArray, $sourceIndex, $destinationArray, $destinationIndex, $length){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Clear_1 ($array){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Clear_2 ($array, $index, $length){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Clear_3 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $rawIndex
	 * @return \System\IntPtr
	 */
	#[MethodOverride]private function GetFlattenedIndex_1 ($rawIndex){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $indices [generic: System\Int32]
	 * @return \System\IntPtr
	 */
	#[MethodOverride]private function GetFlattenedIndex_2 ($indices){}
	/**
	 * @deprecated
	 * @param \System\Type $elementType
	 * @param \System\Int32|int $length
	 * @return \System\Array|array
	 */
	#[MethodOverride]public static function CreateInstance_1 ($elementType, $length){}
	/**
	 * @deprecated
	 * @param \System\Type $elementType
	 * @param \System\Int32|int $length1
	 * @param \System\Int32|int $length2
	 * @return \System\Array|array
	 */
	#[MethodOverride]public static function CreateInstance_2 ($elementType, $length1, $length2){}
	/**
	 * @deprecated
	 * @param \System\Type $elementType
	 * @param \System\Int32|int $length1
	 * @param \System\Int32|int $length2
	 * @param \System\Int32|int $length3
	 * @return \System\Array|array
	 */
	#[MethodOverride]public static function CreateInstance_3 ($elementType, $length1, $length2, $length3){}
	/**
	 * @deprecated
	 * @param \System\Type $elementType
	 * @param \System\Int32 ...$lengths
	 * @return \System\Array|array
	 */
	#[MethodOverride]public static function CreateInstance_4 ($elementType, ...$lengths){}
	/**
	 * @deprecated
	 * @param \System\Type $elementType
	 * @param \System\Int32 $lengths
	 * @param \System\Int32 $lowerBounds
	 * @return \System\Array|array
	 */
	#[MethodOverride]public static function CreateInstance_5 ($elementType, $lengths, $lowerBounds){}
	/**
	 * @deprecated
	 * @param \System\Type $elementType
	 * @param \System\Int64 ...$lengths
	 * @return \System\Array|array
	 */
	#[MethodOverride]public static function CreateInstance_6 ($elementType, ...$lengths){}
	/**
	 * @deprecated
	 * @param \System\Int32 ...$indices
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function GetValue_1 (...$indices){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function GetValue_2 ($index){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index1
	 * @param \System\Int32|int $index2
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function GetValue_3 ($index1, $index2){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index1
	 * @param \System\Int32|int $index2
	 * @param \System\Int32|int $index3
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function GetValue_4 ($index1, $index2, $index3){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $index
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function GetValue_5 ($index){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $index1
	 * @param \System\Int64|int $index2
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function GetValue_6 ($index1, $index2){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $index1
	 * @param \System\Int64|int $index2
	 * @param \System\Int64|int $index3
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function GetValue_7 ($index1, $index2, $index3){}
	/**
	 * @deprecated
	 * @param \System\Int64 ...$indices
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function GetValue_8 (...$indices){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetValue_1 ($value, $index){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @param \System\Int32|int $index1
	 * @param \System\Int32|int $index2
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetValue_2 ($value, $index1, $index2){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @param \System\Int32|int $index1
	 * @param \System\Int32|int $index2
	 * @param \System\Int32|int $index3
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetValue_3 ($value, $index1, $index2, $index3){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @param \System\Int32 ...$indices
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetValue_4 ($value, ...$indices){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @param \System\Int64|int $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetValue_5 ($value, $index){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @param \System\Int64|int $index1
	 * @param \System\Int64|int $index2
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetValue_6 ($value, $index1, $index2){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @param \System\Int64|int $index1
	 * @param \System\Int64|int $index2
	 * @param \System\Int64|int $index3
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetValue_7 ($value, $index1, $index2, $index3){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @param \System\Int64 ...$indices
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetValue_8 ($value, ...$indices){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function IndexOf_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function IndexOf_2 ($array, $value){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @param \System\Object|object $value
	 * @param \System\Int32|int $startIndex
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function IndexOf_3 ($array, $value, $startIndex){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @param \System\Object|object $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function IndexOf_4 ($array, $value, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \T|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function IndexOf_5 ($array, $value){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \T|object $value
	 * @param \System\Int32|int $startIndex
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function IndexOf_6 ($array, $value, $startIndex){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \T|object $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function IndexOf_7 ($array, $value, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \System\Object|object $other
	 * @param \System\Collections\IEqualityComparer $comparer
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function Equals_1 ($other, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\IEqualityComparer $comparer
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function GetHashCode_1 ($comparer){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function BinarySearch_1 ($array, $value){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $length
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function BinarySearch_2 ($array, $index, $length, $value){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @param \System\Object|object $value
	 * @param \System\Collections\IComparer $comparer
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function BinarySearch_3 ($array, $value, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $length
	 * @param \System\Object|object $value
	 * @param \System\Collections\IComparer $comparer
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function BinarySearch_4 ($array, $index, $length, $value, $comparer){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \T|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function BinarySearch_5 ($array, $value){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \T|object $value
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: T]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function BinarySearch_6 ($array, $value, $comparer){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $length
	 * @param \T|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function BinarySearch_7 ($array, $index, $length, $value){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $length
	 * @param \T|object $value
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: T]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function BinarySearch_8 ($array, $index, $length, $value, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_1 ($array, $index){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @param \System\Int64|int $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_2 ($array, $index){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Fill_1 ($array, $value){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \T|object $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Fill_2 ($array, $value, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \System\Predicate_1 $match [generic: T]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function FindIndex_1 ($array, $match){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \System\Int32|int $startIndex
	 * @param \System\Predicate_1 $match [generic: T]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function FindIndex_2 ($array, $startIndex, $match){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @param \System\Predicate_1 $match [generic: T]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function FindIndex_3 ($array, $startIndex, $count, $match){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \System\Predicate_1 $match [generic: T]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function FindLastIndex_1 ($array, $match){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \System\Int32|int $startIndex
	 * @param \System\Predicate_1 $match [generic: T]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function FindLastIndex_2 ($array, $startIndex, $match){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @param \System\Predicate_1 $match [generic: T]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function FindLastIndex_3 ($array, $startIndex, $count, $match){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function LastIndexOf_1 ($array, $value){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @param \System\Object|object $value
	 * @param \System\Int32|int $startIndex
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function LastIndexOf_2 ($array, $value, $startIndex){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @param \System\Object|object $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function LastIndexOf_3 ($array, $value, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \T|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function LastIndexOf_4 ($array, $value){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \T|object $value
	 * @param \System\Int32|int $startIndex
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function LastIndexOf_5 ($array, $value, $startIndex){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \T|object $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function LastIndexOf_6 ($array, $value, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Reverse_1 ($array){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Reverse_2 ($array, $index, $length){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Reverse_3 ($array){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Reverse_4 ($array, $index, $length){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Sort_1 ($array){}
	/**
	 * @deprecated
	 * @param \System\Array|array $keys
	 * @param \System\Array|array $items
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Sort_2 ($keys, $items){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Sort_3 ($array, $index, $length){}
	/**
	 * @deprecated
	 * @param \System\Array|array $keys
	 * @param \System\Array|array $items
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Sort_4 ($keys, $items, $index, $length){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @param \System\Collections\IComparer $comparer
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Sort_5 ($array, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Array|array $keys
	 * @param \System\Array|array $items
	 * @param \System\Collections\IComparer $comparer
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Sort_6 ($keys, $items, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $length
	 * @param \System\Collections\IComparer $comparer
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Sort_7 ($array, $index, $length, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Array|array $keys
	 * @param \System\Array|array $items
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $length
	 * @param \System\Collections\IComparer $comparer
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Sort_8 ($keys, $items, $index, $length, $comparer){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Sort_9 ($array){}
	/**
	 * @deprecated
	 * @param \TKey $keys
	 * @param \TValue $items
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Sort_10 ($keys, $items){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Sort_11 ($array, $index, $length){}
	/**
	 * @deprecated
	 * @param \TKey $keys
	 * @param \TValue $items
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Sort_12 ($keys, $items, $index, $length){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: T]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Sort_13 ($array, $comparer){}
	/**
	 * @deprecated
	 * @param \TKey $keys
	 * @param \TValue $items
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: TKey]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Sort_14 ($keys, $items, $comparer){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $length
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: T]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Sort_15 ($array, $index, $length, $comparer){}
	/**
	 * @deprecated
	 * @param \TKey $keys
	 * @param \TValue $items
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $length
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: TKey]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Sort_16 ($keys, $items, $index, $length, $comparer){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \System\Comparison_1 $comparison [generic: T]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Sort_17 ($array, $comparison){}
}
class Array extends \System\Object implements
	\System\ICloneable,
	\System\Collections\IList,
	\System\Collections\ICollection,
	\System\Collections\IEnumerable,
	\System\Collections\IStructuralComparable,
	\System\Collections\IStructuralEquatable
{
	use ArrayOverride;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Length;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $LongLength;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Rank;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $SyncRoot;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsReadOnly;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsFixedSize;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSynchronized;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MaxLength;
	private static function InternalCreate($elementType, $rank, $pLengths, $pLowerBounds){}
	/**
	 * @uses ArrayOverride::Copy_1 <br>public , args: ($sourceArray, $destinationArray, $length)<br>
	 * @uses ArrayOverride::Copy_2 <br>public , args: ($sourceArray, $sourceIndex, $destinationArray, $destinationIndex, $length)<br>
	 * @uses ArrayOverride::Copy_3 <br>private , args: ($sourceArray, $sourceIndex, $destinationArray, $destinationIndex, $length, $reliable)<br>
	 * @uses ArrayOverride::Copy_4 <br>public , args: ($sourceArray, $destinationArray, $length)<br>
	 * @uses ArrayOverride::Copy_5 <br>public , args: ($sourceArray, $sourceIndex, $destinationArray, $destinationIndex, $length)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Copy (\override ...$args){}
	private static function IsSimpleCopy($sourceArray, $destinationArray){}
	private static function CopySlow($sourceArray, $sourceIndex, $destinationArray, $destinationIndex, $length){}
	/**
	 * @param \System\Array|array $sourceArray
	 * @param \System\Int32|int $sourceIndex
	 * @param \System\Array|array $destinationArray
	 * @param \System\Int32|int $destinationIndex
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	public static function ConstrainedCopy($sourceArray, $sourceIndex, $destinationArray, $destinationIndex, $length){}
	/**
	 * @uses ArrayOverride::Clear_1 <br>public , args: ($array)<br>
	 * @uses ArrayOverride::Clear_2 <br>public , args: ($array, $index, $length)<br>
	 * @uses ArrayOverride::Clear_3 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Clear (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ArrayOverride::GetFlattenedIndex_1 <br>private , args: ($rawIndex)<br>
	 * @uses ArrayOverride::GetFlattenedIndex_2 <br>private , args: ($indices)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IntPtr|mixed|\override
	 */
	#[MethodOverridePrivate]function GetFlattenedIndex (\override ...$args){}
	/**
	 * @param \System\IntPtr $flattenedIndex
	 * @return \System\Object|object
	 */
	protected function InternalGetValue($flattenedIndex){}
	private function InternalSetValue($value, $flattenedIndex){}
	/**
	 * @param \System\Int32|int $dimension
	 * @return \System\Int32|int
	 */
	public function GetLength($dimension){}
	/**
	 * @param \System\Int32|int $dimension
	 * @return \System\Int32|int
	 */
	public function GetUpperBound($dimension){}
	/**
	 * @param \System\Int32|int $dimension
	 * @return \System\Int32|int
	 */
	public function GetLowerBound($dimension){}
	/**
	 * @return \System\Reflection\CorElementType
	 */
	protected function GetCorElementTypeOfElementType(){}
	private function IsValueOfElementType($value){}
	/**
	 * @return \System\Void|void
	 */
	public function Initialize(){}
	/**
	 * @param \T $array
	 * @return \System\Collections\ObjectModel\ReadOnlyCollection_1[T]
	 */
	public static function AsReadOnly($array){}
	/**
	 * @param \T $array
	 * @param \System\Int32|int $newSize
	 * @return \System\Void|void
	 */
	public static function Resize($array, $newSize){}
	/**
	 * @uses ArrayOverride::CreateInstance_1 <br>public , args: ($elementType, $length)<br>
	 * @uses ArrayOverride::CreateInstance_2 <br>public , args: ($elementType, $length1, $length2)<br>
	 * @uses ArrayOverride::CreateInstance_3 <br>public , args: ($elementType, $length1, $length2, $length3)<br>
	 * @uses ArrayOverride::CreateInstance_4 <br>public , args: ($elementType, ...$lengths)<br>
	 * @uses ArrayOverride::CreateInstance_5 <br>public , args: ($elementType, $lengths, $lowerBounds)<br>
	 * @uses ArrayOverride::CreateInstance_6 <br>public , args: ($elementType, ...$lengths)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Array|array|mixed|\override
	 */
	#[MethodOverridePublic]function CreateInstance (\override ...$args){}
	/**
	 * @uses ArrayOverride::GetValue_1 <br>public , args: (...$indices)<br>
	 * @uses ArrayOverride::GetValue_2 <br>public , args: ($index)<br>
	 * @uses ArrayOverride::GetValue_3 <br>public , args: ($index1, $index2)<br>
	 * @uses ArrayOverride::GetValue_4 <br>public , args: ($index1, $index2, $index3)<br>
	 * @uses ArrayOverride::GetValue_5 <br>public , args: ($index)<br>
	 * @uses ArrayOverride::GetValue_6 <br>public , args: ($index1, $index2)<br>
	 * @uses ArrayOverride::GetValue_7 <br>public , args: ($index1, $index2, $index3)<br>
	 * @uses ArrayOverride::GetValue_8 <br>public , args: (...$indices)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function GetValue (\override ...$args){}
	/**
	 * @uses ArrayOverride::SetValue_1 <br>public , args: ($value, $index)<br>
	 * @uses ArrayOverride::SetValue_2 <br>public , args: ($value, $index1, $index2)<br>
	 * @uses ArrayOverride::SetValue_3 <br>public , args: ($value, $index1, $index2, $index3)<br>
	 * @uses ArrayOverride::SetValue_4 <br>public , args: ($value, ...$indices)<br>
	 * @uses ArrayOverride::SetValue_5 <br>public , args: ($value, $index)<br>
	 * @uses ArrayOverride::SetValue_6 <br>public , args: ($value, $index1, $index2)<br>
	 * @uses ArrayOverride::SetValue_7 <br>public , args: ($value, $index1, $index2, $index3)<br>
	 * @uses ArrayOverride::SetValue_8 <br>public , args: ($value, ...$indices)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetValue (\override ...$args){}
	private static function GetMedian($low, $hi){}
	/**
	 * @param \System\Int32|int $dimension
	 * @return \System\Int64|int
	 */
	public function GetLongLength($dimension){}
	private function get_Count(){}
	private function get_Item($index){}
	private function set_Item($index, $value){}
	private function Add($value){}
	private function Contains($value){}
	/**
	 * @uses ArrayOverride::IndexOf_1 <br>private , args: ($value)<br>
	 * @uses ArrayOverride::IndexOf_2 <br>public , args: ($array, $value)<br>
	 * @uses ArrayOverride::IndexOf_3 <br>public , args: ($array, $value, $startIndex)<br>
	 * @uses ArrayOverride::IndexOf_4 <br>public , args: ($array, $value, $startIndex, $count)<br>
	 * @uses ArrayOverride::IndexOf_5 <br>public , args: ($array, $value)<br>
	 * @uses ArrayOverride::IndexOf_6 <br>public , args: ($array, $value, $startIndex)<br>
	 * @uses ArrayOverride::IndexOf_7 <br>public , args: ($array, $value, $startIndex, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function IndexOf (\override ...$args){}
	private function Insert($index, $value){}
	private function Remove($value){}
	private function RemoveAt($index){}
	/**
	 * @return \System\Object|object
	 */
	public function Clone(){}
	private function CompareTo($other, $comparer){}
	/**
	 * @uses ArrayOverride::BinarySearch_1 <br>public , args: ($array, $value)<br>
	 * @uses ArrayOverride::BinarySearch_2 <br>public , args: ($array, $index, $length, $value)<br>
	 * @uses ArrayOverride::BinarySearch_3 <br>public , args: ($array, $value, $comparer)<br>
	 * @uses ArrayOverride::BinarySearch_4 <br>public , args: ($array, $index, $length, $value, $comparer)<br>
	 * @uses ArrayOverride::BinarySearch_5 <br>public , args: ($array, $value)<br>
	 * @uses ArrayOverride::BinarySearch_6 <br>public , args: ($array, $value, $comparer)<br>
	 * @uses ArrayOverride::BinarySearch_7 <br>public , args: ($array, $index, $length, $value)<br>
	 * @uses ArrayOverride::BinarySearch_8 <br>public , args: ($array, $index, $length, $value, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function BinarySearch (\override ...$args){}
	/**
	 * @param \TInput $array
	 * @param \System\Converter_2 $converter [generic: TInput,TOutput]
	 * @return \TOutput[]
	 */
	public static function ConvertAll($array, $converter){}
	/**
	 * @uses ArrayOverride::CopyTo_1 <br>public , args: ($array, $index)<br>
	 * @uses ArrayOverride::CopyTo_2 <br>public , args: ($array, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function CopyTo (\override ...$args){}
	/**
	 * @return \T[]
	 */
	public static function Empty(){}
	/**
	 * @param \T $array
	 * @param \System\Predicate_1 $match [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function Exists($array, $match){}
	/**
	 * @uses ArrayOverride::Fill_1 <br>public , args: ($array, $value)<br>
	 * @uses ArrayOverride::Fill_2 <br>public , args: ($array, $value, $startIndex, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Fill (\override ...$args){}
	/**
	 * @param \T $array
	 * @param \System\Predicate_1 $match [generic: T]
	 * @return \T|object
	 */
	public static function Find($array, $match){}
	/**
	 * @param \T $array
	 * @param \System\Predicate_1 $match [generic: T]
	 * @return \T[]
	 */
	public static function FindAll($array, $match){}
	/**
	 * @uses ArrayOverride::FindIndex_1 <br>public , args: ($array, $match)<br>
	 * @uses ArrayOverride::FindIndex_2 <br>public , args: ($array, $startIndex, $match)<br>
	 * @uses ArrayOverride::FindIndex_3 <br>public , args: ($array, $startIndex, $count, $match)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function FindIndex (\override ...$args){}
	/**
	 * @param \T $array
	 * @param \System\Predicate_1 $match [generic: T]
	 * @return \T|object
	 */
	public static function FindLast($array, $match){}
	/**
	 * @uses ArrayOverride::FindLastIndex_1 <br>public , args: ($array, $match)<br>
	 * @uses ArrayOverride::FindLastIndex_2 <br>public , args: ($array, $startIndex, $match)<br>
	 * @uses ArrayOverride::FindLastIndex_3 <br>public , args: ($array, $startIndex, $count, $match)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function FindLastIndex (\override ...$args){}
	/**
	 * @param \T $array
	 * @param \System\Action_1 $action [generic: T]
	 * @return \System\Void|void
	 */
	public static function ForEach($array, $action){}
	/**
	 * @uses ArrayOverride::LastIndexOf_1 <br>public , args: ($array, $value)<br>
	 * @uses ArrayOverride::LastIndexOf_2 <br>public , args: ($array, $value, $startIndex)<br>
	 * @uses ArrayOverride::LastIndexOf_3 <br>public , args: ($array, $value, $startIndex, $count)<br>
	 * @uses ArrayOverride::LastIndexOf_4 <br>public , args: ($array, $value)<br>
	 * @uses ArrayOverride::LastIndexOf_5 <br>public , args: ($array, $value, $startIndex)<br>
	 * @uses ArrayOverride::LastIndexOf_6 <br>public , args: ($array, $value, $startIndex, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function LastIndexOf (\override ...$args){}
	/**
	 * @uses ArrayOverride::Reverse_1 <br>public , args: ($array)<br>
	 * @uses ArrayOverride::Reverse_2 <br>public , args: ($array, $index, $length)<br>
	 * @uses ArrayOverride::Reverse_3 <br>public , args: ($array)<br>
	 * @uses ArrayOverride::Reverse_4 <br>public , args: ($array, $index, $length)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Reverse (\override ...$args){}
	/**
	 * @uses ArrayOverride::Sort_1 <br>public , args: ($array)<br>
	 * @uses ArrayOverride::Sort_2 <br>public , args: ($keys, $items)<br>
	 * @uses ArrayOverride::Sort_3 <br>public , args: ($array, $index, $length)<br>
	 * @uses ArrayOverride::Sort_4 <br>public , args: ($keys, $items, $index, $length)<br>
	 * @uses ArrayOverride::Sort_5 <br>public , args: ($array, $comparer)<br>
	 * @uses ArrayOverride::Sort_6 <br>public , args: ($keys, $items, $comparer)<br>
	 * @uses ArrayOverride::Sort_7 <br>public , args: ($array, $index, $length, $comparer)<br>
	 * @uses ArrayOverride::Sort_8 <br>public , args: ($keys, $items, $index, $length, $comparer)<br>
	 * @uses ArrayOverride::Sort_9 <br>public , args: ($array)<br>
	 * @uses ArrayOverride::Sort_10 <br>public , args: ($keys, $items)<br>
	 * @uses ArrayOverride::Sort_11 <br>public , args: ($array, $index, $length)<br>
	 * @uses ArrayOverride::Sort_12 <br>public , args: ($keys, $items, $index, $length)<br>
	 * @uses ArrayOverride::Sort_13 <br>public , args: ($array, $comparer)<br>
	 * @uses ArrayOverride::Sort_14 <br>public , args: ($keys, $items, $comparer)<br>
	 * @uses ArrayOverride::Sort_15 <br>public , args: ($array, $index, $length, $comparer)<br>
	 * @uses ArrayOverride::Sort_16 <br>public , args: ($keys, $items, $index, $length, $comparer)<br>
	 * @uses ArrayOverride::Sort_17 <br>public , args: ($array, $comparison)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Sort (\override ...$args){}
	/**
	 * @param \T $array
	 * @param \System\Predicate_1 $match [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function TrueForAll($array, $match){}
	private static function UnsafeArrayAsSpan($array, $adjustedIndex, $length){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	public function GetEnumerator(){}
}