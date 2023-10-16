<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RandomizedStringEqualityComparerMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($x, $y){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Equals_2($x, $y){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_3($obj){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_1($obj){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function GetHashCode_2($obj){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_3(){}
}
/**
 */
class RandomizedStringEqualityComparer extends \System\Collections\Generic\EqualityComparer_1 implements 
	\System\Collections\IEqualityComparer,
	\System\Collections\Generic\IEqualityComparer_1,
	\System\Collections\Generic\IInternalStringEqualityComparer
{
	/**
	 * @param \System\Collections\Generic\IEqualityComparer_1 $underlyingComparer
	 * @param \System\Boolean $ignoreCase
	 * @return \System\Collections\Generic\RandomizedStringEqualityComparer
	 */
	protected static function Create($underlyingComparer, $ignoreCase){}
	/**
	 * @return \System\Collections\Generic\IEqualityComparer_1
	 */
	public  function GetUnderlyingEqualityComparer(){}
	/**
	 * @uses RandomizedStringEqualityComparerMethodsOverride::Equals_1 ($x, $y)
	 * @uses RandomizedStringEqualityComparerMethodsOverride::Equals_2 ($x, $y)
	 * @uses RandomizedStringEqualityComparerMethodsOverride::Equals_3 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses RandomizedStringEqualityComparerMethodsOverride::GetHashCode_1 ($obj)
	 * @uses RandomizedStringEqualityComparerMethodsOverride::GetHashCode_2 ($obj)
	 * @uses RandomizedStringEqualityComparerMethodsOverride::GetHashCode_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHashCode(mixed ...$args){}
}
