<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait NonRandomizedStringEqualityComparerMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($x, $y){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_1($obj){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_2(){}
}
/**
 */
class NonRandomizedStringEqualityComparer extends \System\Object implements 
	\System\Collections\Generic\IEqualityComparer_1,
	\System\Collections\Generic\IInternalStringEqualityComparer,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @uses NonRandomizedStringEqualityComparerMethodsOverride::Equals_1 ($x, $y)
	 * @uses NonRandomizedStringEqualityComparerMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses NonRandomizedStringEqualityComparerMethodsOverride::GetHashCode_1 ($obj)
	 * @uses NonRandomizedStringEqualityComparerMethodsOverride::GetHashCode_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHashCode(mixed ...$args){}
	/**
	 * @return \System\Collections\Generic\RandomizedStringEqualityComparer
	 */
	protected  function GetRandomizedEqualityComparer(){}
	/**
	 * @return \System\Collections\Generic\IEqualityComparer_1
	 */
	public  function GetUnderlyingEqualityComparer(){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetObjectData($info, $context){}
	/**
	 * @param \System\Object|object $comparer
	 * @return \System\Collections\Generic\IEqualityComparer_1
	 */
	public static function GetStringComparer($comparer){}
}
