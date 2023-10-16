<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SortedSet_1MethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Add_1($item){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Add_2($item){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($array){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_2($array, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_3($array, $index, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_4($array, $index){}
	/**
	 * @return \System\Collections\Generic\Enumerator
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_3(){}
	/**
	 * @return \System\Collections\Generic\IEqualityComparer_1
	 */
	#[MethodOverride] public static function CreateSetComparer_1(){}
	/**
	 * @return \System\Collections\Generic\IEqualityComparer_1
	 */
	#[MethodOverride] public static function CreateSetComparer_2($memberEqualityComparer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function SymmetricExceptWithSameComparer_1($other){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function SymmetricExceptWithSameComparer_2($other, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function GetObjectData_1($info, $context){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function GetObjectData_2($info, $context){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function OnDeserialization_1($sender){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function OnDeserialization_2($sender){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
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
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Collections\Generic\IComparer_1[T]
	 * @property
	 */
	public readonly $Comparer;
	/**
	 * @var \T
	 * @property
	 */
	public readonly $Min;
	/**
	 * @var \T
	 * @property
	 */
	public readonly $Max;
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $collection
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddAllElements($collection){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $collection
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RemoveAllElements($collection){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $collection
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ContainsAllElements($collection){}
	/**
	 * @param \System\Collections\Generic\TreeWalkPredicate_1 $action
	 * @return \System\Boolean
	 */
	protected  function InOrderTreeWalk($action){}
	/**
	 * @param \System\Collections\Generic\TreeWalkPredicate_1 $action
	 * @return \System\Boolean
	 */
	protected  function BreadthFirstTreeWalk($action){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @return \System\Collections\Generic\IComparer_1
	 */
	public  function get_Comparer(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsReadOnly(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsSynchronized(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_SyncRoot(){}
	/**
	 * @param \System\Boolean $updateCount
	 * @return \System\Void|void
	 */
	protected  function VersionCheck($updateCount){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function TotalCount(){}
	/**
	 * @param \System\Collections\Generic\T $item
	 * @return \System\Boolean
	 */
	protected  function IsWithinRange($item){}
	/**
	 * @uses SortedSet_1MethodsOverride::Add_1 ($item)
	 * @uses SortedSet_1MethodsOverride::Add_2 ($item)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\T $item
	 * @return \System\Boolean
	 */
	protected  function AddIfNotPresent($item){}
	/**
	 * @param \System\Collections\Generic\T $item
	 * @return \System\Boolean
	 */
	public  function Remove($item){}
	/**
	 * @param \System\Collections\Generic\T $item
	 * @return \System\Boolean
	 */
	protected  function DoRemove($item){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @param \System\Collections\Generic\T $item
	 * @return \System\Boolean
	 */
	public  function Contains($item){}
	/**
	 * @uses SortedSet_1MethodsOverride::CopyTo_1 ($array)
	 * @uses SortedSet_1MethodsOverride::CopyTo_2 ($array, $index)
	 * @uses SortedSet_1MethodsOverride::CopyTo_3 ($array, $index, $count)
	 * @uses SortedSet_1MethodsOverride::CopyTo_4 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses SortedSet_1MethodsOverride::GetEnumerator_1 ()
	 * @uses SortedSet_1MethodsOverride::GetEnumerator_2 ()
	 * @uses SortedSet_1MethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\Node $current
	 * @param \System\Collections\Generic\Node& $parent
	 * @param \System\Collections\Generic\Node $grandParent
	 * @param \System\Collections\Generic\Node $greatGrandParent
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InsertionBalance($current, $parent, $grandParent, $greatGrandParent){}
	/**
	 * @param \System\Collections\Generic\Node $parent
	 * @param \System\Collections\Generic\Node $child
	 * @param \System\Collections\Generic\Node $newChild
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReplaceChildOrRoot($parent, $child, $newChild){}
	/**
	 * @param \System\Collections\Generic\Node $match
	 * @param \System\Collections\Generic\Node $parentOfMatch
	 * @param \System\Collections\Generic\Node $successor
	 * @param \System\Collections\Generic\Node $parentOfSuccessor
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReplaceNode($match, $parentOfMatch, $successor, $parentOfSuccessor){}
	/**
	 * @param \System\Collections\Generic\T $item
	 * @return \System\Collections\Generic\Node
	 */
	protected  function FindNode($item){}
	/**
	 * @param \System\Collections\Generic\T $item
	 * @return \System\Int32|int
	 */
	protected  function InternalIndexOf($item){}
	/**
	 * @param \System\Collections\Generic\T $from
	 * @param \System\Collections\Generic\T $to
	 * @param \System\Boolean $lowerBoundActive
	 * @param \System\Boolean $upperBoundActive
	 * @return \System\Collections\Generic\Node
	 */
	protected  function FindRange($from, $to, $lowerBoundActive, $upperBoundActive){}
	/**
	 * @return \System\Void|void
	 */
	protected  function UpdateVersion(){}
	/**
	 * @uses SortedSet_1MethodsOverride::CreateSetComparer_1 ()
	 * @uses SortedSet_1MethodsOverride::CreateSetComparer_2 ($memberEqualityComparer)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CreateSetComparer(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\SortedSet_1 $set1
	 * @param \System\Collections\Generic\SortedSet_1 $set2
	 * @param \System\Collections\Generic\IComparer_1 $comparer
	 * @return \System\Boolean
	 */
	protected static function SortedSetEquals($set1, $set2, $comparer){}
	/**
	 * @param \System\Collections\Generic\SortedSet_1 $other
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function HasEqualComparer($other){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 * @return \System\Void|void
	 */
	public  function UnionWith($other){}
	/**
	 * @param \System\Collections\Generic\T[] $arr
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $endIndex
	 * @param \System\Collections\Generic\Node $redNode
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ConstructRootFromSortedArray($arr, $startIndex, $endIndex, $redNode){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 * @return \System\Void|void
	 */
	public  function IntersectWith($other){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 * @return \System\Void|void
	 */
	protected  function IntersectWithEnumerable($other){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 * @return \System\Void|void
	 */
	public  function ExceptWith($other){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 * @return \System\Void|void
	 */
	public  function SymmetricExceptWith($other){}
	/**
	 * @uses SortedSet_1MethodsOverride::SymmetricExceptWithSameComparer_1 ($other)
	 * @uses SortedSet_1MethodsOverride::SymmetricExceptWithSameComparer_2 ($other, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SymmetricExceptWithSameComparer(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 * @return \System\Boolean
	 */
	public  function IsSubsetOf($other){}
	/**
	 * @param \System\Collections\Generic\SortedSet_1 $asSorted
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsSubsetOfSortedSetWithSameComparer($asSorted){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 * @return \System\Boolean
	 */
	public  function IsProperSubsetOf($other){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 * @return \System\Boolean
	 */
	public  function IsSupersetOf($other){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 * @return \System\Boolean
	 */
	public  function IsProperSupersetOf($other){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 * @return \System\Boolean
	 */
	public  function SetEquals($other){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 * @return \System\Boolean
	 */
	public  function Overlaps($other){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 * @param \System\Boolean $returnIfUnfound
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CheckUniqueAndUnfoundElements($other, $returnIfUnfound){}
	/**
	 * @param \System\Predicate_1 $match
	 * @return \System\Int32|int
	 */
	public  function RemoveWhere($match){}
	/**
	 * @return \System\Collections\Generic\T
	 */
	public  function get_Min(){}
	/**
	 * @return \System\Collections\Generic\T
	 */
	protected  function get_MinInternal(){}
	/**
	 * @return \System\Collections\Generic\T
	 */
	public  function get_Max(){}
	/**
	 * @return \System\Collections\Generic\T
	 */
	protected  function get_MaxInternal(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function Reverse(){}
	/**
	 * @param \System\Collections\Generic\T $lowerValue
	 * @param \System\Collections\Generic\T $upperValue
	 * @return \System\Collections\Generic\SortedSet_1
	 */
	public  function GetViewBetween($lowerValue, $upperValue){}
	/**
	 * @uses SortedSet_1MethodsOverride::GetObjectData_1 ($info, $context)
	 * @uses SortedSet_1MethodsOverride::GetObjectData_2 ($info, $context)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetObjectData(mixed ...$args){}
	/**
	 * @uses SortedSet_1MethodsOverride::OnDeserialization_1 ($sender)
	 * @uses SortedSet_1MethodsOverride::OnDeserialization_2 ($sender)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function OnDeserialization(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\T $equalValue
	 * @param \System\Collections\Generic\T& $actualValue
	 * @return \System\Boolean
	 */
	public  function TryGetValue($equalValue, $actualValue){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Log2($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
