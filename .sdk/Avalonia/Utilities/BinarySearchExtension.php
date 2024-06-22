<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait BinarySearchExtensionOverride {
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IReadOnlyList_1 $list [generic: T]
	 * @param \T|object $value
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: T]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function BinarySearch_1 ($list, $value, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IReadOnlyList_1 $list [generic: T]
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $length
	 * @param \T|object $value
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: T]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function BinarySearch_2 ($list, $index, $length, $value, $comparer){}
}
class BinarySearchExtension extends \System\Object
{
	use BinarySearchExtensionOverride;


	private static function GetMedian($low, $hi){}
	/**
	 * @uses BinarySearchExtensionOverride::BinarySearch_1 <br>public , args: ($list, $value, $comparer)<br>
	 * @uses BinarySearchExtensionOverride::BinarySearch_2 <br>public , args: ($list, $index, $length, $value, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function BinarySearch (\override ...$args){}
}