<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DecomposedMethodsOverride
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
class Decomposed extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \Avalonia\Vector
	 * @field
	 */
	public $Translate;
	/**
	 * @var \Avalonia\Vector
	 * @field
	 */
	public $Scale;
	/**
	 * @var \Avalonia\Vector
	 * @field
	 */
	public $Skew;
	/**
	 * @var \System\Double
	 * @field
	 */
	public $Angle;
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Decomposed $left
	 * @param \Avalonia\Decomposed $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Decomposed $left
	 * @param \Avalonia\Decomposed $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses DecomposedMethodsOverride::Equals_1 ($obj)
	 * @uses DecomposedMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
