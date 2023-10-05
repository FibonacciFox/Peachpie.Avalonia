<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ThicknessMethodsOverride
{
	/**
	 * @return \Avalonia\Thickness
	 */
	#[MethodOverride] public static function op_Addition_1($a, $b){}
	/**
	 * @return \Avalonia\Size
	 */
	#[MethodOverride] public static function op_Addition_2($size, $thickness){}
	/**
	 * @return \Avalonia\Thickness
	 */
	#[MethodOverride] public static function op_Subtraction_1($a, $b){}
	/**
	 * @return \Avalonia\Size
	 */
	#[MethodOverride] public static function op_Subtraction_2($size, $thickness){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($other){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
}
/**
 */
class Thickness extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Left;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Top;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Right;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Bottom;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsUniform;
	/**
	 * @return \System\Double|double
	 */
	public  function get_Left(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Top(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Right(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Bottom(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsUniform(){}
	/**
	 * @param \Avalonia\Thickness $a
	 * @param \Avalonia\Thickness $b
	 * @return \System\Boolean
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \Avalonia\Thickness $a
	 * @param \Avalonia\Thickness $b
	 * @return \System\Boolean
	 */
	public static function op_Inequality($a, $b){}
	/**
	 * @uses ThicknessMethodsOverride::op_Addition_1 ($a, $b)
	 * @uses ThicknessMethodsOverride::op_Addition_2 ($size, $thickness)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Addition(mixed ...$args){}
	/**
	 * @uses ThicknessMethodsOverride::op_Subtraction_1 ($a, $b)
	 * @uses ThicknessMethodsOverride::op_Subtraction_2 ($size, $thickness)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Subtraction(mixed ...$args){}
	/**
	 * @param \Avalonia\Thickness $a
	 * @param \System\Double|double $b
	 * @return \Avalonia\Thickness
	 */
	public static function op_Multiply($a, $b){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Thickness
	 */
	public static function Parse($s){}
	/**
	 * @uses ThicknessMethodsOverride::Equals_1 ($other)
	 * @uses ThicknessMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Double& $left
	 * @param \System\Double& $top
	 * @param \System\Double& $right
	 * @param \System\Double& $bottom
	 * @return \System\Void|void
	 */
	public  function Deconstruct($left, $top, $right, $bottom){}
}
