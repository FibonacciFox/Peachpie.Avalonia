<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TextCollapsingCreateInfoMethodsOverride
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
class TextCollapsingCreateInfo extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\TextCollapsingCreateInfo $left
	 * @param \Avalonia\Media\TextCollapsingCreateInfo $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\TextCollapsingCreateInfo $left
	 * @param \Avalonia\Media\TextCollapsingCreateInfo $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses TextCollapsingCreateInfoMethodsOverride::Equals_1 ($obj)
	 * @uses TextCollapsingCreateInfoMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
