<?php
namespace System\Drawing\Drawing2D;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MatrixMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Multiply_1($matrix){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Multiply_2($matrix, $order){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Rotate_1($angle){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Rotate_2($angle, $order){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RotateAt_1($angle, $point){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RotateAt_2($angle, $point, $order){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Scale_1($scaleX, $scaleY){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Scale_2($scaleX, $scaleY, $order){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Shear_1($shearX, $shearY){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Shear_2($shearX, $shearY, $order){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function TransformPoints_1($pts){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function TransformPoints_2($pts){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function TransformVectors_1($pts){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function TransformVectors_2($pts){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Translate_1($offsetX, $offsetY){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Translate_2($offsetX, $offsetY, $order){}
	/**
	 * @return \System\MarshalByRefObject
	 */
	#[MethodOverride] protected  function MemberwiseClone_1($cloneIdentity){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] protected  function MemberwiseClone_2(){}
}
/**
 */
class Matrix extends \System\MarshalByRefObject implements 
	\System\IDisposable
{
	/**
	 * @var \System\Single[]
	 * @property
	 */
	public readonly $Elements;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsIdentity;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsInvertible;
	/**
	 * @var \System\Single
	 * @property
	 */
	public readonly $OffsetX;
	/**
	 * @var \System\Single
	 * @property
	 */
	public readonly $OffsetY;
	/**
	 * @var \System\Numerics\Matrix3x2
	 * @property
	 */
	public $MatrixElements;
	/**
	 * @return \System\Single[]
	 */
	public  function get_Elements(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsIdentity(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsInvertible(){}
	/**
	 * @return \System\Single
	 */
	public  function get_OffsetX(){}
	/**
	 * @return \System\Single
	 */
	public  function get_OffsetY(){}
	/**
	 * @return \System\Drawing\Drawing2D\Matrix
	 */
	public  function Clone(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Invert(){}
	/**
	 * @uses MatrixMethodsOverride::Multiply_1 ($matrix)
	 * @uses MatrixMethodsOverride::Multiply_2 ($matrix, $order)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Multiply(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function Reset(){}
	/**
	 * @uses MatrixMethodsOverride::Rotate_1 ($angle)
	 * @uses MatrixMethodsOverride::Rotate_2 ($angle, $order)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Rotate(mixed ...$args){}
	/**
	 * @uses MatrixMethodsOverride::RotateAt_1 ($angle, $point)
	 * @uses MatrixMethodsOverride::RotateAt_2 ($angle, $point, $order)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RotateAt(mixed ...$args){}
	/**
	 * @uses MatrixMethodsOverride::Scale_1 ($scaleX, $scaleY)
	 * @uses MatrixMethodsOverride::Scale_2 ($scaleX, $scaleY, $order)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Scale(mixed ...$args){}
	/**
	 * @uses MatrixMethodsOverride::Shear_1 ($shearX, $shearY)
	 * @uses MatrixMethodsOverride::Shear_2 ($shearX, $shearY, $order)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Shear(mixed ...$args){}
	/**
	 * @uses MatrixMethodsOverride::TransformPoints_1 ($pts)
	 * @uses MatrixMethodsOverride::TransformPoints_2 ($pts)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TransformPoints(mixed ...$args){}
	/**
	 * @uses MatrixMethodsOverride::TransformVectors_1 ($pts)
	 * @uses MatrixMethodsOverride::TransformVectors_2 ($pts)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TransformVectors(mixed ...$args){}
	/**
	 * @uses MatrixMethodsOverride::Translate_1 ($offsetX, $offsetY)
	 * @uses MatrixMethodsOverride::Translate_2 ($offsetX, $offsetY, $order)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Translate(mixed ...$args){}
	/**
	 * @param \System\Drawing\Point[] $pts
	 * @return \System\Void|void
	 */
	public  function VectorTransformPoints($pts){}
	/**
	 * @return \System\Numerics\Matrix3x2
	 */
	public  function get_MatrixElements(){}
	/**
	 * @param \System\Numerics\Matrix3x2 $value
	 * @return \System\Void|void
	 */
	public  function set_MatrixElements($value){}
	/**
	 * @uses MatrixMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses MatrixMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
