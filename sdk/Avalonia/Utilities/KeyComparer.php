<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait KeyComparerMethodsOverride
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
class KeyComparer extends \System\Object implements 
	\System\Collections\Generic\IEqualityComparer_1
{
	/**
	 * @var \Avalonia\Utilities\WeakHashList_1+KeyComparer[T]
	 * @field
	 */
	public $Instance;
	/**
	 * @uses KeyComparerMethodsOverride::Equals_1 ($x, $y)
	 * @uses KeyComparerMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses KeyComparerMethodsOverride::GetHashCode_1 ($obj)
	 * @uses KeyComparerMethodsOverride::GetHashCode_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHashCode(mixed ...$args){}
}
