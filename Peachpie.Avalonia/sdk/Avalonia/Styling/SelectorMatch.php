<?php
namespace Avalonia\Styling;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SelectorMatchMethodsOverride
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
class SelectorMatch extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsMatch(){}
	/**
	 * @return \Avalonia\Styling\SelectorMatchResult
	 */
	public  function get_Result(){}
	/**
	 * @return \Avalonia\Styling\Activators\IStyleActivator
	 */
	public  function get_Activator(){}
	/**
	 * @param \Avalonia\Styling\SelectorMatch& $other
	 * @return \Avalonia\Styling\SelectorMatch
	 */
	public  function And($other){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Styling\SelectorMatch $left
	 * @param \Avalonia\Styling\SelectorMatch $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Styling\SelectorMatch $left
	 * @param \Avalonia\Styling\SelectorMatch $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses SelectorMatchMethodsOverride::Equals_1 ($obj)
	 * @uses SelectorMatchMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
