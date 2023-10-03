<?php
namespace Avalonia\Animation;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CueMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($other){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_3($other){}
}
/**
 */
class Cue extends \System\ValueType implements 
	\System\IEquatable_1,
	\System\IEquatable_1
{
	/**
	 * @return \System\Double|double
	 */
	public  function get_CueValue(){}
	/**
	 * @param \System\String|string $value
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \Avalonia\Animation\Cue
	 */
	public static function Parse($value, $culture){}
	/**
	 * @uses CueMethodsOverride::Equals_1 ($other)
	 * @uses CueMethodsOverride::Equals_2 ($obj)
	 * @uses CueMethodsOverride::Equals_3 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Animation\Cue $left
	 * @param \Avalonia\Animation\Cue $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Animation\Cue $left
	 * @param \Avalonia\Animation\Cue $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
}
