<?php
namespace System\Numerics;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PlaneMethodsOverride
{
	/**
	 * @return \System\Numerics\Plane
	 */
	#[MethodOverride] public static function Transform_1($plane, $matrix){}
	/**
	 * @return \System\Numerics\Plane
	 */
	#[MethodOverride] public static function Transform_2($plane, $rotation){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
}
/**
 */
class Plane extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Numerics\Vector3
	 * @field
	 */
	public $Normal;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $D;
	/**
	 * @param \System\Numerics\Vector3 $point1
	 * @param \System\Numerics\Vector3 $point2
	 * @param \System\Numerics\Vector3 $point3
	 * @return \System\Numerics\Plane
	 */
	public static function CreateFromVertices($point1, $point2, $point3){}
	/**
	 * @param \System\Numerics\Plane $plane
	 * @param \System\Numerics\Vector4 $value
	 * @return \System\Single
	 */
	public static function Dot($plane, $value){}
	/**
	 * @param \System\Numerics\Plane $plane
	 * @param \System\Numerics\Vector3 $value
	 * @return \System\Single
	 */
	public static function DotCoordinate($plane, $value){}
	/**
	 * @param \System\Numerics\Plane $plane
	 * @param \System\Numerics\Vector3 $value
	 * @return \System\Single
	 */
	public static function DotNormal($plane, $value){}
	/**
	 * @param \System\Numerics\Plane $value
	 * @return \System\Numerics\Plane
	 */
	public static function Normalize($value){}
	/**
	 * @uses PlaneMethodsOverride::Transform_1 ($plane, $matrix)
	 * @uses PlaneMethodsOverride::Transform_2 ($plane, $rotation)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Transform(mixed ...$args){}
	/**
	 * @param \System\Numerics\Plane $value1
	 * @param \System\Numerics\Plane $value2
	 * @return \System\Boolean
	 */
	public static function op_Equality($value1, $value2){}
	/**
	 * @param \System\Numerics\Plane $value1
	 * @param \System\Numerics\Plane $value2
	 * @return \System\Boolean
	 */
	public static function op_Inequality($value1, $value2){}
	/**
	 * @uses PlaneMethodsOverride::Equals_1 ($obj)
	 * @uses PlaneMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
