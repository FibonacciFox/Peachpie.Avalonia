<?php
namespace Avalonia\OpenGL;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GlVersionMethodsOverride
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
class GlVersion extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \Avalonia\OpenGL\GlProfileType
	 * @property
	 */
	public readonly $Type;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Major;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Minor;
	/**
	 * @return \Avalonia\OpenGL\GlProfileType
	 */
	public  function get_Type(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Major(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Minor(){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\OpenGL\GlVersion $left
	 * @param \Avalonia\OpenGL\GlVersion $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\OpenGL\GlVersion $left
	 * @param \Avalonia\OpenGL\GlVersion $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses GlVersionMethodsOverride::Equals_1 ($obj)
	 * @uses GlVersionMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
