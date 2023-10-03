<?php
namespace Avalonia\Media\Transformation;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ScaleLayoutMethodsOverride
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
class ScaleLayout extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\Transformation\ScaleLayout $left
	 * @param \Avalonia\Media\Transformation\ScaleLayout $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\Transformation\ScaleLayout $left
	 * @param \Avalonia\Media\Transformation\ScaleLayout $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses ScaleLayoutMethodsOverride::Equals_1 ($obj)
	 * @uses ScaleLayoutMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
