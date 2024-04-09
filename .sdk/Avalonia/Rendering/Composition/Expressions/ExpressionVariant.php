<?php
namespace Avalonia\Rendering\Composition\Expressions;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ExpressionVariantOverride {
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $value
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	#[MethodOverride]public static function op_Implicit_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Single $scalar
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	#[MethodOverride]public static function op_Implicit_2 ($scalar){}
	/**
	 * @deprecated
	 * @param \System\Double|double $d
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	#[MethodOverride]public static function op_Implicit_3 ($d){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector2 $value
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	#[MethodOverride]public static function op_Implicit_4 ($value){}
	/**
	 * @deprecated
	 * @param \Avalonia\Vector $value
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	#[MethodOverride]public static function op_Implicit_5 ($value){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector3 $value
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	#[MethodOverride]public static function op_Implicit_6 ($value){}
	/**
	 * @deprecated
	 * @param \Avalonia\Vector3D $value
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	#[MethodOverride]public static function op_Implicit_7 ($value){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector4 $value
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	#[MethodOverride]public static function op_Implicit_8 ($value){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Matrix3x2 $value
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	#[MethodOverride]public static function op_Implicit_9 ($value){}
	/**
	 * @deprecated
	 * @param \Avalonia\Matrix $value
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	#[MethodOverride]public static function op_Implicit_10 ($value){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Matrix4x4 $value
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	#[MethodOverride]public static function op_Implicit_11 ($value){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Quaternion $value
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	#[MethodOverride]public static function op_Implicit_12 ($value){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\Color $value
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	#[MethodOverride]public static function op_Implicit_13 ($value){}
}
final class ExpressionVariant extends \System\ValueType
{
	use ExpressionVariantOverride;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Expressions\VariantType
	 */
	public $Type;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	public $Boolean;
	/**
	 * @field
	 * @var \System\Single
	 */
	public $Scalar;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	public $Double;
	/**
	 * @field
	 * @var \System\Numerics\Vector2
	 */
	public $Vector2;
	/**
	 * @field
	 * @var \System\Numerics\Vector3
	 */
	public $Vector3;
	/**
	 * @field
	 * @var \System\Numerics\Vector4
	 */
	public $Vector4;
	/**
	 * @field
	 * @var \Avalonia\Vector
	 */
	public $Vector;
	/**
	 * @field
	 * @var \Avalonia\Vector3D
	 */
	public $Vector3D;
	/**
	 * @field
	 * @var \Avalonia\Matrix
	 */
	public $AvaloniaMatrix;
	/**
	 * @field
	 * @var \System\Numerics\Matrix3x2
	 */
	public $Matrix3x2;
	/**
	 * @field
	 * @var \System\Numerics\Matrix4x4
	 */
	public $Matrix4x4;
	/**
	 * @field
	 * @var \System\Numerics\Quaternion
	 */
	public $Quaternion;
	/**
	 * @field
	 * @var \Avalonia\Media\Color
	 */
	public $Color;
	/**
	 * @param \System\String|string $property
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public function GetProperty($property){}
	/**
	 * @uses ExpressionVariantOverride::op_Implicit_1 <br>public , args: ($value)<br>
	 * @uses ExpressionVariantOverride::op_Implicit_2 <br>public , args: ($scalar)<br>
	 * @uses ExpressionVariantOverride::op_Implicit_3 <br>public , args: ($d)<br>
	 * @uses ExpressionVariantOverride::op_Implicit_4 <br>public , args: ($value)<br>
	 * @uses ExpressionVariantOverride::op_Implicit_5 <br>public , args: ($value)<br>
	 * @uses ExpressionVariantOverride::op_Implicit_6 <br>public , args: ($value)<br>
	 * @uses ExpressionVariantOverride::op_Implicit_7 <br>public , args: ($value)<br>
	 * @uses ExpressionVariantOverride::op_Implicit_8 <br>public , args: ($value)<br>
	 * @uses ExpressionVariantOverride::op_Implicit_9 <br>public , args: ($value)<br>
	 * @uses ExpressionVariantOverride::op_Implicit_10 <br>public , args: ($value)<br>
	 * @uses ExpressionVariantOverride::op_Implicit_11 <br>public , args: ($value)<br>
	 * @uses ExpressionVariantOverride::op_Implicit_12 <br>public , args: ($value)<br>
	 * @uses ExpressionVariantOverride::op_Implicit_13 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant|mixed|\override
	 */
	#[MethodOverridePublic]function op_Implicit (\override ...$args){}
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
	public function EqualsTo($right){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $right
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public function NotEqualsTo($right){}
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
	public function And($right){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $right
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public function Or($right){}
	/**
	 * @param \T& &$res
	 * @return \System\Boolean|bool
	 */
	public function TryCast(&$res){}
	/**
	 * @param \T|object $v
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public static function Create($v){}
	/**
	 * @return \T|object
	 */
	public function CastOrDefault(){}
}