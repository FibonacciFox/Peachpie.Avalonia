<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ByteEqualityComparerMethodsOverride
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
	#[MethodOverride] public  function GetHashCode_1($b){}
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
 */
class ByteEqualityComparer extends \System\Collections\Generic\EqualityComparer_1 implements 
	\System\Collections\IEqualityComparer,
	\System\Collections\Generic\IEqualityComparer_1
{
	/**
	 * @uses ByteEqualityComparerMethodsOverride::Equals_1 ($x, $y)
	 * @uses ByteEqualityComparerMethodsOverride::Equals_2 ($obj)
	 * @uses ByteEqualityComparerMethodsOverride::Equals_3 ($x, $y)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses ByteEqualityComparerMethodsOverride::GetHashCode_1 ($b)
	 * @uses ByteEqualityComparerMethodsOverride::GetHashCode_2 ()
	 * @uses ByteEqualityComparerMethodsOverride::GetHashCode_3 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHashCode(mixed ...$args){}
}
