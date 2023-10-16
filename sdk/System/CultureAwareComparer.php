<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CultureAwareComparerMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Compare_1($x, $y){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Compare_2($x, $y){}
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
	#[MethodOverride] public  function Equals_3($x, $y){}
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
	#[MethodOverride] public  function GetHashCode_3($obj){}
}
/**
 */
class CultureAwareComparer extends \System\StringComparer implements 
	\System\Collections\IComparer,
	\System\Collections\IEqualityComparer,
	\System\Collections\Generic\IComparer_1,
	\System\Collections\Generic\IEqualityComparer_1,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\CultureAwareComparer
	 * @field
	 */
	protected readonly $InvariantCaseSensitiveInstance;
	/**
	 * @var \System\CultureAwareComparer
	 * @field
	 */
	protected readonly $InvariantIgnoreCaseInstance;
	/**
	 * @uses CultureAwareComparerMethodsOverride::Compare_1 ($x, $y)
	 * @uses CultureAwareComparerMethodsOverride::Compare_2 ($x, $y)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Compare(mixed ...$args){}
	/**
	 * @uses CultureAwareComparerMethodsOverride::Equals_1 ($x, $y)
	 * @uses CultureAwareComparerMethodsOverride::Equals_2 ($obj)
	 * @uses CultureAwareComparerMethodsOverride::Equals_3 ($x, $y)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses CultureAwareComparerMethodsOverride::GetHashCode_1 ($obj)
	 * @uses CultureAwareComparerMethodsOverride::GetHashCode_2 ()
	 * @uses CultureAwareComparerMethodsOverride::GetHashCode_3 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHashCode(mixed ...$args){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public  function GetObjectData($info, $context){}
}
