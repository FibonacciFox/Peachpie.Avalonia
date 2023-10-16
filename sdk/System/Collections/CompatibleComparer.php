<?php
namespace System\Collections;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CompatibleComparerMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($a, $b){}
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
class CompatibleComparer extends \System\Object implements 
	\System\Collections\IEqualityComparer
{
	/**
	 * @return \System\Collections\IHashCodeProvider
	 */
	protected  function get_HashCodeProvider(){}
	/**
	 * @return \System\Collections\IComparer
	 */
	protected  function get_Comparer(){}
	/**
	 * @uses CompatibleComparerMethodsOverride::Equals_1 ($a, $b)
	 * @uses CompatibleComparerMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Object|object $a
	 * @param \System\Object|object $b
	 * @return \System\Int32|int
	 */
	public  function Compare($a, $b){}
	/**
	 * @uses CompatibleComparerMethodsOverride::GetHashCode_1 ($obj)
	 * @uses CompatibleComparerMethodsOverride::GetHashCode_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHashCode(mixed ...$args){}
}
