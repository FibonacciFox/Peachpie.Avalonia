<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MatrixMethodsOverride
{
	/**
	 * @return \Avalonia\Matrix
	 */
	#[MethodOverride] public static function CreateScale_1($xScale, $yScale){}
	/**
	 * @return \Avalonia\Matrix
	 */
	#[MethodOverride] public static function CreateScale_2($scales){}
	/**
	 * @return \Avalonia\Matrix
	 */
	#[MethodOverride] public static function CreateTranslation_1($position){}
	/**
	 * @return \Avalonia\Matrix
	 */
	#[MethodOverride] public static function CreateTranslation_2($xPosition, $yPosition){}
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
class Matrix extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @return \Avalonia\Matrix
	 */
	public static function get_Identity(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsIdentity(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasInverse(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_M11(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_M12(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_M13(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_M21(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_M22(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_M23(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_M31(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_M32(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_M33(){}
	/**
	 * @param \Avalonia\Matrix $value1
	 * @param \Avalonia\Matrix $value2
	 * @return \Avalonia\Matrix
	 */
	public static function op_Multiply($value1, $value2){}
	/**
	 * @param \Avalonia\Matrix $value
	 * @return \Avalonia\Matrix
	 */
	public static function op_UnaryNegation($value){}
	/**
	 * @param \Avalonia\Matrix $value1
	 * @param \Avalonia\Matrix $value2
	 * @return \System\Boolean
	 */
	public static function op_Equality($value1, $value2){}
	/**
	 * @param \Avalonia\Matrix $value1
	 * @param \Avalonia\Matrix $value2
	 * @return \System\Boolean
	 */
	public static function op_Inequality($value1, $value2){}
	/**
	 * @param \System\Double|double $radians
	 * @return \Avalonia\Matrix
	 */
	public static function CreateRotation($radians){}
	/**
	 * @param \System\Double|double $xAngle
	 * @param \System\Double|double $yAngle
	 * @return \Avalonia\Matrix
	 */
	public static function CreateSkew($xAngle, $yAngle){}
	/**
	 * @uses MatrixMethodsOverride::CreateScale_1 ($xScale, $yScale)
	 * @uses MatrixMethodsOverride::CreateScale_2 ($scales)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CreateScale(mixed ...$args){}
	/**
	 * @uses MatrixMethodsOverride::CreateTranslation_1 ($position)
	 * @uses MatrixMethodsOverride::CreateTranslation_2 ($xPosition, $yPosition)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CreateTranslation(mixed ...$args){}
	/**
	 * @param \System\Double|double $angle
	 * @return \System\Double|double
	 */
	public static function ToRadians($angle){}
	/**
	 * @param \Avalonia\Matrix $value
	 * @return \Avalonia\Matrix
	 */
	public  function Append($value){}
	/**
	 * @param \Avalonia\Matrix $value
	 * @return \Avalonia\Matrix
	 */
	public  function Prepend($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function GetDeterminant(){}
	/**
	 * @param \Avalonia\Point $p
	 * @return \Avalonia\Point
	 */
	public  function Transform($p){}
	/**
	 * @uses MatrixMethodsOverride::Equals_1 ($other)
	 * @uses MatrixMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @return \System\Boolean
	 */
	public  function ContainsPerspective(){}
	/**
	 * @param \Avalonia\Matrix& $inverted
	 * @return \System\Boolean
	 */
	public  function TryInvert($inverted){}
	/**
	 * @return \Avalonia\Matrix
	 */
	public  function Invert(){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Matrix
	 */
	public static function Parse($s){}
	/**
	 * @param \Avalonia\Matrix $matrix
	 * @param \Avalonia\Decomposed& $decomposed
	 * @return \System\Boolean
	 */
	public static function TryDecomposeTransform($matrix, $decomposed){}
}
