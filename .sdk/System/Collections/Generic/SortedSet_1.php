<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SortedSet_1Override {
	/**
	 * @deprecated
	 * @param \T|object $item
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Add_1 ($item){}
	/**
	 * @deprecated
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Add_2 ($item){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_1 ($array){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_2 ($array, $index){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_3 ($array, $index, $count){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function CopyTo_4 ($array, $index){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\SortedSet_1
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
	 * @return \System\Collections\Generic\IEqualityComparer_1
	 */
	#[MethodOverride]public static function CreateSetComparer_1 (){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEqualityComparer_1 $memberEqualityComparer [generic: T]
	 * @return \System\Collections\Generic\IEqualityComparer_1
	 */
	#[MethodOverride]public static function CreateSetComparer_2 ($memberEqualityComparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\SortedSet_1 $other [generic: T]
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function SymmetricExceptWithSameComparer_1 ($other){}
	/**
	 * @deprecated
	 * @param \T $other
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function SymmetricExceptWithSameComparer_2 ($other, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function GetObjectData_1 ($info, $context){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function GetObjectData_2 ($info, $context){}
	/**
	 * @deprecated
	 * @param \System\Object|object $sender
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function OnDeserialization_1 ($sender){}
	/**
	 * @deprecated
	 * @param \System\Object|object $sender
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function OnDeserialization_2 ($sender){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: T]
	 */
	#[MethodOverride]public function __construct_2 ($comparer){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $collection [generic: T]
	 */
	#[MethodOverride]public function __construct_3 ($collection){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $collection [generic: T]
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: T]
	 */
	#[MethodOverride]public function __construct_4 ($collection, $comparer){}
}
class SortedSet_1 extends \System\Object implements
	\System\Collections\Generic\ISet_1,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\ICollection,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Generic\IReadOnlySet_1,
	\System\Runtime\Serialization\ISerializable,
	\System\Runtime\Serialization\IDeserializationCallback
{
	use SortedSet_1Override;

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Collections\Generic\IComparer_1[T]
	 * @since readonly
	 */
	public $Comparer;
	/**
	 * @property
	 * @var \T|object
	 * @since readonly
	 */
	public $Min;
	/**
	 * @property
	 * @var \T|object
	 * @since readonly
	 */
	public $Max;
	private function AddAllElements($collection){}
	private function RemoveAllElements($collection){}
	private function ContainsAllElements($collection){}
	/**
	 * @param \System\Collections\Generic\TreeWalkPredicate_1 $action [generic: T]
	 * @return \System\Boolean|bool
	 */
	protected function InOrderTreeWalk($action){}
	/**
	 * @param \System\Collections\Generic\TreeWalkPredicate_1 $action [generic: T]
	 * @return \System\Boolean|bool
	 */
	protected function BreadthFirstTreeWalk($action){}
	private function get_IsReadOnly(){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	/**
	 * @param \System\Boolean|bool $updateCount
	 * @return \System\Void|void
	 */
	protected function VersionCheck($updateCount){}
	/**
	 * @return \System\Int32|int
	 */
	protected function TotalCount(){}
	/**
	 * @param \T|object $item
	 * @return \System\Boolean|bool
	 */
	protected function IsWithinRange($item){}
	/**
	 * @uses SortedSet_1Override::Add_1 <br>public , args: ($item)<br>
	 * @uses SortedSet_1Override::Add_2 <br>private , args: ($item)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|\System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Add (\override ...$args){}
	/**
	 * @param \T|object $item
	 * @return \System\Boolean|bool
	 */
	protected function AddIfNotPresent($item){}
	/**
	 * @param \T|object $item
	 * @return \System\Boolean|bool
	 */
	public function Remove($item){}
	/**
	 * @param \T|object $item
	 * @return \System\Boolean|bool
	 */
	protected function DoRemove($item){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	/**
	 * @param \T|object $item
	 * @return \System\Boolean|bool
	 */
	public function Contains($item){}
	/**
	 * @uses SortedSet_1Override::CopyTo_1 <br>public , args: ($array)<br>
	 * @uses SortedSet_1Override::CopyTo_2 <br>public , args: ($array, $index)<br>
	 * @uses SortedSet_1Override::CopyTo_3 <br>public , args: ($array, $index, $count)<br>
	 * @uses SortedSet_1Override::CopyTo_4 <br>private , args: ($array, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function CopyTo (\override ...$args){}
	/**
	 * @uses SortedSet_1Override::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses SortedSet_1Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @uses SortedSet_1Override::GetEnumerator_3 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\SortedSet_1|\System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	private function InsertionBalance($current, $parent, $grandParent, $greatGrandParent){}
	private function ReplaceChildOrRoot($parent, $child, $newChild){}
	private function ReplaceNode($match, $parentOfMatch, $successor, $parentOfSuccessor){}
	/**
	 * @param \T|object $item
	 * @return \System\Collections\Generic\SortedSet_1+Node[T]
	 */
	protected function FindNode($item){}
	/**
	 * @param \T|object $item
	 * @return \System\Int32|int
	 */
	protected function InternalIndexOf($item){}
	/**
	 * @param \T|object $from
	 * @param \T|object $to
	 * @param \System\Boolean|bool $lowerBoundActive
	 * @param \System\Boolean|bool $upperBoundActive
	 * @return \System\Collections\Generic\SortedSet_1+Node[T]
	 */
	protected function FindRange($from, $to, $lowerBoundActive, $upperBoundActive){}
	/**
	 * @return \System\Void|void
	 */
	protected function UpdateVersion(){}
	/**
	 * @uses SortedSet_1Override::CreateSetComparer_1 <br>public , args: ()<br>
	 * @uses SortedSet_1Override::CreateSetComparer_2 <br>public , args: ($memberEqualityComparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEqualityComparer_1|mixed|\override
	 */
	#[MethodOverridePublic]function CreateSetComparer (\override ...$args){}
	/**
	 * @param \System\Collections\Generic\SortedSet_1 $set1 [generic: T]
	 * @param \System\Collections\Generic\SortedSet_1 $set2 [generic: T]
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: T]
	 * @return \System\Boolean|bool
	 */
	protected static function SortedSetEquals($set1, $set2, $comparer){}
	private function HasEqualComparer($other){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other [generic: T]
	 * @return \System\Void|void
	 */
	public function UnionWith($other){}
	private static function ConstructRootFromSortedArray($arr, $startIndex, $endIndex, $redNode){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other [generic: T]
	 * @return \System\Void|void
	 */
	public function IntersectWith($other){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other [generic: T]
	 * @return \System\Void|void
	 */
	protected function IntersectWithEnumerable($other){}
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
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses SortedSet_1Override::SymmetricExceptWithSameComparer_1 <br>private , args: ($other)<br>
	 * @uses SortedSet_1Override::SymmetricExceptWithSameComparer_2 <br>private , args: ($other, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function SymmetricExceptWithSameComparer (\override ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other [generic: T]
	 * @return \System\Boolean|bool
	 */
	public function IsSubsetOf($other){}
	private function IsSubsetOfSortedSetWithSameComparer($asSorted){}
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
	public function SetEquals($other){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other [generic: T]
	 * @return \System\Boolean|bool
	 */
	public function Overlaps($other){}
	private function CheckUniqueAndUnfoundElements($other, $returnIfUnfound){}
	/**
	 * @param \System\Predicate_1 $match [generic: T]
	 * @return \System\Int32|int
	 */
	public function RemoveWhere($match){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1[T]
	 */
	public function Reverse(){}
	/**
	 * @param \T|object $lowerValue
	 * @param \T|object $upperValue
	 * @return \System\Collections\Generic\SortedSet_1[T]
	 */
	public function GetViewBetween($lowerValue, $upperValue){}
	/**
	 * @uses SortedSet_1Override::GetObjectData_1 <br>private , args: ($info, $context)<br>
	 * @uses SortedSet_1Override::GetObjectData_2 <br>protected , args: ($info, $context)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function GetObjectData (\override ...$args){}
	/**
	 * @uses SortedSet_1Override::OnDeserialization_1 <br>private , args: ($sender)<br>
	 * @uses SortedSet_1Override::OnDeserialization_2 <br>protected , args: ($sender)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function OnDeserialization (\override ...$args){}
	/**
	 * @param \T|object $equalValue
	 * @param \T& &$actualValue
	 * @return \System\Boolean|bool
	 */
	public function TryGetValue($equalValue, &$actualValue){}
	private static function Log2($value){}
	/**
	 * @uses SortedSet_1Override::__construct_1 <br>public , args: ()<br>
	 * @uses SortedSet_1Override::__construct_2 <br>public , args: ($comparer)<br>
	 * @uses SortedSet_1Override::__construct_3 <br>public , args: ($collection)<br>
	 * @uses SortedSet_1Override::__construct_4 <br>public , args: ($collection, $comparer)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}