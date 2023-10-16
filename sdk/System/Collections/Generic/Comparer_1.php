<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Comparer_1MethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Compare_1($x, $y){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function Compare_2($x, $y){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class Comparer_1 extends \System\Object implements 
	\System\Collections\IComparer,
	\System\Collections\Generic\IComparer_1
{
	/**
	 * @var \System\Collections\Generic\Comparer_1[T]
	 * @property
	 */
	public readonly $Default;
	/**
	 * @return \System\Collections\Generic\Comparer_1
	 */
	public static function get_Default(){}
	/**
	 * @param \System\Comparison_1 $comparison
	 * @return \System\Collections\Generic\Comparer_1
	 */
	public static function Create($comparison){}
	/**
	 * @uses Comparer_1MethodsOverride::Compare_1 ($x, $y)
	 * @uses Comparer_1MethodsOverride::Compare_2 ($x, $y)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Compare(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
