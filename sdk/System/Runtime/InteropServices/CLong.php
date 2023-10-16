<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CLongMethodsOverride
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
class CLong extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $Value;
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Value(){}
	/**
	 * @uses CLongMethodsOverride::Equals_1 ($o)
	 * @uses CLongMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
