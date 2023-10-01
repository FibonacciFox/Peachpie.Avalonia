<?php
namespace Avalonia\Rendering\Composition\Expressions;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ExpressionVariantMethodsOverride
{
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	#[MethodOverride] public static function op_Implicit_1($value){}
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	#[MethodOverride] public static function op_Implicit_2($scalar){}
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	#[MethodOverride] public static function op_Implicit_3($d){}
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	#[MethodOverride] public static function op_Implicit_4($value){}
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	#[MethodOverride] public static function op_Implicit_5($value){}
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	#[MethodOverride] public static function op_Implicit_6($value){}
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	#[MethodOverride] public static function op_Implicit_7($value){}
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	#[MethodOverride] public static function op_Implicit_8($value){}
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	#[MethodOverride] public static function op_Implicit_9($value){}
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	#[MethodOverride] public static function op_Implicit_10($value){}
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	#[MethodOverride] public static function op_Implicit_11($value){}
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	#[MethodOverride] public static function op_Implicit_12($value){}
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	#[MethodOverride] public static function op_Implicit_13($value){}
}
/**
 */
class ExpressionVariant extends \System\ValueType
{
	/**
	 * @param \System\String|string $property
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public  function GetProperty($property){}
	/**
	 * @uses ExpressionVariantMethodsOverride::op_Implicit_1 ($value)
	 * @uses ExpressionVariantMethodsOverride::op_Implicit_2 ($scalar)
	 * @uses ExpressionVariantMethodsOverride::op_Implicit_3 ($d)
	 * @uses ExpressionVariantMethodsOverride::op_Implicit_4 ($value)
	 * @uses ExpressionVariantMethodsOverride::op_Implicit_5 ($value)
	 * @uses ExpressionVariantMethodsOverride::op_Implicit_6 ($value)
	 * @uses ExpressionVariantMethodsOverride::op_Implicit_7 ($value)
	 * @uses ExpressionVariantMethodsOverride::op_Implicit_8 ($value)
	 * @uses ExpressionVariantMethodsOverride::op_Implicit_9 ($value)
	 * @uses ExpressionVariantMethodsOverride::op_Implicit_10 ($value)
	 * @uses ExpressionVariantMethodsOverride::op_Implicit_11 ($value)
	 * @uses ExpressionVariantMethodsOverride::op_Implicit_12 ($value)
	 * @uses ExpressionVariantMethodsOverride::op_Implicit_13 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Implicit(mixed ...$args){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $left
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $right
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public static function op_Addition($left, $right){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $left
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $right
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public static function op_Subtraction($left, $right){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $left
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public static function op_UnaryNegation($left){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $left
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $right
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public static function op_Multiply($left, $right){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $left
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $right
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public static function op_Division($left, $right){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $right
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public  function EqualsTo($right){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $right
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public  function NotEqualsTo($right){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $v
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public static function op_LogicalNot($v){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $left
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $right
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public static function op_Modulus($left, $right){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $left
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $right
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public static function op_LessThan($left, $right){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $left
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $right
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public static function op_GreaterThan($left, $right){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $right
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public  function And($right){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $right
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public  function Or($right){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\T& $res
	 * @return \System\Boolean
	 */
	public  function TryCast($res){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\T $v
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public static function Create($v){}
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\T
	 */
	public  function CastOrDefault(){}
}
