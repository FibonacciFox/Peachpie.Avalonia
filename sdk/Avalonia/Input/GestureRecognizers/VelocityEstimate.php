<?php
namespace Avalonia\Input\GestureRecognizers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait VelocityEstimateMethodsOverride
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
class VelocityEstimate extends \System\Object implements 
	\System\IEquatable_1
{
	/**
	 * @return \System\Type
	 */
	protected  function get_EqualityContract(){}
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
	 * @return \System\Double|double
	 */
	public  function get_Confidence(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Confidence($value){}
	/**
	 * @return \System\TimeSpan
	 */
	public  function get_Duration(){}
	/**
	 * @param \System\TimeSpan $value
	 * @return \System\Void|void
	 */
	public  function set_Duration($value){}
	/**
	 * @return \Avalonia\Vector
	 */
	public  function get_Offset(){}
	/**
	 * @param \Avalonia\Vector $value
	 * @return \System\Void|void
	 */
	public  function set_Offset($value){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @return \System\Boolean
	 */
	protected  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Input\GestureRecognizers\VelocityEstimate $left
	 * @param \Avalonia\Input\GestureRecognizers\VelocityEstimate $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Input\GestureRecognizers\VelocityEstimate $left
	 * @param \Avalonia\Input\GestureRecognizers\VelocityEstimate $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses VelocityEstimateMethodsOverride::Equals_1 ($obj)
	 * @uses VelocityEstimateMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \Avalonia\Vector& $PixelsPerSecond
	 * @param \System\Double& $Confidence
	 * @param \System\TimeSpan& $Duration
	 * @param \Avalonia\Vector& $Offset
	 * @return \System\Void|void
	 */
	public  function Deconstruct($PixelsPerSecond, $Confidence, $Duration, $Offset){}
}
