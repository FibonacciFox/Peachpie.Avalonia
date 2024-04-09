<?php
namespace Avalonia\Controls\Selection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait IndexRangeOverride {
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Contains_1 ($index){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IReadOnlyList_1 $ranges [generic: Avalonia\Controls\Selection\IndexRange]
	 * @param \System\Int32|int $index
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function Contains_2 ($ranges, $index){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IList_1 $ranges [generic: Avalonia\Controls\Selection\IndexRange]
	 * @param \Avalonia\Controls\Selection\IndexRange $range
	 * @param \System\Collections\Generic\IList_1 $added [generic: Avalonia\Controls\Selection\IndexRange]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Add_1 ($ranges, $range, $added){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IList_1 $destination [generic: Avalonia\Controls\Selection\IndexRange]
	 * @param \System\Collections\Generic\IReadOnlyList_1 $source [generic: Avalonia\Controls\Selection\IndexRange]
	 * @param \System\Collections\Generic\IList_1 $added [generic: Avalonia\Controls\Selection\IndexRange]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Add_2 ($destination, $source, $added){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IList_1 $ranges [generic: Avalonia\Controls\Selection\IndexRange]
	 * @param \Avalonia\Controls\Selection\IndexRange $range
	 * @param \System\Collections\Generic\IList_1 $removed [generic: Avalonia\Controls\Selection\IndexRange]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Remove_1 ($ranges, $range, $removed){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IList_1 $destination [generic: Avalonia\Controls\Selection\IndexRange]
	 * @param \System\Collections\Generic\IReadOnlyList_1 $source [generic: Avalonia\Controls\Selection\IndexRange]
	 * @param \System\Collections\Generic\IList_1 $added [generic: Avalonia\Controls\Selection\IndexRange]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Remove_2 ($destination, $source, $added){}
	/**
	 * @param \System\Int32|int $index
	 */
	#[MethodOverride]public function __construct_1 ($index){}
	/**
	 * @param \System\Int32|int $begin
	 * @param \System\Int32|int $end
	 */
	#[MethodOverride]public function __construct_2 ($begin, $end){}
}
final class IndexRange extends \System\ValueType implements
	\System\IEquatable_1
{
	use IndexRangeOverride;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Begin;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $End;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @uses IndexRangeOverride::Contains_1 <br>public , args: ($index)<br>
	 * @uses IndexRangeOverride::Contains_2 <br>public , args: ($ranges, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function Contains (\override ...$args){}
	/**
	 * @param \System\Int32|int $splitIndex
	 * @param \Avalonia\Controls\Selection\IndexRange& &$before
	 * @param \Avalonia\Controls\Selection\IndexRange& &$after
	 * @return \System\Boolean|bool
	 */
	public function Split($splitIndex, &$before, &$after){}
	/**
	 * @param \Avalonia\Controls\Selection\IndexRange $other
	 * @return \System\Boolean|bool
	 */
	public function Intersects($other){}
	/**
	 * @param \Avalonia\Controls\Selection\IndexRange $other
	 * @return \System\Boolean|bool
	 */
	public function Adjacent($other){}
	/**
	 * @param \Avalonia\Controls\Selection\IndexRange $left
	 * @param \Avalonia\Controls\Selection\IndexRange $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Controls\Selection\IndexRange $left
	 * @param \Avalonia\Controls\Selection\IndexRange $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $ranges [generic: Avalonia\Controls\Selection\IndexRange]
	 * @param \System\Int32|int $index
	 * @return \System\Int32|int
	 */
	public static function GetAt($ranges, $index){}
	/**
	 * @uses IndexRangeOverride::Add_1 <br>public , args: ($ranges, $range, $added)<br>
	 * @uses IndexRangeOverride::Add_2 <br>public , args: ($destination, $source, $added)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function Add (\override ...$args){}
	/**
	 * @param \System\Collections\Generic\IList_1 $ranges [generic: Avalonia\Controls\Selection\IndexRange]
	 * @param \Avalonia\Controls\Selection\IndexRange $range
	 * @param \System\Collections\Generic\IList_1 $removed [generic: Avalonia\Controls\Selection\IndexRange]
	 * @return \System\Int32|int
	 */
	public static function Intersect($ranges, $range, $removed){}
	/**
	 * @uses IndexRangeOverride::Remove_1 <br>public , args: ($ranges, $range, $removed)<br>
	 * @uses IndexRangeOverride::Remove_2 <br>public , args: ($destination, $source, $added)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function Remove (\override ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $ranges [generic: Avalonia\Controls\Selection\IndexRange]
	 * @return \System\Collections\Generic\IEnumerable_1[System\Int32]
	 */
	public static function EnumerateIndices($ranges){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $ranges [generic: Avalonia\Controls\Selection\IndexRange]
	 * @return \System\Int32|int
	 */
	public static function GetCount($ranges){}
	private static function MergeRanges($ranges){}
	/**
	 * @uses IndexRangeOverride::__construct_1 <br>public , args: ($index)<br>
	 * @uses IndexRangeOverride::__construct_2 <br>public , args: ($begin, $end)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}