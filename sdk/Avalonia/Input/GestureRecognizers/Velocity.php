<?php
namespace Avalonia\Input\GestureRecognizers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait VelocityMethodsOverride
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
class Velocity extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \Avalonia\Vector
	 * @property
	 */
	public $PixelsPerSecond;
	/**
	 * @return \Avalonia\Vector
	 */
	public  function get_PixelsPerSecond(){}
	/**
	 * @param \Avalonia\Vector $value
	 * @return \System\Void|void
	 */
	public  function set_PixelsPerSecond($value){}
	/**
	 * @param \System\Double|double $minValue
	 * @param \System\Double|double $maxValue
	 * @return \Avalonia\Input\GestureRecognizers\Velocity
	 */
	public  function ClampMagnitude($minValue, $maxValue){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Input\GestureRecognizers\Velocity $left
	 * @param \Avalonia\Input\GestureRecognizers\Velocity $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Input\GestureRecognizers\Velocity $left
	 * @param \Avalonia\Input\GestureRecognizers\Velocity $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses VelocityMethodsOverride::Equals_1 ($obj)
	 * @uses VelocityMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \Avalonia\Vector& $PixelsPerSecond
	 * @return \System\Void|void
	 */
	public  function Deconstruct($PixelsPerSecond){}
}
