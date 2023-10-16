<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ReferenceEqualityComparerMethodsOverride
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
class ReferenceEqualityComparer extends \System\Object implements 
	\System\Collections\Generic\IEqualityComparer_1,
	\System\Collections\IEqualityComparer
{
	/**
	 * @var \System\Collections\Generic\ReferenceEqualityComparer
	 * @property
	 */
	public readonly $Instance;
	/**
	 * @return \System\Collections\Generic\ReferenceEqualityComparer
	 */
	public static function get_Instance(){}
	/**
	 * @uses ReferenceEqualityComparerMethodsOverride::Equals_1 ($x, $y)
	 * @uses ReferenceEqualityComparerMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses ReferenceEqualityComparerMethodsOverride::GetHashCode_1 ($obj)
	 * @uses ReferenceEqualityComparerMethodsOverride::GetHashCode_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHashCode(mixed ...$args){}
}
