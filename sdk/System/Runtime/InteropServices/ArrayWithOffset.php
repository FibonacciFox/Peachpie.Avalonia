<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ArrayWithOffsetMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
}
/**
 */
class ArrayWithOffset extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @return \System\Object|object
	 */
	public  function GetArray(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function GetOffset(){}
	/**
	 * @uses ArrayWithOffsetMethodsOverride::Equals_1 ($obj)
	 * @uses ArrayWithOffsetMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Runtime\InteropServices\ArrayWithOffset $a
	 * @param \System\Runtime\InteropServices\ArrayWithOffset $b
	 * @return \System\Boolean
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \System\Runtime\InteropServices\ArrayWithOffset $a
	 * @param \System\Runtime\InteropServices\ArrayWithOffset $b
	 * @return \System\Boolean
	 */
	public static function op_Inequality($a, $b){}
}
