<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PointOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Point $a
	 * @param \Avalonia\Point $b
	 * @return \Avalonia\Point
	 */
	#[MethodOverride]public static function op_Addition_1 ($a, $b){}
	/**
	 * @deprecated
	 * @param \Avalonia\Point $a
	 * @param \Avalonia\Vector $b
	 * @return \Avalonia\Point
	 */
	#[MethodOverride]public static function op_Addition_2 ($a, $b){}
	/**
	 * @deprecated
	 * @param \Avalonia\Point $a
	 * @param \Avalonia\Point $b
	 * @return \Avalonia\Point
	 */
	#[MethodOverride]public static function op_Subtraction_1 ($a, $b){}
	/**
	 * @deprecated
	 * @param \Avalonia\Point $a
	 * @param \Avalonia\Vector $b
	 * @return \Avalonia\Point
	 */
	#[MethodOverride]public static function op_Subtraction_2 ($a, $b){}
	/**
	 * @deprecated
	 * @param \Avalonia\Point $p
	 * @param \System\Double|double $k
	 * @return \Avalonia\Point
	 */
	#[MethodOverride]public static function op_Multiply_1 ($p, $k){}
	/**
	 * @deprecated
	 * @param \System\Double|double $k
	 * @param \Avalonia\Point $p
	 * @return \Avalonia\Point
	 */
	#[MethodOverride]public static function op_Multiply_2 ($k, $p){}
	/**
	 * @deprecated
	 * @param \Avalonia\Point $point
	 * @param \Avalonia\Matrix $matrix
	 * @return \Avalonia\Point
	 */
	#[MethodOverride]public static function op_Multiply_3 ($point, $matrix){}
	/**
	 * @deprecated
	 * @param \Avalonia\Matrix $transform
	 * @return \Avalonia\Point
	 */
	#[MethodOverride]public function Transform_1 ($transform){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Matrix4x4 $matrix
	 * @return \Avalonia\Point
	 */
	#[MethodOverride]protected function Transform_2 ($matrix){}
}
final class Point extends \System\ValueType implements
	\System\IEquatable_1
{
	use PointOverride;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $X;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Y;
	/**
	 * @param \Avalonia\Point $p
	 * @return \Avalonia\Vector
	 */
	public static function op_Implicit($p){}
	/**
	 * @param \Avalonia\Point $a
	 * @return \Avalonia\Point
	 */
	public static function op_UnaryNegation($a){}
	/**
	 * @param \Avalonia\Point $left
	 * @param \Avalonia\Point $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Point $left
	 * @param \Avalonia\Point $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @uses PointOverride::op_Addition_1 <br>public , args: ($a, $b)<br>
	 * @uses PointOverride::op_Addition_2 <br>public , args: ($a, $b)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Point|mixed|\override
	 */
	#[MethodOverridePublic]function op_Addition (\override ...$args){}
	/**
	 * @uses PointOverride::op_Subtraction_1 <br>public , args: ($a, $b)<br>
	 * @uses PointOverride::op_Subtraction_2 <br>public , args: ($a, $b)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Point|mixed|\override
	 */
	#[MethodOverridePublic]function op_Subtraction (\override ...$args){}
	/**
	 * @uses PointOverride::op_Multiply_1 <br>public , args: ($p, $k)<br>
	 * @uses PointOverride::op_Multiply_2 <br>public , args: ($k, $p)<br>
	 * @uses PointOverride::op_Multiply_3 <br>public , args: ($point, $matrix)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Point|mixed|\override
	 */
	#[MethodOverridePublic]function op_Multiply (\override ...$args){}
	/**
	 * @param \Avalonia\Point $p
	 * @param \System\Double|double $k
	 * @return \Avalonia\Point
	 */
	public static function op_Division($p, $k){}
	/**
	 * @param \Avalonia\Point $value1
	 * @param \Avalonia\Point $value2
	 * @return \System\Double|double
	 */
	public static function Distance($value1, $value2){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Point
	 */
	public static function Parse($s){}
	/**
	 * @param \Avalonia\Point $other
	 * @return \System\Boolean|bool
	 */
	public function NearlyEquals($other){}
	/**
	 * @uses PointOverride::Transform_1 <br>public , args: ($transform)<br>
	 * @uses PointOverride::Transform_2 <br>protected , args: ($matrix)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Point|mixed|\override
	 */
	#[MethodOverridePublic]function Transform (\override ...$args){}
	/**
	 * @param \System\Double|double $x
	 * @return \Avalonia\Point
	 */
	public function WithX($x){}
	/**
	 * @param \System\Double|double $y
	 * @return \Avalonia\Point
	 */
	public function WithY($y){}
	/**
	 * @param \System\Double& &$x
	 * @param \System\Double& &$y
	 * @return \System\Void|void
	 */
	public function Deconstruct(&$x, &$y){}
	/**
	 * @param \System\Double|double $x
	 * @param \System\Double|double $y
	 */
	public function __construct($x, $y){}
}