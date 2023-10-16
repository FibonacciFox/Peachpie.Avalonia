<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait OrdinalComparerMethodsOverride
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
class OrdinalComparer extends \System\Collections\Generic\NonRandomizedStringEqualityComparer implements 
	\System\Collections\Generic\IEqualityComparer_1,
	\System\Collections\Generic\IInternalStringEqualityComparer,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @uses OrdinalComparerMethodsOverride::Equals_1 ($x, $y)
	 * @uses OrdinalComparerMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses OrdinalComparerMethodsOverride::GetHashCode_1 ($obj)
	 * @uses OrdinalComparerMethodsOverride::GetHashCode_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHashCode(mixed ...$args){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetObjectData($info, $context){}
}
