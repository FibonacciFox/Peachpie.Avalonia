<?php
namespace Avalonia\Rendering\Composition\Expressions;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait BuiltInExpressionFfiOverride {
	/**
	 * @deprecated
	 * @param \System\Single $a
	 * @param \System\Single $b
	 * @param \System\Single $p
	 * @return \System\Single
	 */
	#[MethodOverride]private static function Lerp_1 ($a, $b, $p){}
	/**
	 * @deprecated
	 * @param \System\Double|double $a
	 * @param \System\Double|double $b
	 * @param \System\Double|double $p
	 * @return \System\Double|double
	 */
	#[MethodOverride]private static function Lerp_2 ($a, $b, $p){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Matrix3x2 $m
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride]private static function Inverse_1 ($m){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Matrix4x4 $m
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride]private static function Inverse_2 ($m){}
	/**
	 * @deprecated
	 * @param \System\Single $edge0
	 * @param \System\Single $edge1
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	#[MethodOverride]private static function SmoothStep_1 ($edge0, $edge1, $x){}
	/**
	 * @deprecated
	 * @param \System\Double|double $edge0
	 * @param \System\Double|double $edge1
	 * @param \System\Double|double $x
	 * @return \System\Double|double
	 */
	#[MethodOverride]private static function SmoothStep_2 ($edge0, $edge1, $x){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector2 $edge0
	 * @param \System\Numerics\Vector2 $edge1
	 * @param \System\Numerics\Vector2 $x
	 * @return \System\Numerics\Vector2
	 */
	#[MethodOverride]private static function SmoothStep_3 ($edge0, $edge1, $x){}
	/**
	 * @deprecated
	 * @param \Avalonia\Vector $edge0
	 * @param \Avalonia\Vector $edge1
	 * @param \Avalonia\Vector $x
	 * @return \Avalonia\Vector
	 */
	#[MethodOverride]private static function SmoothStep_4 ($edge0, $edge1, $x){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector3 $edge0
	 * @param \System\Numerics\Vector3 $edge1
	 * @param \System\Numerics\Vector3 $x
	 * @return \System\Numerics\Vector3
	 */
	#[MethodOverride]private static function SmoothStep_5 ($edge0, $edge1, $x){}
	/**
	 * @deprecated
	 * @param \Avalonia\Vector3D $edge0
	 * @param \Avalonia\Vector3D $edge1
	 * @param \Avalonia\Vector3D $x
	 * @return \Avalonia\Vector3D
	 */
	#[MethodOverride]private static function SmoothStep_6 ($edge0, $edge1, $x){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector4 $edge0
	 * @param \System\Numerics\Vector4 $edge1
	 * @param \System\Numerics\Vector4 $x
	 * @return \System\Numerics\Vector4
	 */
	#[MethodOverride]private static function SmoothStep_7 ($edge0, $edge1, $x){}
}
class BuiltInExpressionFfi extends \System\Object implements
	\Avalonia\Rendering\Composition\Expressions\IExpressionForeignFunctionInterface
{
	use BuiltInExpressionFfiOverride;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Expressions\BuiltInExpressionFfi
	 * @since readonly
	 */
	public $Instance;
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses BuiltInExpressionFfiOverride::Lerp_1 <br>private , args: ($a, $b, $p)<br>
	 * @uses BuiltInExpressionFfiOverride::Lerp_2 <br>private , args: ($a, $b, $p)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Single|\System\Double|double|mixed|\override
	 */
	#[MethodOverridePrivate]function Lerp (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses BuiltInExpressionFfiOverride::Inverse_1 <br>private , args: ($m)<br>
	 * @uses BuiltInExpressionFfiOverride::Inverse_2 <br>private , args: ($m)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Numerics\Matrix3x2|\System\Numerics\Matrix4x4|mixed|\override
	 */
	#[MethodOverridePrivate]function Inverse (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses BuiltInExpressionFfiOverride::SmoothStep_1 <br>private , args: ($edge0, $edge1, $x)<br>
	 * @uses BuiltInExpressionFfiOverride::SmoothStep_2 <br>private , args: ($edge0, $edge1, $x)<br>
	 * @uses BuiltInExpressionFfiOverride::SmoothStep_3 <br>private , args: ($edge0, $edge1, $x)<br>
	 * @uses BuiltInExpressionFfiOverride::SmoothStep_4 <br>private , args: ($edge0, $edge1, $x)<br>
	 * @uses BuiltInExpressionFfiOverride::SmoothStep_5 <br>private , args: ($edge0, $edge1, $x)<br>
	 * @uses BuiltInExpressionFfiOverride::SmoothStep_6 <br>private , args: ($edge0, $edge1, $x)<br>
	 * @uses BuiltInExpressionFfiOverride::SmoothStep_7 <br>private , args: ($edge0, $edge1, $x)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Single|\System\Double|double|\System\Numerics\Vector2|\Avalonia\Vector|\System\Numerics\Vector3|\Avalonia\Vector3D|\System\Numerics\Vector4|mixed|\override
	 */
	#[MethodOverridePrivate]function SmoothStep (\override ...$args){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Collections\Generic\IReadOnlyList_1 $arguments [generic: Avalonia\Rendering\Composition\Expressions\ExpressionVariant]
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant& &$result
	 * @return \System\Boolean|bool
	 */
	public function Call($name, $arguments, &$result){}
}