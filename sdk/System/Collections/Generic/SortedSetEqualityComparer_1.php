<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SortedSetEqualityComparer_1MethodsOverride
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
 * @deprecated this element should not be used by you because it will break your program
 */
class SortedSetEqualityComparer_1 extends \System\Object implements 
	\System\Collections\Generic\IEqualityComparer_1
{
	/**
	 * @uses SortedSetEqualityComparer_1MethodsOverride::Equals_1 ($x, $y)
	 * @uses SortedSetEqualityComparer_1MethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses SortedSetEqualityComparer_1MethodsOverride::GetHashCode_1 ($obj)
	 * @uses SortedSetEqualityComparer_1MethodsOverride::GetHashCode_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHashCode(mixed ...$args){}
}
