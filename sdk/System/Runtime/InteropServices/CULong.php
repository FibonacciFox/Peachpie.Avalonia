<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CULongMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($o){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
}
/**
 */
class CULong extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\UIntPtr
	 * @property
	 */
	public readonly $Value;
	/**
	 * @return \System\UIntPtr
	 */
	public  function get_Value(){}
	/**
	 * @uses CULongMethodsOverride::Equals_1 ($o)
	 * @uses CULongMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
