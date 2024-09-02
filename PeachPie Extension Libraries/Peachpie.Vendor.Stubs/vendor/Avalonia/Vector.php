<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait VectorOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Vector $a
	 * @param \Avalonia\Vector $b
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function op_Multiply_1 ($a, $b){}
	/**
	 * @deprecated
	 * @param \Avalonia\Vector $vector
	 * @param \System\Double|double $scale
	 * @return \Avalonia\Vector
	 */
	#[MethodOverride]public static function op_Multiply_2 ($vector, $scale){}
	/**
	 * @deprecated
	 * @param \System\Double|double $scale
	 * @param \Avalonia\Vector $vector
	 * @return \Avalonia\Vector
	 */
	#[MethodOverride]public static function op_Multiply_3 ($scale, $vector){}
	/**
	 * @deprecated
	 * @return \Avalonia\Vector
	 */
	#[MethodOverride]public function Normalize_1 (){}
	/**
	 * @deprecated
	 * @param \Avalonia\Vector $vector
	 * @return \Avalonia\Vector
	 */
	#[MethodOverride]public static function Normalize_2 ($vector){}
	/**
	 * @deprecated
	 * @return \Avalonia\Vector
	 */
	#[MethodOverride]public function Negate_1 (){}
	/**
	 * @deprecated
	 * @param \Avalonia\Vector $vector
	 * @return \Avalonia\Vector
	 */
	#[MethodOverride]public static function Negate_2 ($vector){}
	/**
	 * @deprecated
	 * @param \Avalonia\Vector $a
	 * @param \Avalonia\Vector $b
	 * @return \Avalonia\Vector
	 */
	#[MethodOverride]public static function Divide_1 ($a, $b){}
	/**
	 * @deprecated
	 * @param \Avalonia\Vector $vector
	 * @param \System\Double|double $scalar
	 * @return \Avalonia\Vector
	 */
	#[MethodOverride]public static function Divide_2 ($vector, $scalar){}
	/**
	 * @deprecated
	 * @param \Avalonia\Vector $a
	 * @param \Avalonia\Vector $b
	 * @return \Avalonia\Vector
	 */
	#[MethodOverride]public static function Multiply_1 ($a, $b){}
	/**
	 * @deprecated
	 * @param \Avalonia\Vector $vector
	 * @param \System\Double|double $scalar
	 * @return \Avalonia\Vector
	 */
	#[MethodOverride]public static function Multiply_2 ($vector, $scalar){}
}
final class Vector extends \System\ValueType implements
	\System\IEquatable_1
{
	use VectorOverride;
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
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Length;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $SquaredLength;
	/**
	 * @property
	 * @var \Avalonia\Vector
	 * @since readonly
	 */
	public $Zero;
	/**
	 * @property
	 * @var \Avalonia\Vector
	 * @since readonly
	 */
	public $One;
	/**
	 * @property
	 * @var \Avalonia\Vector
	 * @since readonly
	 */
	public $UnitX;
	/**
	 * @property
	 * @var \Avalonia\Vector
	 * @since readonly
	 */
	public $UnitY;
	/**
	 * @param \Avalonia\Vector $a
	 * @return \Avalonia\Point
	 */
	public static function op_Explicit($a){}
	/**
	 * @uses VectorOverride::op_Multiply_1 <br>public , args: ($a, $b)<br>
	 * @uses VectorOverride::op_Multiply_2 <br>public , args: ($vector, $scale)<br>
	 * @uses VectorOverride::op_Multiply_3 <br>public , args: ($scale, $vector)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Double|double|\Avalonia\Vector|mixed|\override
	 */
	#[MethodOverridePublic]function op_Multiply (\override ...$args){}
	/**
	 * @param \Avalonia\Vector $vector
	 * @param \System\Double|double $scale
	 * @return \Avalonia\Vector
	 */
	public static function op_Division($vector, $scale){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Vector
	 */
	public static function Parse($s){}
	/**
	 * @param \Avalonia\Vector $a
	 * @return \Avalonia\Vector
	 */
	public static function op_UnaryNegation($a){}
	/**
	 * @param \Avalonia\Vector $a
	 * @param \Avalonia\Vector $b
	 * @return \Avalonia\Vector
	 */
	public static function op_Addition($a, $b){}
	/**
	 * @param \Avalonia\Vector $a
	 * @param \Avalonia\Vector $b
	 * @return \Avalonia\Vector
	 */
	public static function op_Subtraction($a, $b){}
	/**
	 * @param \Avalonia\Vector $other
	 * @return \System\Boolean|bool
	 */
	public function NearlyEquals($other){}
	/**
	 * @param \Avalonia\Vector $left
	 * @param \Avalonia\Vector $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Vector $left
	 * @param \Avalonia\Vector $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\Double|double $x
	 * @return \Avalonia\Vector
	 */
	public function WithX($x){}
	/**
	 * @param \System\Double|double $y
	 * @return \Avalonia\Vector
	 */
	public function WithY($y){}
	/**
	 * @uses VectorOverride::Normalize_1 <br>public , args: ()<br>
	 * @uses VectorOverride::Normalize_2 <br>public , args: ($vector)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Vector|mixed|\override
	 */
	#[MethodOverridePublic]function Normalize (\override ...$args){}
	/**
	 * @uses VectorOverride::Negate_1 <br>public , args: ()<br>
	 * @uses VectorOverride::Negate_2 <br>public , args: ($vector)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Vector|mixed|\override
	 */
	#[MethodOverridePublic]function Negate (\override ...$args){}
	/**
	 * @param \Avalonia\Vector $a
	 * @param \Avalonia\Vector $b
	 * @return \System\Double|double
	 */
	public static function Dot($a, $b){}
	/**
	 * @param \Avalonia\Vector $a
	 * @param \Avalonia\Vector $b
	 * @return \System\Double|double
	 */
	public static function Cross($a, $b){}
	/**
	 * @uses VectorOverride::Divide_1 <br>public , args: ($a, $b)<br>
	 * @uses VectorOverride::Divide_2 <br>public , args: ($vector, $scalar)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Vector|mixed|\override
	 */
	#[MethodOverridePublic]function Divide (\override ...$args){}
	/**
	 * @uses VectorOverride::Multiply_1 <br>public , args: ($a, $b)<br>
	 * @uses VectorOverride::Multiply_2 <br>public , args: ($vector, $scalar)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Vector|mixed|\override
	 */
	#[MethodOverridePublic]function Multiply (\override ...$args){}
	/**
	 * @param \Avalonia\Vector $a
	 * @param \Avalonia\Vector $b
	 * @return \Avalonia\Vector
	 */
	public static function Add($a, $b){}
	/**
	 * @param \Avalonia\Vector $a
	 * @param \Avalonia\Vector $b
	 * @return \Avalonia\Vector
	 */
	public static function Subtract($a, $b){}
	/**
	 * @param \System\Double& &$x
	 * @param \System\Double& &$y
	 * @return \System\Void|void
	 */
	public function Deconstruct(&$x, &$y){}
	/**
	 * @return \System\Numerics\Vector2
	 */
	protected function ToVector2(){}
	/**
	 * @return \Avalonia\Vector
	 */
	public function Abs(){}
	/**
	 * @param \Avalonia\Vector $value
	 * @param \Avalonia\Vector $min
	 * @param \Avalonia\Vector $max
	 * @return \Avalonia\Vector
	 */
	public static function Clamp($value, $min, $max){}
	/**
	 * @param \Avalonia\Vector $left
	 * @param \Avalonia\Vector $right
	 * @return \Avalonia\Vector
	 */
	public static function Max($left, $right){}
	/**
	 * @param \Avalonia\Vector $left
	 * @param \Avalonia\Vector $right
	 * @return \Avalonia\Vector
	 */
	public static function Min($left, $right){}
	/**
	 * @param \Avalonia\Vector $value1
	 * @param \Avalonia\Vector $value2
	 * @return \System\Double|double
	 */
	public static function Distance($value1, $value2){}
	/**
	 * @param \Avalonia\Vector $value1
	 * @param \Avalonia\Vector $value2
	 * @return \System\Double|double
	 */
	public static function DistanceSquared($value1, $value2){}
	/**
	 * @param \System\Numerics\Vector2 $v
	 * @return \Avalonia\Vector
	 */
	public static function op_Implicit($v){}
	/**
	 * @param \System\Double|double $x
	 * @param \System\Double|double $y
	 */
	public function __construct($x, $y){}
}