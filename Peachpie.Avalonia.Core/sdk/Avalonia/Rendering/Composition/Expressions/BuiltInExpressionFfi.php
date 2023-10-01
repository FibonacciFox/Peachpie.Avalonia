<?php
namespace Avalonia\Rendering\Composition\Expressions;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BuiltInExpressionFfiMethodsOverride
{
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] private static function Lerp_1($a, $b, $p){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] private static function Lerp_2($a, $b, $p){}
	/**
	 * @return \System\Numerics\Matrix3x2
	 */
	#[MethodOverride] private static function Inverse_1($m){}
	/**
	 * @return \System\Numerics\Matrix4x4
	 */
	#[MethodOverride] private static function Inverse_2($m){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] private static function SmoothStep_1($edge0, $edge1, $x){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] private static function SmoothStep_2($edge0, $edge1, $x){}
	/**
	 * @return \System\Numerics\Vector2
	 */
	#[MethodOverride] private static function SmoothStep_3($edge0, $edge1, $x){}
	/**
	 * @return \Avalonia\Vector
	 */
	#[MethodOverride] private static function SmoothStep_4($edge0, $edge1, $x){}
	/**
	 * @return \System\Numerics\Vector3
	 */
	#[MethodOverride] private static function SmoothStep_5($edge0, $edge1, $x){}
	/**
	 * @return \Avalonia\Vector3D
	 */
	#[MethodOverride] private static function SmoothStep_6($edge0, $edge1, $x){}
	/**
	 * @return \System\Numerics\Vector4
	 */
	#[MethodOverride] private static function SmoothStep_7($edge0, $edge1, $x){}
}
/**
 */
class BuiltInExpressionFfi extends \System\Object implements 
	\Avalonia\Rendering\Composition\Expressions\IExpressionForeignFunctionInterface
{
	/**
	 * @uses BuiltInExpressionFfiMethodsOverride::Lerp_1 ($a, $b, $p)
	 * @uses BuiltInExpressionFfiMethodsOverride::Lerp_2 ($a, $b, $p)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Lerp(mixed ...$args){}
	/**
	 * @uses BuiltInExpressionFfiMethodsOverride::Inverse_1 ($m)
	 * @uses BuiltInExpressionFfiMethodsOverride::Inverse_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Inverse(mixed ...$args){}
	/**
	 * @uses BuiltInExpressionFfiMethodsOverride::SmoothStep_1 ($edge0, $edge1, $x)
	 * @uses BuiltInExpressionFfiMethodsOverride::SmoothStep_2 ($edge0, $edge1, $x)
	 * @uses BuiltInExpressionFfiMethodsOverride::SmoothStep_3 ($edge0, $edge1, $x)
	 * @uses BuiltInExpressionFfiMethodsOverride::SmoothStep_4 ($edge0, $edge1, $x)
	 * @uses BuiltInExpressionFfiMethodsOverride::SmoothStep_5 ($edge0, $edge1, $x)
	 * @uses BuiltInExpressionFfiMethodsOverride::SmoothStep_6 ($edge0, $edge1, $x)
	 * @uses BuiltInExpressionFfiMethodsOverride::SmoothStep_7 ($edge0, $edge1, $x)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SmoothStep(mixed ...$args){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Collections\Generic\IReadOnlyList_1 $arguments
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant& $result
	 * @return \System\Boolean
	 */
	public  function Call($name, $arguments, $result){}
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\BuiltInExpressionFfi
	 */
	public static function get_Instance(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
