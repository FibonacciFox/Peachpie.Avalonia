<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Vector3DOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Vector3D $left
	 * @param \Avalonia\Vector3D $right
	 * @return \Avalonia\Vector3D
	 */
	#[MethodOverride]public static function Multiply_1 ($left, $right){}
	/**
	 * @deprecated
	 * @param \Avalonia\Vector3D $left
	 * @param \System\Double|double $right
	 * @return \Avalonia\Vector3D
	 */
	#[MethodOverride]public static function Multiply_2 ($left, $right){}
	/**
	 * @deprecated
	 * @param \Avalonia\Vector3D $left
	 * @param \Avalonia\Vector3D $right
	 * @return \Avalonia\Vector3D
	 */
	#[MethodOverride]public static function Divide_1 ($left, $right){}
	/**
	 * @deprecated
	 * @param \Avalonia\Vector3D $left
	 * @param \System\Double|double $right
	 * @return \Avalonia\Vector3D
	 */
	#[MethodOverride]public static function Divide_2 ($left, $right){}
}
final class Vector3D extends \System\ValueType implements
	\System\IEquatable_1
{
	use Vector3DOverride;

	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $X;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Y;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Z;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Length;
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Vector3D
	 */
	public static function Parse($s){}
	/**
	 * @return \System\Numerics\Vector3
	 */
	protected function ToVector3(){}
	/**
	 * @param \System\Numerics\Vector3 $vector
	 * @return \Avalonia\Vector3D
	 */
	public static function op_Implicit($vector){}
	/**
	 * @param \Avalonia\Vector3D $vector1
	 * @param \Avalonia\Vector3D $vector2
	 * @return \System\Double|double
	 */
	public static function Dot($vector1, $vector2){}
	/**
	 * @param \Avalonia\Vector3D $left
	 * @param \Avalonia\Vector3D $right
	 * @return \Avalonia\Vector3D
	 */
	public static function Add($left, $right){}
	/**
	 * @param \Avalonia\Vector3D $left
	 * @param \Avalonia\Vector3D $right
	 * @return \Avalonia\Vector3D
	 */
	public static function op_Addition($left, $right){}
	/**
	 * @param \Avalonia\Vector3D $left
	 * @param \Avalonia\Vector3D $right
	 * @return \Avalonia\Vector3D
	 */
	public static function Substract($left, $right){}
	/**
	 * @param \Avalonia\Vector3D $left
	 * @param \Avalonia\Vector3D $right
	 * @return \Avalonia\Vector3D
	 */
	public static function op_Subtraction($left, $right){}
	/**
	 * @param \Avalonia\Vector3D $v
	 * @return \Avalonia\Vector3D
	 */
	public static function op_UnaryNegation($v){}
	/**
	 * @uses Vector3DOverride::Multiply_1 <br>public , args: ($left, $right)<br>
	 * @uses Vector3DOverride::Multiply_2 <br>public , args: ($left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Vector3D|mixed|\override
	 */
	#[MethodOverridePublic]function Multiply (\override ...$args){}
	/**
	 * @param \Avalonia\Vector3D $left
	 * @param \System\Double|double $right
	 * @return \Avalonia\Vector3D
	 */
	public static function op_Multiply($left, $right){}
	/**
	 * @uses Vector3DOverride::Divide_1 <br>public , args: ($left, $right)<br>
	 * @uses Vector3DOverride::Divide_2 <br>public , args: ($left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Vector3D|mixed|\override
	 */
	#[MethodOverridePublic]function Divide (\override ...$args){}
	/**
	 * @return \Avalonia\Vector3D
	 */
	public function Abs(){}
	/**
	 * @param \Avalonia\Vector3D $value
	 * @param \Avalonia\Vector3D $min
	 * @param \Avalonia\Vector3D $max
	 * @return \Avalonia\Vector3D
	 */
	public static function Clamp($value, $min, $max){}
	/**
	 * @param \Avalonia\Vector3D $left
	 * @param \Avalonia\Vector3D $right
	 * @return \Avalonia\Vector3D
	 */
	public static function Max($left, $right){}
	/**
	 * @param \Avalonia\Vector3D $left
	 * @param \Avalonia\Vector3D $right
	 * @return \Avalonia\Vector3D
	 */
	public static function Min($left, $right){}
	/**
	 * @param \Avalonia\Vector3D $value
	 * @return \Avalonia\Vector3D
	 */
	public static function Normalize($value){}
	/**
	 * @param \Avalonia\Vector3D $value1
	 * @param \Avalonia\Vector3D $value2
	 * @return \System\Double|double
	 */
	public static function DistanceSquared($value1, $value2){}
	/**
	 * @param \Avalonia\Vector3D $value1
	 * @param \Avalonia\Vector3D $value2
	 * @return \System\Double|double
	 */
	public static function Distance($value1, $value2){}
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Vector3D $left
	 * @param \Avalonia\Vector3D $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Vector3D $left
	 * @param \Avalonia\Vector3D $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Double& &$X
	 * @param \System\Double& &$Y
	 * @param \System\Double& &$Z
	 * @return \System\Void|void
	 */
	public function Deconstruct(&$X, &$Y, &$Z){}
	/**
	 * @param \System\Double|double $X
	 * @param \System\Double|double $Y
	 * @param \System\Double|double $Z
	 */
	public function __construct($X, $Y, $Z){}
}