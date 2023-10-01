<?php
namespace Avalonia\Styling;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SelectorsMethodsOverride
{
	/**
	 * @return \Avalonia\Styling\Selector
	 */
	#[MethodOverride] public static function Is_1($previous, $type){}
	/**
	 * @return \Avalonia\Styling\Selector
	 */
	#[MethodOverride] public static function Is_2($previous){}
	/**
	 * @return \Avalonia\Styling\Selector
	 */
	#[MethodOverride] public static function Not_1($previous, $argument){}
	/**
	 * @return \Avalonia\Styling\Selector
	 */
	#[MethodOverride] public static function Not_2($previous, $argument){}
	/**
	 * @return \Avalonia\Styling\Selector
	 */
	#[MethodOverride] public static function OfType_1($previous, $type){}
	/**
	 * @return \Avalonia\Styling\Selector
	 */
	#[MethodOverride] public static function OfType_2($previous){}
	/**
	 * @return \Avalonia\Styling\Selector
	 */
	#[MethodOverride] public static function Or_1($selectors){}
	/**
	 * @return \Avalonia\Styling\Selector
	 */
	#[MethodOverride] public static function Or_2($selectors){}
	/**
	 * @return \Avalonia\Styling\Selector
	 */
	#[MethodOverride] public static function PropertyEquals_1($previous, $property, $value){}
	/**
	 * @return \Avalonia\Styling\Selector
	 */
	#[MethodOverride] public static function PropertyEquals_2($previous, $property, $value){}
}
/**
 */
class Selectors extends \System\Object
{
	/**
	 * @param \Avalonia\Styling\Selector $previous
	 * @return \Avalonia\Styling\Selector
	 */
	public static function Child($previous){}
	/**
	 * @param \Avalonia\Styling\Selector $previous
	 * @param \System\String|string $name
	 * @return \Avalonia\Styling\Selector
	 */
	public static function Class($previous, $name){}
	/**
	 * @param \Avalonia\Styling\Selector $previous
	 * @return \Avalonia\Styling\Selector
	 */
	public static function Descendant($previous){}
	/**
	 * @uses SelectorsMethodsOverride::Is_1 ($previous, $type)
	 * @uses SelectorsMethodsOverride::Is_2 ($previous)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Is(mixed ...$args){}
	/**
	 * @param \Avalonia\Styling\Selector $previous
	 * @param \System\String|string $name
	 * @return \Avalonia\Styling\Selector
	 */
	public static function Name($previous, $name){}
	/**
	 * @param \Avalonia\Styling\Selector $previous
	 * @return \Avalonia\Styling\Selector
	 */
	public static function Nesting($previous){}
	/**
	 * @uses SelectorsMethodsOverride::Not_1 ($previous, $argument)
	 * @uses SelectorsMethodsOverride::Not_2 ($previous, $argument)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Not(mixed ...$args){}
	/**
	 * @param \Avalonia\Styling\Selector $previous
	 * @param \System\Int32|int $step
	 * @param \System\Int32|int $offset
	 * @return \Avalonia\Styling\Selector
	 */
	public static function NthChild($previous, $step, $offset){}
	/**
	 * @param \Avalonia\Styling\Selector $previous
	 * @param \System\Int32|int $step
	 * @param \System\Int32|int $offset
	 * @return \Avalonia\Styling\Selector
	 */
	public static function NthLastChild($previous, $step, $offset){}
	/**
	 * @uses SelectorsMethodsOverride::OfType_1 ($previous, $type)
	 * @uses SelectorsMethodsOverride::OfType_2 ($previous)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function OfType(mixed ...$args){}
	/**
	 * @uses SelectorsMethodsOverride::Or_1 ($selectors)
	 * @uses SelectorsMethodsOverride::Or_2 ($selectors)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Or(mixed ...$args){}
	/**
	 * @uses SelectorsMethodsOverride::PropertyEquals_1 ($previous, $property, $value)
	 * @uses SelectorsMethodsOverride::PropertyEquals_2 ($previous, $property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function PropertyEquals(mixed ...$args){}
	/**
	 * @param \Avalonia\Styling\Selector $previous
	 * @return \Avalonia\Styling\Selector
	 */
	public static function Template($previous){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
