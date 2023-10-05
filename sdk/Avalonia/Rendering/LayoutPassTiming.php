<?php
namespace Avalonia\Rendering;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait LayoutPassTimingMethodsOverride
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
class LayoutPassTiming extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $PassCounter;
	/**
	 * @var \System\TimeSpan
	 * @property
	 */
	public $Elapsed;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_PassCounter(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_PassCounter($value){}
	/**
	 * @return \System\TimeSpan
	 */
	public  function get_Elapsed(){}
	/**
	 * @param \System\TimeSpan $value
	 * @return \System\Void|void
	 */
	public  function set_Elapsed($value){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Rendering\LayoutPassTiming $left
	 * @param \Avalonia\Rendering\LayoutPassTiming $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Rendering\LayoutPassTiming $left
	 * @param \Avalonia\Rendering\LayoutPassTiming $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses LayoutPassTimingMethodsOverride::Equals_1 ($obj)
	 * @uses LayoutPassTimingMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Int32& $PassCounter
	 * @param \System\TimeSpan& $Elapsed
	 * @return \System\Void|void
	 */
	public  function Deconstruct($PassCounter, $Elapsed){}
}
