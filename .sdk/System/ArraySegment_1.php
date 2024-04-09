<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ArraySegment_1Override {
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @return \T|object
	 */
	#[MethodOverride]public function get_Item_1 ($index){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @return \T|object
	 */
	#[MethodOverride]private function get_Item_2 ($index){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @return \T|object
	 */
	#[MethodOverride]private function get_Item_3 ($index){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function set_Item_1 ($index, $value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function set_Item_2 ($index, $value){}
	/**
	 * @deprecated
	 * @return \System\ArraySegment_1
	 */
	#[MethodOverride]public function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]private function GetEnumerator_2 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_3 (){}
	/**
	 * @deprecated
	 * @param \T $destination
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_1 ($destination){}
	/**
	 * @deprecated
	 * @param \T $destination
	 * @param \System\Int32|int $destinationIndex
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_2 ($destination, $destinationIndex){}
	/**
	 * @deprecated
	 * @param \System\ArraySegment_1 $destination [generic: T]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_3 ($destination){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @return \System\ArraySegment_1
	 */
	#[MethodOverride]public function Slice_1 ($index){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\ArraySegment_1
	 */
	#[MethodOverride]public function Slice_2 ($index, $count){}
	/**
	 * @param \T $array
	 */
	#[MethodOverride]public function __construct_1 ($array){}
	/**
	 * @param \T $array
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 */
	#[MethodOverride]public function __construct_2 ($array, $offset, $count){}
}
final class ArraySegment_1 extends \System\ValueType implements
	\System\Collections\Generic\IList_1,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1
{
	use ArraySegment_1Override;
	/**
	 * @property
	 * @var \System\ArraySegment_1[T]
	 * @since readonly
	 */
	public $Empty;
	/**
	 * @property
	 * @var \T[]
	 * @since readonly
	 */
	public $Array;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Offset;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \T|object
	 */
	public $Item;
	/**
	 * @uses ArraySegment_1Override::get_Item_1 <br>public , args: ($index)<br>
	 * @uses ArraySegment_1Override::get_Item_2 <br>private , args: ($index)<br>
	 * @uses ArraySegment_1Override::get_Item_3 <br>private , args: ($index)<br>
	 * @var mixed|\override ...$args
	 * @return \T|object|mixed|\override
	 */
	#[MethodOverridePublic]function get_Item (\override ...$args){}
	/**
	 * @uses ArraySegment_1Override::set_Item_1 <br>public , args: ($index, $value)<br>
	 * @uses ArraySegment_1Override::set_Item_2 <br>private , args: ($index, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function set_Item (\override ...$args){}
	/**
	 * @uses ArraySegment_1Override::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses ArraySegment_1Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @uses ArraySegment_1Override::GetEnumerator_3 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\ArraySegment_1|\System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @uses ArraySegment_1Override::CopyTo_1 <br>public , args: ($destination)<br>
	 * @uses ArraySegment_1Override::CopyTo_2 <br>public , args: ($destination, $destinationIndex)<br>
	 * @uses ArraySegment_1Override::CopyTo_3 <br>public , args: ($destination)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function CopyTo (\override ...$args){}
	/**
	 * @uses ArraySegment_1Override::Slice_1 <br>public , args: ($index)<br>
	 * @uses ArraySegment_1Override::Slice_2 <br>public , args: ($index, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\ArraySegment_1|mixed|\override
	 */
	#[MethodOverridePublic]function Slice (\override ...$args){}
	/**
	 * @return \T[]
	 */
	public function ToArray(){}
	/**
	 * @param \System\ArraySegment_1 $a [generic: T]
	 * @param \System\ArraySegment_1 $b [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \System\ArraySegment_1 $a [generic: T]
	 * @param \System\ArraySegment_1 $b [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($a, $b){}
	/**
	 * @param \T $array
	 * @return \System\ArraySegment_1[T]
	 */
	public static function op_Implicit($array){}
	private function IndexOf($item){}
	private function Insert($index, $item){}
	private function RemoveAt($index){}
	private function get_IsReadOnly(){}
	private function Add($item){}
	private function Clear(){}
	private function Contains($item){}
	private function Remove($item){}
	private function ThrowInvalidOperationIfDefault(){}
	/**
	 * @uses ArraySegment_1Override::__construct_1 <br>public , args: ($array)<br>
	 * @uses ArraySegment_1Override::__construct_2 <br>public , args: ($array, $offset, $count)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}