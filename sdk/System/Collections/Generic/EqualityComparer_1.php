<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EqualityComparer_1MethodsOverride
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
 * @deprecated this element should not be used by you because it will break your program
 */
class EqualityComparer_1 extends \System\Object implements 
	\System\Collections\IEqualityComparer,
	\System\Collections\Generic\IEqualityComparer_1
{
	/**
	 * @var \System\Collections\Generic\EqualityComparer_1[T]
	 * @property
	 */
	public readonly $Default;
	/**
	 * @return \System\Collections\Generic\EqualityComparer_1
	 */
	public static function get_Default(){}
	/**
	 * @uses EqualityComparer_1MethodsOverride::Equals_1 ($x, $y)
	 * @uses EqualityComparer_1MethodsOverride::Equals_2 ($x, $y)
	 * @uses EqualityComparer_1MethodsOverride::Equals_3 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses EqualityComparer_1MethodsOverride::GetHashCode_1 ($obj)
	 * @uses EqualityComparer_1MethodsOverride::GetHashCode_2 ($obj)
	 * @uses EqualityComparer_1MethodsOverride::GetHashCode_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHashCode(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\T[] $array
	 * @param \System\Collections\Generic\T $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	protected  function IndexOf($array, $value, $startIndex, $count){}
	/**
	 * @param \System\Collections\Generic\T[] $array
	 * @param \System\Collections\Generic\T $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	protected  function LastIndexOf($array, $value, $startIndex, $count){}
}
