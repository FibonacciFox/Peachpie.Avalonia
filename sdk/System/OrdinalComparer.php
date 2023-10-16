<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait OrdinalComparerMethodsOverride
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
class OrdinalComparer extends \System\StringComparer implements 
	\System\Collections\IComparer,
	\System\Collections\IEqualityComparer,
	\System\Collections\Generic\IComparer_1,
	\System\Collections\Generic\IEqualityComparer_1
{
	/**
	 * @uses OrdinalComparerMethodsOverride::Compare_1 ($x, $y)
	 * @uses OrdinalComparerMethodsOverride::Compare_2 ($x, $y)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Compare(mixed ...$args){}
	/**
	 * @uses OrdinalComparerMethodsOverride::Equals_1 ($x, $y)
	 * @uses OrdinalComparerMethodsOverride::Equals_2 ($obj)
	 * @uses OrdinalComparerMethodsOverride::Equals_3 ($x, $y)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses OrdinalComparerMethodsOverride::GetHashCode_1 ($obj)
	 * @uses OrdinalComparerMethodsOverride::GetHashCode_2 ()
	 * @uses OrdinalComparerMethodsOverride::GetHashCode_3 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHashCode(mixed ...$args){}
}
