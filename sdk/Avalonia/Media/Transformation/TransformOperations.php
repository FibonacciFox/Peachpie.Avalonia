<?php
namespace Avalonia\Media\Transformation;
/**
 */
class TransformOperations extends \System\Object implements 
	\Avalonia\Media\ITransform
{
	/**
	 * @var \Avalonia\Media\Transformation\TransformOperations
	 * @property
	 */
	public readonly $Identity;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsIdentity;
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Media\Transformation\TransformOperation]
	 * @property
	 */
	public readonly $Operations;
	/**
	 * @var \Avalonia\Matrix
	 * @property
	 */
	public readonly $Value;
	/**
	 * @return \Avalonia\Media\Transformation\TransformOperations
	 */
	public static function get_Identity(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsIdentity(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_Operations(){}
	/**
	 * @return \Avalonia\Matrix
	 */
	public  function get_Value(){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Media\Transformation\TransformOperations
	 */
	public static function Parse($s){}
	/**
	 * @param \System\Int32|int $capacity
	 * @return \Avalonia\Media\Transformation\Builder
	 */
	public static function CreateBuilder($capacity){}
	/**
	 * @param \Avalonia\Media\Transformation\TransformOperations $from
	 * @param \Avalonia\Media\Transformation\TransformOperations $to
	 * @param \System\Double|double $progress
	 * @return \Avalonia\Media\Transformation\TransformOperations
	 */
	public static function Interpolate($from, $to, $progress){}
	/**
	 * @param \System\Int32|int $startOffset
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ApplyTransforms($startOffset){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CheckIsIdentity(){}
	/**
	 * @param \Avalonia\Media\Transformation\TransformOperations $from
	 * @param \Avalonia\Media\Transformation\TransformOperations $to
	 * @param \System\Double|double $progress
	 * @param \Avalonia\Media\Transformation\TransformOperations& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryInterpolate($from, $to, $progress, $result){}
	/**
	 * @param \Avalonia\Media\Transformation\TransformOperations $operations
	 * @param \System\Int32|int $startOffset
	 * @param \Avalonia\Decomposed& $decomposed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ComputeDecomposedTransform($operations, $startOffset, $decomposed){}
	/**
	 * @param \Avalonia\Media\Transformation\TransformOperations $from
	 * @param \Avalonia\Media\Transformation\TransformOperations $to
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ComputeMatchingPrefixLength($from, $to){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
