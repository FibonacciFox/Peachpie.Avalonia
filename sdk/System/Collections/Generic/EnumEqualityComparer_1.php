<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EnumEqualityComparer_1MethodsOverride
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
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Equals_3($x, $y){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_1($obj){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_2(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function GetHashCode_3($obj){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class EnumEqualityComparer_1 extends \System\Collections\Generic\EqualityComparer_1 implements 
	\System\Collections\IEqualityComparer,
	\System\Collections\Generic\IEqualityComparer_1,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @uses EnumEqualityComparer_1MethodsOverride::Equals_1 ($x, $y)
	 * @uses EnumEqualityComparer_1MethodsOverride::Equals_2 ($obj)
	 * @uses EnumEqualityComparer_1MethodsOverride::Equals_3 ($x, $y)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public  function GetObjectData($info, $context){}
	/**
	 * @uses EnumEqualityComparer_1MethodsOverride::GetHashCode_1 ($obj)
	 * @uses EnumEqualityComparer_1MethodsOverride::GetHashCode_2 ()
	 * @uses EnumEqualityComparer_1MethodsOverride::GetHashCode_3 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHashCode(mixed ...$args){}
}
