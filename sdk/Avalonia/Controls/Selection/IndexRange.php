<?php
namespace Avalonia\Controls\Selection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait IndexRangeMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Contains_1($index){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function Contains_2($ranges, $index){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Add_1($ranges, $range, $added){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Add_2($destination, $source, $added){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Remove_1($ranges, $range, $removed){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Remove_2($destination, $source, $added){}
}
/**
 */
class IndexRange extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Begin;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $End;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Begin(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_End(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @uses IndexRangeMethodsOverride::Contains_1 ($index)
	 * @uses IndexRangeMethodsOverride::Contains_2 ($ranges, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Contains(mixed ...$args){}
	/**
	 * @param \System\Int32|int $splitIndex
	 * @param \Avalonia\Controls\Selection\IndexRange& $before
	 * @param \Avalonia\Controls\Selection\IndexRange& $after
	 * @return \System\Boolean
	 */
	public  function Split($splitIndex, $before, $after){}
	/**
	 * @param \Avalonia\Controls\Selection\IndexRange $other
	 * @return \System\Boolean
	 */
	public  function Intersects($other){}
	/**
	 * @param \Avalonia\Controls\Selection\IndexRange $other
	 * @return \System\Boolean
	 */
	public  function Adjacent($other){}
	/**
	 * @uses IndexRangeMethodsOverride::Equals_1 ($obj)
	 * @uses IndexRangeMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \Avalonia\Controls\Selection\IndexRange $left
	 * @param \Avalonia\Controls\Selection\IndexRange $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Controls\Selection\IndexRange $left
	 * @param \Avalonia\Controls\Selection\IndexRange $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $ranges
	 * @param \System\Int32|int $index
	 * @return \System\Int32|int
	 */
	public static function GetAt($ranges, $index){}
	/**
	 * @uses IndexRangeMethodsOverride::Add_1 ($ranges, $range, $added)
	 * @uses IndexRangeMethodsOverride::Add_2 ($destination, $source, $added)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Add(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\IList_1 $ranges
	 * @param \Avalonia\Controls\Selection\IndexRange $range
	 * @param \System\Collections\Generic\IList_1 $removed
	 * @return \System\Int32|int
	 */
	public static function Intersect($ranges, $range, $removed){}
	/**
	 * @uses IndexRangeMethodsOverride::Remove_1 ($ranges, $range, $removed)
	 * @uses IndexRangeMethodsOverride::Remove_2 ($destination, $source, $added)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Remove(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $ranges
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function EnumerateIndices($ranges){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $ranges
	 * @return \System\Int32|int
	 */
	public static function GetCount($ranges){}
	/**
	 * @param \System\Collections\Generic\IList_1 $ranges
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MergeRanges($ranges){}
}
