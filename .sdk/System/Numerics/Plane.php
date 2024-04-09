<?php
namespace System\Numerics;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PlaneOverride {
	/**
	 * @deprecated
	 * @param \System\Numerics\Plane $plane
	 * @param \System\Numerics\Matrix4x4 $matrix
	 * @return \System\Numerics\Plane
	 */
	#[MethodOverride]public static function Transform_1 ($plane, $matrix){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Plane $plane
	 * @param \System\Numerics\Quaternion $rotation
	 * @return \System\Numerics\Plane
	 */
	#[MethodOverride]public static function Transform_2 ($plane, $rotation){}
	/**
	 * @param \System\Single $x
	 * @param \System\Single $y
	 * @param \System\Single $z
	 * @param \System\Single $d
	 */
	#[MethodOverride]public function __construct_1 ($x, $y, $z, $d){}
	/**
	 * @param \System\Numerics\Vector3 $normal
	 * @param \System\Single $d
	 */
	#[MethodOverride]public function __construct_2 ($normal, $d){}
	/**
	 * @param \System\Numerics\Vector4 $value
	 */
	#[MethodOverride]public function __construct_3 ($value){}
}
final class Plane extends \System\ValueType implements
	\System\IEquatable_1
{
	use PlaneOverride;
	/**
	 * @field
	 * @var \System\Numerics\Vector3
	 */
	public $Normal;
	/**
	 * @field
	 * @var \System\Single
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
	 * @uses PlaneOverride::Transform_1 <br>public , args: ($plane, $matrix)<br>
	 * @uses PlaneOverride::Transform_2 <br>public , args: ($plane, $rotation)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Numerics\Plane|mixed|\override
	 */
	#[MethodOverridePublic]function Transform (\override ...$args){}
	/**
	 * @param \System\Numerics\Plane $value1
	 * @param \System\Numerics\Plane $value2
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($value1, $value2){}
	/**
	 * @param \System\Numerics\Plane $value1
	 * @param \System\Numerics\Plane $value2
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($value1, $value2){}
	/**
	 * @uses PlaneOverride::__construct_1 <br>public , args: ($x, $y, $z, $d)<br>
	 * @uses PlaneOverride::__construct_2 <br>public , args: ($normal, $d)<br>
	 * @uses PlaneOverride::__construct_3 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}