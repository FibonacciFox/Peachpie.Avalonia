<?php
namespace Avalonia\Input;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PointerPointMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
}
/**
 */
class PointerPoint extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \Avalonia\Input\IPointer
	 * @property
	 */
	public readonly $Pointer;
	/**
	 * @var \Avalonia\Input\PointerPointProperties
	 * @property
	 */
	public readonly $Properties;
	/**
	 * @var \Avalonia\Point
	 * @property
	 */
	public readonly $Position;
	/**
	 * @return \Avalonia\Input\IPointer
	 */
	public  function get_Pointer(){}
	/**
	 * @return \Avalonia\Input\PointerPointProperties
	 */
	public  function get_Properties(){}
	/**
	 * @return \Avalonia\Point
	 */
	public  function get_Position(){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Input\PointerPoint $left
	 * @param \Avalonia\Input\PointerPoint $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Input\PointerPoint $left
	 * @param \Avalonia\Input\PointerPoint $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses PointerPointMethodsOverride::Equals_1 ($obj)
	 * @uses PointerPointMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
