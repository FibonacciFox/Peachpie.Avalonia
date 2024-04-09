<?php
namespace System\Collections;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ArrayListOverride {
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @param \System\Object|object $value
	 * @param \System\Collections\IComparer $comparer
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function BinarySearch_1 ($index, $count, $value, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function BinarySearch_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @param \System\Collections\IComparer $comparer
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function BinarySearch_3 ($value, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_1 ($array){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $arrayIndex
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_2 ($array, $arrayIndex){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $arrayIndex
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_3 ($index, $array, $arrayIndex, $count){}
	/**
	 * @deprecated
	 * @param \System\Collections\IList $list
	 * @return \System\Collections\IList
	 */
	#[MethodOverride]public static function FixedSize_1 ($list){}
	/**
	 * @deprecated
	 * @param \System\Collections\ArrayList $list
	 * @return \System\Collections\ArrayList
	 */
	#[MethodOverride]public static function FixedSize_2 ($list){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]public function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]public function GetEnumerator_2 ($index, $count){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @param \System\Int32|int $startIndex
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_2 ($value, $startIndex){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_3 ($value, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function LastIndexOf_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @param \System\Int32|int $startIndex
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function LastIndexOf_2 ($value, $startIndex){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function LastIndexOf_3 ($value, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \System\Collections\IList $list
	 * @return \System\Collections\IList
	 */
	#[MethodOverride]public static function ReadOnly_1 ($list){}
	/**
	 * @deprecated
	 * @param \System\Collections\ArrayList $list
	 * @return \System\Collections\ArrayList
	 */
	#[MethodOverride]public static function ReadOnly_2 ($list){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Reverse_1 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Reverse_2 ($index, $count){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Sort_1 (){}
	/**
	 * @deprecated
	 * @param \System\Collections\IComparer $comparer
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Sort_2 ($comparer){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @param \System\Collections\IComparer $comparer
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Sort_3 ($index, $count, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\IList $list
	 * @return \System\Collections\IList
	 */
	#[MethodOverride]public static function Synchronized_1 ($list){}
	/**
	 * @deprecated
	 * @param \System\Collections\ArrayList $list
	 * @return \System\Collections\ArrayList
	 */
	#[MethodOverride]public static function Synchronized_2 ($list){}
	/**
	 * @deprecated
	 * @return \System\Object
	 */
	#[MethodOverride]public function ToArray_1 (){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @return \System\Array|array
	 */
	#[MethodOverride]public function ToArray_2 ($type){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Int32|int $capacity
	 */
	#[MethodOverride]public function __construct_2 ($capacity){}
	/**
	 * @param \System\Collections\ICollection $c
	 */
	#[MethodOverride]public function __construct_3 ($c){}
}
class ArrayList extends \System\Object implements
	\System\Collections\IList,
	\System\Collections\ICollection,
	\System\Collections\IEnumerable,
	\System\ICloneable
{
	use ArrayListOverride;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Capacity;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
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
	public $IsReadOnly;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSynchronized;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $SyncRoot;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Item;
	/**
	 * @param \System\Collections\IList $list
	 * @return \System\Collections\ArrayList
	 */
	public static function Adapter($list){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	public function Add($value){}
	/**
	 * @param \System\Collections\ICollection $c
	 * @return \System\Void|void
	 */
	public function AddRange($c){}
	/**
	 * @uses ArrayListOverride::BinarySearch_1 <br>public , args: ($index, $count, $value, $comparer)<br>
	 * @uses ArrayListOverride::BinarySearch_2 <br>public , args: ($value)<br>
	 * @uses ArrayListOverride::BinarySearch_3 <br>public , args: ($value, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function BinarySearch (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	/**
	 * @return \System\Object|object
	 */
	public function Clone(){}
	/**
	 * @param \System\Object|object $item
	 * @return \System\Boolean|bool
	 */
	public function Contains($item){}
	/**
	 * @uses ArrayListOverride::CopyTo_1 <br>public , args: ($array)<br>
	 * @uses ArrayListOverride::CopyTo_2 <br>public , args: ($array, $arrayIndex)<br>
	 * @uses ArrayListOverride::CopyTo_3 <br>public , args: ($index, $array, $arrayIndex, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function CopyTo (\override ...$args){}
	private function EnsureCapacity($min){}
	/**
	 * @uses ArrayListOverride::FixedSize_1 <br>public , args: ($list)<br>
	 * @uses ArrayListOverride::FixedSize_2 <br>public , args: ($list)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\IList|\System\Collections\ArrayList|mixed|\override
	 */
	#[MethodOverridePublic]function FixedSize (\override ...$args){}
	/**
	 * @uses ArrayListOverride::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses ArrayListOverride::GetEnumerator_2 <br>public , args: ($index, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (\override ...$args){}
	/**
	 * @uses ArrayListOverride::IndexOf_1 <br>public , args: ($value)<br>
	 * @uses ArrayListOverride::IndexOf_2 <br>public , args: ($value, $startIndex)<br>
	 * @uses ArrayListOverride::IndexOf_3 <br>public , args: ($value, $startIndex, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function IndexOf (\override ...$args){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public function Insert($index, $value){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Collections\ICollection $c
	 * @return \System\Void|void
	 */
	public function InsertRange($index, $c){}
	/**
	 * @uses ArrayListOverride::LastIndexOf_1 <br>public , args: ($value)<br>
	 * @uses ArrayListOverride::LastIndexOf_2 <br>public , args: ($value, $startIndex)<br>
	 * @uses ArrayListOverride::LastIndexOf_3 <br>public , args: ($value, $startIndex, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function LastIndexOf (\override ...$args){}
	/**
	 * @uses ArrayListOverride::ReadOnly_1 <br>public , args: ($list)<br>
	 * @uses ArrayListOverride::ReadOnly_2 <br>public , args: ($list)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\IList|\System\Collections\ArrayList|mixed|\override
	 */
	#[MethodOverridePublic]function ReadOnly (\override ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Void|void
	 */
	public function Remove($obj){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public function RemoveAt($index){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public function RemoveRange($index, $count){}
	/**
	 * @param \System\Object|object $value
	 * @param \System\Int32|int $count
	 * @return \System\Collections\ArrayList
	 */
	public static function Repeat($value, $count){}
	/**
	 * @uses ArrayListOverride::Reverse_1 <br>public , args: ()<br>
	 * @uses ArrayListOverride::Reverse_2 <br>public , args: ($index, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Reverse (\override ...$args){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Collections\ICollection $c
	 * @return \System\Void|void
	 */
	public function SetRange($index, $c){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Collections\ArrayList
	 */
	public function GetRange($index, $count){}
	/**
	 * @uses ArrayListOverride::Sort_1 <br>public , args: ()<br>
	 * @uses ArrayListOverride::Sort_2 <br>public , args: ($comparer)<br>
	 * @uses ArrayListOverride::Sort_3 <br>public , args: ($index, $count, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Sort (\override ...$args){}
	/**
	 * @uses ArrayListOverride::Synchronized_1 <br>public , args: ($list)<br>
	 * @uses ArrayListOverride::Synchronized_2 <br>public , args: ($list)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\IList|\System\Collections\ArrayList|mixed|\override
	 */
	#[MethodOverridePublic]function Synchronized (\override ...$args){}
	/**
	 * @uses ArrayListOverride::ToArray_1 <br>public , args: ()<br>
	 * @uses ArrayListOverride::ToArray_2 <br>public , args: ($type)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|\System\Array|array|mixed|\override
	 */
	#[MethodOverridePublic]function ToArray (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public function TrimToSize(){}
	/**
	 * @uses ArrayListOverride::__construct_1 <br>public , args: ()<br>
	 * @uses ArrayListOverride::__construct_2 <br>public , args: ($capacity)<br>
	 * @uses ArrayListOverride::__construct_3 <br>public , args: ($c)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}