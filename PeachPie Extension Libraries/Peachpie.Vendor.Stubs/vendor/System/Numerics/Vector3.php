<?php
namespace System\Numerics;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Vector3Override {
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector3 $left
	 * @param \System\Numerics\Vector3 $right
	 * @return \System\Numerics\Vector3
	 */
	#[MethodOverride]public static function op_Division_1 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector3 $value1
	 * @param \System\Single $value2
	 * @return \System\Numerics\Vector3
	 */
	#[MethodOverride]public static function op_Division_2 ($value1, $value2){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector3 $left
	 * @param \System\Numerics\Vector3 $right
	 * @return \System\Numerics\Vector3
	 */
	#[MethodOverride]public static function op_Multiply_1 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector3 $left
	 * @param \System\Single $right
	 * @return \System\Numerics\Vector3
	 */
	#[MethodOverride]public static function op_Multiply_2 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Single $left
	 * @param \System\Numerics\Vector3 $right
	 * @return \System\Numerics\Vector3
	 */
	#[MethodOverride]public static function op_Multiply_3 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector3 $left
	 * @param \System\Numerics\Vector3 $right
	 * @return \System\Numerics\Vector3
	 */
	#[MethodOverride]public static function Divide_1 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector3 $left
	 * @param \System\Single $divisor
	 * @return \System\Numerics\Vector3
	 */
	#[MethodOverride]public static function Divide_2 ($left, $divisor){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector3 $left
	 * @param \System\Numerics\Vector3 $right
	 * @return \System\Numerics\Vector3
	 */
	#[MethodOverride]public static function Multiply_1 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector3 $left
	 * @param \System\Single $right
	 * @return \System\Numerics\Vector3
	 */
	#[MethodOverride]public static function Multiply_2 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Single $left
	 * @param \System\Numerics\Vector3 $right
	 * @return \System\Numerics\Vector3
	 */
	#[MethodOverride]public static function Multiply_3 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector3 $position
	 * @param \System\Numerics\Matrix4x4 $matrix
	 * @return \System\Numerics\Vector3
	 */
	#[MethodOverride]public static function Transform_1 ($position, $matrix){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector3 $value
	 * @param \System\Numerics\Quaternion $rotation
	 * @return \System\Numerics\Vector3
	 */
	#[MethodOverride]public static function Transform_2 ($value, $rotation){}
	/**
	 * @deprecated
	 * @param \System\Single $array
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_1 ($array){}
	/**
	 * @deprecated
	 * @param \System\Single $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_2 ($array, $index){}
	/**
	 * @deprecated
	 * @param \System\Span_1 $destination [generic: System\Single]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_3 ($destination){}
	/**
	 * @param \System\Single $value
	 */
	#[MethodOverride]public function __construct_1 ($value){}
	/**
	 * @param \System\Numerics\Vector2 $value
	 * @param \System\Single $z
	 */
	#[MethodOverride]public function __construct_2 ($value, $z){}
	/**
	 * @param \System\Single $x
	 * @param \System\Single $y
	 * @param \System\Single $z
	 */
	#[MethodOverride]public function __construct_3 ($x, $y, $z){}
	/**
	 * @param \System\ReadOnlySpan_1 $values [generic: System\Single]
	 */
	#[MethodOverride]public function __construct_4 ($values){}
}
final class Vector3 extends \System\ValueType implements
	\System\IEquatable_1,
	\System\IFormattable
{
	use Vector3Override;
	/**
	 * @field
	 * @var \System\Single
	 */
	public $X;
	/**
	 * @field
	 * @var \System\Single
	 */
	public $Y;
	/**
	 * @field
	 * @var \System\Single
	 */
	public $Z;
	/**
	 * @property
	 * @var \System\Numerics\Vector3
	 * @since readonly
	 */
	public $Zero;
	/**
	 * @property
	 * @var \System\Numerics\Vector3
	 * @since readonly
	 */
	public $One;
	/**
	 * @property
	 * @var \System\Numerics\Vector3
	 * @since readonly
	 */
	public $UnitX;
	/**
	 * @property
	 * @var \System\Numerics\Vector3
	 * @since readonly
	 */
	public $UnitY;
	/**
	 * @property
	 * @var \System\Numerics\Vector3
	 * @since readonly
	 */
	public $UnitZ;
	/**
	 * @property
	 * @var \System\Single
	 */
	public $Item;
	/**
	 * @param \System\Numerics\Vector3 $vector
	 * @param \System\Int32|int $index
	 * @return \System\Single
	 */
	protected static function GetElement($vector, $index){}
	private static function GetElementUnsafe($vector, $index){}
	/**
	 * @param \System\Numerics\Vector3 $vector
	 * @param \System\Int32|int $index
	 * @param \System\Single $value
	 * @return \System\Numerics\Vector3
	 */
	protected static function WithElement($vector, $index, $value){}
	/**
	 * @param \System\Numerics\Vector3& $vector
	 * @param \System\Int32|int $index
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	protected static function SetElementUnsafe($vector, $index, $value){}
	/**
	 * @param \System\Numerics\Vector3 $left
	 * @param \System\Numerics\Vector3 $right
	 * @return \System\Numerics\Vector3
	 */
	public static function op_Addition($left, $right){}
	/**
	 * @uses Vector3Override::op_Division_1 <br>public , args: ($left, $right)<br>
	 * @uses Vector3Override::op_Division_2 <br>public , args: ($value1, $value2)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Numerics\Vector3|mixed|\override
	 */
	#[MethodOverridePublic]function op_Division (\override ...$args){}
	/**
	 * @param \System\Numerics\Vector3 $left
	 * @param \System\Numerics\Vector3 $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Numerics\Vector3 $left
	 * @param \System\Numerics\Vector3 $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @uses Vector3Override::op_Multiply_1 <br>public , args: ($left, $right)<br>
	 * @uses Vector3Override::op_Multiply_2 <br>public , args: ($left, $right)<br>
	 * @uses Vector3Override::op_Multiply_3 <br>public , args: ($left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Numerics\Vector3|mixed|\override
	 */
	#[MethodOverridePublic]function op_Multiply (\override ...$args){}
	/**
	 * @param \System\Numerics\Vector3 $left
	 * @param \System\Numerics\Vector3 $right
	 * @return \System\Numerics\Vector3
	 */
	public static function op_Subtraction($left, $right){}
	/**
	 * @param \System\Numerics\Vector3 $value
	 * @return \System\Numerics\Vector3
	 */
	public static function op_UnaryNegation($value){}
	/**
	 * @param \System\Numerics\Vector3 $value
	 * @return \System\Numerics\Vector3
	 */
	public static function Abs($value){}
	/**
	 * @param \System\Numerics\Vector3 $left
	 * @param \System\Numerics\Vector3 $right
	 * @return \System\Numerics\Vector3
	 */
	public static function Add($left, $right){}
	/**
	 * @param \System\Numerics\Vector3 $value1
	 * @param \System\Numerics\Vector3 $min
	 * @param \System\Numerics\Vector3 $max
	 * @return \System\Numerics\Vector3
	 */
	public static function Clamp($value1, $min, $max){}
	/**
	 * @param \System\Numerics\Vector3 $vector1
	 * @param \System\Numerics\Vector3 $vector2
	 * @return \System\Numerics\Vector3
	 */
	public static function Cross($vector1, $vector2){}
	/**
	 * @param \System\Numerics\Vector3 $value1
	 * @param \System\Numerics\Vector3 $value2
	 * @return \System\Single
	 */
	public static function Distance($value1, $value2){}
	/**
	 * @param \System\Numerics\Vector3 $value1
	 * @param \System\Numerics\Vector3 $value2
	 * @return \System\Single
	 */
	public static function DistanceSquared($value1, $value2){}
	/**
	 * @uses Vector3Override::Divide_1 <br>public , args: ($left, $right)<br>
	 * @uses Vector3Override::Divide_2 <br>public , args: ($left, $divisor)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Numerics\Vector3|mixed|\override
	 */
	#[MethodOverridePublic]function Divide (\override ...$args){}
	/**
	 * @param \System\Numerics\Vector3 $vector1
	 * @param \System\Numerics\Vector3 $vector2
	 * @return \System\Single
	 */
	public static function Dot($vector1, $vector2){}
	/**
	 * @param \System\Numerics\Vector3 $value1
	 * @param \System\Numerics\Vector3 $value2
	 * @param \System\Single $amount
	 * @return \System\Numerics\Vector3
	 */
	public static function Lerp($value1, $value2, $amount){}
	/**
	 * @param \System\Numerics\Vector3 $value1
	 * @param \System\Numerics\Vector3 $value2
	 * @return \System\Numerics\Vector3
	 */
	public static function Max($value1, $value2){}
	/**
	 * @param \System\Numerics\Vector3 $value1
	 * @param \System\Numerics\Vector3 $value2
	 * @return \System\Numerics\Vector3
	 */
	public static function Min($value1, $value2){}
	/**
	 * @uses Vector3Override::Multiply_1 <br>public , args: ($left, $right)<br>
	 * @uses Vector3Override::Multiply_2 <br>public , args: ($left, $right)<br>
	 * @uses Vector3Override::Multiply_3 <br>public , args: ($left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Numerics\Vector3|mixed|\override
	 */
	#[MethodOverridePublic]function Multiply (\override ...$args){}
	/**
	 * @param \System\Numerics\Vector3 $value
	 * @return \System\Numerics\Vector3
	 */
	public static function Negate($value){}
	/**
	 * @param \System\Numerics\Vector3 $value
	 * @return \System\Numerics\Vector3
	 */
	public static function Normalize($value){}
	/**
	 * @param \System\Numerics\Vector3 $vector
	 * @param \System\Numerics\Vector3 $normal
	 * @return \System\Numerics\Vector3
	 */
	public static function Reflect($vector, $normal){}
	/**
	 * @param \System\Numerics\Vector3 $value
	 * @return \System\Numerics\Vector3
	 */
	public static function SquareRoot($value){}
	/**
	 * @param \System\Numerics\Vector3 $left
	 * @param \System\Numerics\Vector3 $right
	 * @return \System\Numerics\Vector3
	 */
	public static function Subtract($left, $right){}
	/**
	 * @uses Vector3Override::Transform_1 <br>public , args: ($position, $matrix)<br>
	 * @uses Vector3Override::Transform_2 <br>public , args: ($value, $rotation)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Numerics\Vector3|mixed|\override
	 */
	#[MethodOverridePublic]function Transform (\override ...$args){}
	/**
	 * @param \System\Numerics\Vector3 $normal
	 * @param \System\Numerics\Matrix4x4 $matrix
	 * @return \System\Numerics\Vector3
	 */
	public static function TransformNormal($normal, $matrix){}
	/**
	 * @uses Vector3Override::CopyTo_1 <br>public , args: ($array)<br>
	 * @uses Vector3Override::CopyTo_2 <br>public , args: ($array, $index)<br>
	 * @uses Vector3Override::CopyTo_3 <br>public , args: ($destination)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function CopyTo (\override ...$args){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Single]
	 * @return \System\Boolean|bool
	 */
	public function TryCopyTo($destination){}
	/**
	 * @return \System\Single
	 */
	public function Length(){}
	/**
	 * @return \System\Single
	 */
	public function LengthSquared(){}
	/**
	 * @uses Vector3Override::__construct_1 <br>public , args: ($value)<br>
	 * @uses Vector3Override::__construct_2 <br>public , args: ($value, $z)<br>
	 * @uses Vector3Override::__construct_3 <br>public , args: ($x, $y, $z)<br>
	 * @uses Vector3Override::__construct_4 <br>public , args: ($values)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}