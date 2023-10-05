<?php
namespace Avalonia\Input\GestureRecognizers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PointAtTimeMethodsOverride
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
class PointAtTime extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Valid;
	/**
	 * @var \Avalonia\Vector
	 * @property
	 */
	public $Point;
	/**
	 * @var \System\TimeSpan
	 * @property
	 */
	public $Time;
	/**
	 * @return \System\Boolean
	 */
	public  function get_Valid(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Valid($value){}
	/**
	 * @return \Avalonia\Vector
	 */
	public  function get_Point(){}
	/**
	 * @param \Avalonia\Vector $value
	 * @return \System\Void|void
	 */
	public  function set_Point($value){}
	/**
	 * @return \System\TimeSpan
	 */
	public  function get_Time(){}
	/**
	 * @param \System\TimeSpan $value
	 * @return \System\Void|void
	 */
	public  function set_Time($value){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Input\GestureRecognizers\PointAtTime $left
	 * @param \Avalonia\Input\GestureRecognizers\PointAtTime $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Input\GestureRecognizers\PointAtTime $left
	 * @param \Avalonia\Input\GestureRecognizers\PointAtTime $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses PointAtTimeMethodsOverride::Equals_1 ($obj)
	 * @uses PointAtTimeMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Boolean& $Valid
	 * @param \Avalonia\Vector& $Point
	 * @param \System\TimeSpan& $Time
	 * @return \System\Void|void
	 */
	public  function Deconstruct($Valid, $Point, $Time){}
}
