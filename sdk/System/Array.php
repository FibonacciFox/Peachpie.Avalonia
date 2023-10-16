<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ArrayMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Copy_1($sourceArray, $destinationArray, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Copy_2($sourceArray, $sourceIndex, $destinationArray, $destinationIndex, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function Copy_3($sourceArray, $sourceIndex, $destinationArray, $destinationIndex, $length, $reliable){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Copy_4($sourceArray, $destinationArray, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Copy_5($sourceArray, $sourceIndex, $destinationArray, $destinationIndex, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Clear_1($array){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Clear_2($array, $index, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Clear_3(){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] private  function GetFlattenedIndex_1($rawIndex){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] private  function GetFlattenedIndex_2($indices){}
	/**
	 * @return \System\Array|array
	 */
	#[MethodOverride] public static function CreateInstance_1($elementType, $length){}
	/**
	 * @return \System\Array|array
	 */
	#[MethodOverride] public static function CreateInstance_2($elementType, $length1, $length2){}
	/**
	 * @return \System\Array|array
	 */
	#[MethodOverride] public static function CreateInstance_3($elementType, $length1, $length2, $length3){}
	/**
	 * @return \System\Array|array
	 */
	#[MethodOverride] public static function CreateInstance_4($elementType, $lengths){}
	/**
	 * @return \System\Array|array
	 */
	#[MethodOverride] public static function CreateInstance_5($elementType, $lengths, $lowerBounds){}
	/**
	 * @return \System\Array|array
	 */
	#[MethodOverride] public static function CreateInstance_6($elementType, $lengths){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetValue_1($indices){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetValue_2($index){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetValue_3($index1, $index2){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetValue_4($index1, $index2, $index3){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetValue_5($index){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetValue_6($index1, $index2){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetValue_7($index1, $index2, $index3){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetValue_8($indices){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_1($value, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_2($value, $index1, $index2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_3($value, $index1, $index2, $index3){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_4($value, $indices){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_5($value, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_6($value, $index1, $index2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_7($value, $index1, $index2, $index3){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_8($value, $indices){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function IndexOf_1($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function IndexOf_2($array, $value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function IndexOf_3($array, $value, $startIndex){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function IndexOf_4($array, $value, $startIndex, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function IndexOf_5($array, $value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function IndexOf_6($array, $value, $startIndex){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function IndexOf_7($array, $value, $startIndex, $count){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Equals_1($other, $comparer){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function GetHashCode_1($comparer){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_2(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function BinarySearch_1($array, $value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function BinarySearch_2($array, $index, $length, $value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function BinarySearch_3($array, $value, $comparer){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function BinarySearch_4($array, $index, $length, $value, $comparer){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function BinarySearch_5($array, $value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function BinarySearch_6($array, $value, $comparer){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function BinarySearch_7($array, $index, $length, $value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function BinarySearch_8($array, $index, $length, $value, $comparer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($array, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_2($array, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Fill_1($array, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Fill_2($array, $value, $startIndex, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function FindIndex_1($array, $match){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function FindIndex_2($array, $startIndex, $match){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function FindIndex_3($array, $startIndex, $count, $match){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function FindLastIndex_1($array, $match){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function FindLastIndex_2($array, $startIndex, $match){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function FindLastIndex_3($array, $startIndex, $count, $match){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function LastIndexOf_1($array, $value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function LastIndexOf_2($array, $value, $startIndex){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function LastIndexOf_3($array, $value, $startIndex, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function LastIndexOf_4($array, $value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function LastIndexOf_5($array, $value, $startIndex){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function LastIndexOf_6($array, $value, $startIndex, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Reverse_1($array){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Reverse_2($array, $index, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Reverse_3($array){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Reverse_4($array, $index, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Sort_1($array){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Sort_2($keys, $items){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Sort_3($array, $index, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Sort_4($keys, $items, $index, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Sort_5($array, $comparer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Sort_6($keys, $items, $comparer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Sort_7($array, $index, $length, $comparer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Sort_8($keys, $items, $index, $length, $comparer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Sort_9($array){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Sort_10($keys, $items){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Sort_11($array, $index, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Sort_12($keys, $items, $index, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Sort_13($array, $comparer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Sort_14($keys, $items, $comparer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Sort_15($array, $index, $length, $comparer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Sort_16($keys, $items, $index, $length, $comparer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Sort_17($array, $comparison){}
}
/**
 */
class Array extends \System\Object implements 
	\System\ICloneable,
	\System\Collections\IList,
	\System\Collections\ICollection,
	\System\Collections\IEnumerable,
	\System\Collections\IStructuralComparable,
	\System\Collections\IStructuralEquatable
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Length;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $LongLength;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Rank;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $SyncRoot;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsReadOnly;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsFixedSize;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSynchronized;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MaxLength;
	/**
	 * @param \System\RuntimeType $elementType
	 * @param \System\Int32|int $rank
	 * @param \System\Int32* $pLengths
	 * @param \System\Int32* $pLowerBounds
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalCreate($elementType, $rank, $pLengths, $pLowerBounds){}
	/**
	 * @uses ArrayMethodsOverride::Copy_1 ($sourceArray, $destinationArray, $length)
	 * @uses ArrayMethodsOverride::Copy_2 ($sourceArray, $sourceIndex, $destinationArray, $destinationIndex, $length)
	 * @uses ArrayMethodsOverride::Copy_3 ($sourceArray, $sourceIndex, $destinationArray, $destinationIndex, $length, $reliable)
	 * @uses ArrayMethodsOverride::Copy_4 ($sourceArray, $destinationArray, $length)
	 * @uses ArrayMethodsOverride::Copy_5 ($sourceArray, $sourceIndex, $destinationArray, $destinationIndex, $length)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Copy(mixed ...$args){}
	/**
	 * @param \System\Array|array $sourceArray
	 * @param \System\Array|array $destinationArray
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsSimpleCopy($sourceArray, $destinationArray){}
	/**
	 * @param \System\Array|array $sourceArray
	 * @param \System\Int32|int $sourceIndex
	 * @param \System\Array|array $destinationArray
	 * @param \System\Int32|int $destinationIndex
	 * @param \System\Int32|int $length
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CopySlow($sourceArray, $sourceIndex, $destinationArray, $destinationIndex, $length){}
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
	 * @uses ArrayMethodsOverride::Clear_1 ($array)
	 * @uses ArrayMethodsOverride::Clear_2 ($array, $index, $length)
	 * @uses ArrayMethodsOverride::Clear_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Clear(mixed ...$args){}
	/**
	 * @uses ArrayMethodsOverride::GetFlattenedIndex_1 ($rawIndex)
	 * @uses ArrayMethodsOverride::GetFlattenedIndex_2 ($indices)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetFlattenedIndex(mixed ...$args){}
	/**
	 * @param \System\IntPtr $flattenedIndex
	 * @return \System\Object|object
	 */
	protected  function InternalGetValue($flattenedIndex){}
	/**
	 * @param \System\Object|object $value
	 * @param \System\IntPtr $flattenedIndex
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalSetValue($value, $flattenedIndex){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Length(){}
	/**
	 * @return \System\UIntPtr
	 */
	protected  function get_NativeLength(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_LongLength(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Rank(){}
	/**
	 * @param \System\Int32|int $dimension
	 * @return \System\Int32|int
	 */
	public  function GetLength($dimension){}
	/**
	 * @param \System\Int32|int $dimension
	 * @return \System\Int32|int
	 */
	public  function GetUpperBound($dimension){}
	/**
	 * @param \System\Int32|int $dimension
	 * @return \System\Int32|int
	 */
	public  function GetLowerBound($dimension){}
	/**
	 * @return \System\Reflection\CorElementType
	 */
	protected  function GetCorElementTypeOfElementType(){}
	/**
	 * @param \System\Object|object $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsValueOfElementType($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function Initialize(){}
	/**
	 * @param \System\T[] $array
	 * @return \System\Collections\ObjectModel\ReadOnlyCollection_1
	 */
	public static function AsReadOnly($array){}
	/**
	 * @param \System\T[]& $array
	 * @param \System\Int32|int $newSize
	 * @return \System\Void|void
	 */
	public static function Resize($array, $newSize){}
	/**
	 * @uses ArrayMethodsOverride::CreateInstance_1 ($elementType, $length)
	 * @uses ArrayMethodsOverride::CreateInstance_2 ($elementType, $length1, $length2)
	 * @uses ArrayMethodsOverride::CreateInstance_3 ($elementType, $length1, $length2, $length3)
	 * @uses ArrayMethodsOverride::CreateInstance_4 ($elementType, $lengths)
	 * @uses ArrayMethodsOverride::CreateInstance_5 ($elementType, $lengths, $lowerBounds)
	 * @uses ArrayMethodsOverride::CreateInstance_6 ($elementType, $lengths)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CreateInstance(mixed ...$args){}
	/**
	 * @uses ArrayMethodsOverride::GetValue_1 ($indices)
	 * @uses ArrayMethodsOverride::GetValue_2 ($index)
	 * @uses ArrayMethodsOverride::GetValue_3 ($index1, $index2)
	 * @uses ArrayMethodsOverride::GetValue_4 ($index1, $index2, $index3)
	 * @uses ArrayMethodsOverride::GetValue_5 ($index)
	 * @uses ArrayMethodsOverride::GetValue_6 ($index1, $index2)
	 * @uses ArrayMethodsOverride::GetValue_7 ($index1, $index2, $index3)
	 * @uses ArrayMethodsOverride::GetValue_8 ($indices)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses ArrayMethodsOverride::SetValue_1 ($value, $index)
	 * @uses ArrayMethodsOverride::SetValue_2 ($value, $index1, $index2)
	 * @uses ArrayMethodsOverride::SetValue_3 ($value, $index1, $index2, $index3)
	 * @uses ArrayMethodsOverride::SetValue_4 ($value, $indices)
	 * @uses ArrayMethodsOverride::SetValue_5 ($value, $index)
	 * @uses ArrayMethodsOverride::SetValue_6 ($value, $index1, $index2)
	 * @uses ArrayMethodsOverride::SetValue_7 ($value, $index1, $index2, $index3)
	 * @uses ArrayMethodsOverride::SetValue_8 ($value, $indices)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @param \System\Int32|int $low
	 * @param \System\Int32|int $hi
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetMedian($low, $hi){}
	/**
	 * @param \System\Int32|int $dimension
	 * @return \System\Int64|int
	 */
	public  function GetLongLength($dimension){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Count(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_SyncRoot(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReadOnly(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsFixedSize(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSynchronized(){}
	/**
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Item($index){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Object|object $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Item($index, $value){}
	/**
	 * @param \System\Object|object $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Add($value){}
	/**
	 * @param \System\Object|object $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Contains($value){}
	/**
	 * @uses ArrayMethodsOverride::IndexOf_1 ($value)
	 * @uses ArrayMethodsOverride::IndexOf_2 ($array, $value)
	 * @uses ArrayMethodsOverride::IndexOf_3 ($array, $value, $startIndex)
	 * @uses ArrayMethodsOverride::IndexOf_4 ($array, $value, $startIndex, $count)
	 * @uses ArrayMethodsOverride::IndexOf_5 ($array, $value)
	 * @uses ArrayMethodsOverride::IndexOf_6 ($array, $value, $startIndex)
	 * @uses ArrayMethodsOverride::IndexOf_7 ($array, $value, $startIndex, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IndexOf(mixed ...$args){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Object|object $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Insert($index, $value){}
	/**
	 * @param \System\Object|object $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Remove($value){}
	/**
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RemoveAt($index){}
	/**
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @param \System\Object|object $other
	 * @param \System\Collections\IComparer $comparer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CompareTo($other, $comparer){}
	/**
	 * @uses ArrayMethodsOverride::Equals_1 ($other, $comparer)
	 * @uses ArrayMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses ArrayMethodsOverride::GetHashCode_1 ($comparer)
	 * @uses ArrayMethodsOverride::GetHashCode_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHashCode(mixed ...$args){}
	/**
	 * @uses ArrayMethodsOverride::BinarySearch_1 ($array, $value)
	 * @uses ArrayMethodsOverride::BinarySearch_2 ($array, $index, $length, $value)
	 * @uses ArrayMethodsOverride::BinarySearch_3 ($array, $value, $comparer)
	 * @uses ArrayMethodsOverride::BinarySearch_4 ($array, $index, $length, $value, $comparer)
	 * @uses ArrayMethodsOverride::BinarySearch_5 ($array, $value)
	 * @uses ArrayMethodsOverride::BinarySearch_6 ($array, $value, $comparer)
	 * @uses ArrayMethodsOverride::BinarySearch_7 ($array, $index, $length, $value)
	 * @uses ArrayMethodsOverride::BinarySearch_8 ($array, $index, $length, $value, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function BinarySearch(mixed ...$args){}
	/**
	 * @param \System\TInput[] $array
	 * @param \System\Converter_2 $converter
	 * @return \System\TOutput[]
	 */
	public static function ConvertAll($array, $converter){}
	/**
	 * @uses ArrayMethodsOverride::CopyTo_1 ($array, $index)
	 * @uses ArrayMethodsOverride::CopyTo_2 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @return \System\T[]
	 */
	public static function Empty(){}
	/**
	 * @param \System\T[] $array
	 * @param \System\Predicate_1 $match
	 * @return \System\Boolean
	 */
	public static function Exists($array, $match){}
	/**
	 * @uses ArrayMethodsOverride::Fill_1 ($array, $value)
	 * @uses ArrayMethodsOverride::Fill_2 ($array, $value, $startIndex, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Fill(mixed ...$args){}
	/**
	 * @param \System\T[] $array
	 * @param \System\Predicate_1 $match
	 * @return \System\T
	 */
	public static function Find($array, $match){}
	/**
	 * @param \System\T[] $array
	 * @param \System\Predicate_1 $match
	 * @return \System\T[]
	 */
	public static function FindAll($array, $match){}
	/**
	 * @uses ArrayMethodsOverride::FindIndex_1 ($array, $match)
	 * @uses ArrayMethodsOverride::FindIndex_2 ($array, $startIndex, $match)
	 * @uses ArrayMethodsOverride::FindIndex_3 ($array, $startIndex, $count, $match)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FindIndex(mixed ...$args){}
	/**
	 * @param \System\T[] $array
	 * @param \System\Predicate_1 $match
	 * @return \System\T
	 */
	public static function FindLast($array, $match){}
	/**
	 * @uses ArrayMethodsOverride::FindLastIndex_1 ($array, $match)
	 * @uses ArrayMethodsOverride::FindLastIndex_2 ($array, $startIndex, $match)
	 * @uses ArrayMethodsOverride::FindLastIndex_3 ($array, $startIndex, $count, $match)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FindLastIndex(mixed ...$args){}
	/**
	 * @param \System\T[] $array
	 * @param \System\Action_1 $action
	 * @return \System\Void|void
	 */
	public static function ForEach($array, $action){}
	/**
	 * @uses ArrayMethodsOverride::LastIndexOf_1 ($array, $value)
	 * @uses ArrayMethodsOverride::LastIndexOf_2 ($array, $value, $startIndex)
	 * @uses ArrayMethodsOverride::LastIndexOf_3 ($array, $value, $startIndex, $count)
	 * @uses ArrayMethodsOverride::LastIndexOf_4 ($array, $value)
	 * @uses ArrayMethodsOverride::LastIndexOf_5 ($array, $value, $startIndex)
	 * @uses ArrayMethodsOverride::LastIndexOf_6 ($array, $value, $startIndex, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function LastIndexOf(mixed ...$args){}
	/**
	 * @uses ArrayMethodsOverride::Reverse_1 ($array)
	 * @uses ArrayMethodsOverride::Reverse_2 ($array, $index, $length)
	 * @uses ArrayMethodsOverride::Reverse_3 ($array)
	 * @uses ArrayMethodsOverride::Reverse_4 ($array, $index, $length)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Reverse(mixed ...$args){}
	/**
	 * @uses ArrayMethodsOverride::Sort_1 ($array)
	 * @uses ArrayMethodsOverride::Sort_2 ($keys, $items)
	 * @uses ArrayMethodsOverride::Sort_3 ($array, $index, $length)
	 * @uses ArrayMethodsOverride::Sort_4 ($keys, $items, $index, $length)
	 * @uses ArrayMethodsOverride::Sort_5 ($array, $comparer)
	 * @uses ArrayMethodsOverride::Sort_6 ($keys, $items, $comparer)
	 * @uses ArrayMethodsOverride::Sort_7 ($array, $index, $length, $comparer)
	 * @uses ArrayMethodsOverride::Sort_8 ($keys, $items, $index, $length, $comparer)
	 * @uses ArrayMethodsOverride::Sort_9 ($array)
	 * @uses ArrayMethodsOverride::Sort_10 ($keys, $items)
	 * @uses ArrayMethodsOverride::Sort_11 ($array, $index, $length)
	 * @uses ArrayMethodsOverride::Sort_12 ($keys, $items, $index, $length)
	 * @uses ArrayMethodsOverride::Sort_13 ($array, $comparer)
	 * @uses ArrayMethodsOverride::Sort_14 ($keys, $items, $comparer)
	 * @uses ArrayMethodsOverride::Sort_15 ($array, $index, $length, $comparer)
	 * @uses ArrayMethodsOverride::Sort_16 ($keys, $items, $index, $length, $comparer)
	 * @uses ArrayMethodsOverride::Sort_17 ($array, $comparison)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Sort(mixed ...$args){}
	/**
	 * @param \System\T[] $array
	 * @param \System\Predicate_1 $match
	 * @return \System\Boolean
	 */
	public static function TrueForAll($array, $match){}
	/**
	 * @return \System\Int32|int
	 */
	public static function get_MaxLength(){}
	/**
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $adjustedIndex
	 * @param \System\Int32|int $length
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UnsafeArrayAsSpan($array, $adjustedIndex, $length){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	public  function GetEnumerator(){}
}
