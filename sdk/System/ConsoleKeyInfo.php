<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ConsoleKeyInfoMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
}
/**
 */
class ConsoleKeyInfo extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Char
	 * @property
	 */
	public readonly $KeyChar;
	/**
	 * @var \System\ConsoleKey
	 * @property
	 */
	public readonly $Key;
	/**
	 * @var \System\ConsoleModifiers
	 * @property
	 */
	public readonly $Modifiers;
	/**
	 * @return \System\Char
	 */
	public  function get_KeyChar(){}
	/**
	 * @return \System\ConsoleKey
	 */
	public  function get_Key(){}
	/**
	 * @return \System\ConsoleModifiers
	 */
	public  function get_Modifiers(){}
	/**
	 * @uses ConsoleKeyInfoMethodsOverride::Equals_1 ($value)
	 * @uses ConsoleKeyInfoMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\ConsoleKeyInfo $a
	 * @param \System\ConsoleKeyInfo $b
	 * @return \System\Boolean
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \System\ConsoleKeyInfo $a
	 * @param \System\ConsoleKeyInfo $b
	 * @return \System\Boolean
	 */
	public static function op_Inequality($a, $b){}
}
