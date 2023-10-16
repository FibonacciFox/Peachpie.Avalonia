<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait HashSet_1MethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Add_1($item){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Add_2($item){}
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
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($array){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_2($array, $arrayIndex){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_3($array, $arrayIndex, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Resize_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Resize_2($newSize, $forceNewHashCodes){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
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
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Collections\Generic\IEqualityComparer_1[T]
	 * @property
	 */
	public readonly $Comparer;
	/**
	 * @param \System\Collections\Generic\HashSet_1 $source
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ConstructFrom($source){}
	/**
	 * @uses HashSet_1MethodsOverride::Add_1 ($item)
	 * @uses HashSet_1MethodsOverride::Add_2 ($item)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
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
	 * @param \System\Collections\Generic\T $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FindItemIndex($item){}
	/**
	 * @param \System\Int32|int $hashCode
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetBucketRef($hashCode){}
	/**
	 * @param \System\Collections\Generic\T $item
	 * @return \System\Boolean
	 */
	public  function Remove($item){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsReadOnly(){}
	/**
	 * @uses HashSet_1MethodsOverride::GetEnumerator_1 ()
	 * @uses HashSet_1MethodsOverride::GetEnumerator_2 ()
	 * @uses HashSet_1MethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public  function GetObjectData($info, $context){}
	/**
	 * @param \System\Object|object $sender
	 * @return \System\Void|void
	 */
	public  function OnDeserialization($sender){}
	/**
	 * @param \System\Collections\Generic\T $equalValue
	 * @param \System\Collections\Generic\T& $actualValue
	 * @return \System\Boolean
	 */
	public  function TryGetValue($equalValue, $actualValue){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 * @return \System\Void|void
	 */
	public  function UnionWith($other){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 * @return \System\Void|void
	 */
	public  function IntersectWith($other){}
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
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 * @return \System\Boolean
	 */
	public  function IsSubsetOf($other){}
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
	public  function Overlaps($other){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 * @return \System\Boolean
	 */
	public  function SetEquals($other){}
	/**
	 * @uses HashSet_1MethodsOverride::CopyTo_1 ($array)
	 * @uses HashSet_1MethodsOverride::CopyTo_2 ($array, $arrayIndex)
	 * @uses HashSet_1MethodsOverride::CopyTo_3 ($array, $arrayIndex, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @param \System\Predicate_1 $match
	 * @return \System\Int32|int
	 */
	public  function RemoveWhere($match){}
	/**
	 * @return \System\Collections\Generic\IEqualityComparer_1
	 */
	public  function get_Comparer(){}
	/**
	 * @param \System\Int32|int $capacity
	 * @return \System\Int32|int
	 */
	public  function EnsureCapacity($capacity){}
	/**
	 * @uses HashSet_1MethodsOverride::Resize_1 ()
	 * @uses HashSet_1MethodsOverride::Resize_2 ($newSize, $forceNewHashCodes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Resize(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function TrimExcess(){}
	/**
	 * @return \System\Collections\Generic\IEqualityComparer_1
	 */
	public static function CreateSetComparer(){}
	/**
	 * @param \System\Int32|int $capacity
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Initialize($capacity){}
	/**
	 * @param \System\Collections\Generic\T $value
	 * @param \System\Int32& $location
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddIfNotPresent($value, $location){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ContainsAllElements($other){}
	/**
	 * @param \System\Collections\Generic\HashSet_1 $other
	 * @return \System\Boolean
	 */
	protected  function IsSubsetOfHashSetWithSameComparer($other){}
	/**
	 * @param \System\Collections\Generic\HashSet_1 $other
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IntersectWithHashSetWithSameComparer($other){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IntersectWithEnumerable($other){}
	/**
	 * @param \System\Collections\Generic\HashSet_1 $other
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SymmetricExceptWithUniqueHashSet($other){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SymmetricExceptWithEnumerable($other){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $other
	 * @param \System\Boolean $returnIfUnfound
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CheckUniqueAndUnfoundElements($other, $returnIfUnfound){}
	/**
	 * @param \System\Collections\Generic\HashSet_1 $set1
	 * @param \System\Collections\Generic\HashSet_1 $set2
	 * @return \System\Boolean
	 */
	protected static function EqualityComparersAreEqual($set1, $set2){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
