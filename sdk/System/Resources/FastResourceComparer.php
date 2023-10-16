<?php
namespace System\Resources;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FastResourceComparerMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_1($key){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_2($key){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_3(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Compare_1($a, $b){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Compare_2($a, $b){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($a, $b){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($a, $b){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_3($obj){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function CompareOrdinal_1($a, $bytes, $bCharLength){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function CompareOrdinal_2($bytes, $aCharLength, $b){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function CompareOrdinal_3($a, $byteLen, $b){}
}
/**
 */
class FastResourceComparer extends \System\Object implements 
	\System\Collections\IComparer,
	\System\Collections\IEqualityComparer,
	\System\Collections\Generic\IComparer_1,
	\System\Collections\Generic\IEqualityComparer_1
{
	/**
	 * @var \System\Resources\FastResourceComparer
	 * @field
	 */
	protected readonly $Default;
	/**
	 * @uses FastResourceComparerMethodsOverride::GetHashCode_1 ($key)
	 * @uses FastResourceComparerMethodsOverride::GetHashCode_2 ($key)
	 * @uses FastResourceComparerMethodsOverride::GetHashCode_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHashCode(mixed ...$args){}
	/**
	 * @param \System\String|string $key
	 * @return \System\Int32|int
	 */
	protected static function HashFunction($key){}
	/**
	 * @uses FastResourceComparerMethodsOverride::Compare_1 ($a, $b)
	 * @uses FastResourceComparerMethodsOverride::Compare_2 ($a, $b)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Compare(mixed ...$args){}
	/**
	 * @uses FastResourceComparerMethodsOverride::Equals_1 ($a, $b)
	 * @uses FastResourceComparerMethodsOverride::Equals_2 ($a, $b)
	 * @uses FastResourceComparerMethodsOverride::Equals_3 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses FastResourceComparerMethodsOverride::CompareOrdinal_1 ($a, $bytes, $bCharLength)
	 * @uses FastResourceComparerMethodsOverride::CompareOrdinal_2 ($bytes, $aCharLength, $b)
	 * @uses FastResourceComparerMethodsOverride::CompareOrdinal_3 ($a, $byteLen, $b)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CompareOrdinal(mixed ...$args){}
}
