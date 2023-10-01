<?php
namespace Avalonia\Rendering\Composition;
/**
 */
class MatrixUtils extends \System\Object
{
	/**
	 * @param \Avalonia\Vector $size
	 * @param \Avalonia\Vector $anchorPoint
	 * @param \Avalonia\Vector3D $centerPoint
	 * @param \Avalonia\Matrix $transformMatrix
	 * @param \Avalonia\Vector3D $scale
	 * @param \System\Single $rotationAngle
	 * @param \System\Numerics\Quaternion $orientation
	 * @param \Avalonia\Vector3D $offset
	 * @return \Avalonia\Matrix
	 */
	public static function ComputeTransform($size, $anchorPoint, $centerPoint, $transformMatrix, $scale, $rotationAngle, $orientation, $offset){}
	/**
	 * @param \Avalonia\Matrix $matrix
	 * @return \System\Numerics\Matrix4x4
	 */
	public static function ToMatrix4x4($matrix){}
	/**
	 * @param \System\Numerics\Matrix4x4 $matrix44
	 * @return \Avalonia\Matrix
	 */
	public static function ToMatrix($matrix44){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
