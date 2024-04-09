<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait HashSet_1Override {
	/**
	 * @deprecated
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Add_1 ($item){}
	/**
	 * @deprecated
	 * @param \T|object $item
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Add_2 ($item){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\HashSet_1
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
	 * @param \T $array
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_1 ($array){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \System\Int32|int $arrayIndex
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_2 ($array, $arrayIndex){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \System\Int32|int $arrayIndex
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_3 ($array, $arrayIndex, $count){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Resize_1 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $newSize
	 * @param \System\Boolean|bool $forceNewHashCodes
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Resize_2 ($newSize, $forceNewHashCodes){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: T]
	 */
	#[MethodOverride]public function __construct_2 ($comparer){}
	/**
	 * @param \System\Int32|int $capacity
	 */
	#[MethodOverride]public function __construct_3 ($capacity){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $collection [generic: T]
	 */
	#[MethodOverride]public function __construct_4 ($collection){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $collection [generic: T]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: T]
	 */
	#[MethodOverride]public function __construct_5 ($collection, $comparer){}
	/**
	 * @param \System\Int32|int $capacity
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: T]
	 */
	#[MethodOverride]public function __construct_6 ($capacity, $comparer){}
}
class HashSet_1 extends \System\Object implements
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\Generic\ISet_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Generic\IReadOnlySet_1,
	\System\Runtime\Serialization\ISerializable,
	\System\Runtime\Serialization\IDeserializationCallback
{
	use HashSet_1Override;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEqualityComparer_1[T]
	 * @since readonly
	 */
	public $Comparer;
	private function ConstructFrom($source){}
	/**
	 * @uses HashSet_1Override::Add_1 <br>private , args: ($item)<br>
	 * @uses HashSet_1Override::Add_2 <br>public , args: ($item)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function Add (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	/**
	 * @param \T|object $item
	 * @return \System\Boolean|bool
	 */
	public function Contains($item){}
	private function FindItemIndex($item){}
	private function GetBucketRef($hashCode){}
	/**
	 * @param \T|object $item
	 * @return \System\Boolean|bool
	 */
	public function Remove($item){}
	private function get_IsReadOnly(){}
	/**
	 * @uses HashSet_1Override::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses HashSet_1Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @uses HashSet_1Override::GetEnumerator_3 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\HashSet_1|\System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public function GetObjectData($info, $context){}
	/**
	 * @param \System\Object|object $sender
	 * @return \System\Void|void
	 */
	public function OnDeserialization($sender){}
	/**
	 * @param \T|object $equalValue
	 * @param \T& &$actualValue
	 * @return \System\Boolean|bool
	 */
	public function TryGetValue($equalValue, &$actualValue){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other [generic: T]
	 * @return \System\Void|void
	 */
	public function UnionWith($other){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other [generic: T]
	 * @return \System\Void|void
	 */
	public function IntersectWith($other){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other [generic: T]
	 * @return \System\Void|void
	 */
	public function ExceptWith($other){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other [generic: T]
	 * @return \System\Void|void
	 */
	public function SymmetricExceptWith($other){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other [generic: T]
	 * @return \System\Boolean|bool
	 */
	public function IsSubsetOf($other){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other [generic: T]
	 * @return \System\Boolean|bool
	 */
	public function IsProperSubsetOf($other){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other [generic: T]
	 * @return \System\Boolean|bool
	 */
	public function IsSupersetOf($other){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other [generic: T]
	 * @return \System\Boolean|bool
	 */
	public function IsProperSupersetOf($other){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other [generic: T]
	 * @return \System\Boolean|bool
	 */
	public function Overlaps($other){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other [generic: T]
	 * @return \System\Boolean|bool
	 */
	public function SetEquals($other){}
	/**
	 * @uses HashSet_1Override::CopyTo_1 <br>public , args: ($array)<br>
	 * @uses HashSet_1Override::CopyTo_2 <br>public , args: ($array, $arrayIndex)<br>
	 * @uses HashSet_1Override::CopyTo_3 <br>public , args: ($array, $arrayIndex, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function CopyTo (\override ...$args){}
	/**
	 * @param \System\Predicate_1 $match [generic: T]
	 * @return \System\Int32|int
	 */
	public function RemoveWhere($match){}
	/**
	 * @param \System\Int32|int $capacity
	 * @return \System\Int32|int
	 */
	public function EnsureCapacity($capacity){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses HashSet_1Override::Resize_1 <br>private , args: ()<br>
	 * @uses HashSet_1Override::Resize_2 <br>private , args: ($newSize, $forceNewHashCodes)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function Resize (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public function TrimExcess(){}
	/**
	 * @return \System\Collections\Generic\IEqualityComparer_1[System\Collections\Generic\HashSet_1[T]]
	 */
	public static function CreateSetComparer(){}
	private function Initialize($capacity){}
	private function AddIfNotPresent($value, &$location){}
	private function ContainsAllElements($other){}
	/**
	 * @param \System\Collections\Generic\HashSet_1 $other [generic: T]
	 * @return \System\Boolean|bool
	 */
	protected function IsSubsetOfHashSetWithSameComparer($other){}
	private function IntersectWithHashSetWithSameComparer($other){}
	private function IntersectWithEnumerable($other){}
	private function SymmetricExceptWithUniqueHashSet($other){}
	private function SymmetricExceptWithEnumerable($other){}
	private function CheckUniqueAndUnfoundElements($other, $returnIfUnfound){}
	/**
	 * @param \System\Collections\Generic\HashSet_1 $set1 [generic: T]
	 * @param \System\Collections\Generic\HashSet_1 $set2 [generic: T]
	 * @return \System\Boolean|bool
	 */
	protected static function EqualityComparersAreEqual($set1, $set2){}
	/**
	 * @uses HashSet_1Override::__construct_1 <br>public , args: ()<br>
	 * @uses HashSet_1Override::__construct_2 <br>public , args: ($comparer)<br>
	 * @uses HashSet_1Override::__construct_3 <br>public , args: ($capacity)<br>
	 * @uses HashSet_1Override::__construct_4 <br>public , args: ($collection)<br>
	 * @uses HashSet_1Override::__construct_5 <br>public , args: ($collection, $comparer)<br>
	 * @uses HashSet_1Override::__construct_6 <br>public , args: ($capacity, $comparer)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}