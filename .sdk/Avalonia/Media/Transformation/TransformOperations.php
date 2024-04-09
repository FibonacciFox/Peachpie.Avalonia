<?php
namespace Avalonia\Media\Transformation;
final class TransformOperations extends \System\Object implements
	\Avalonia\Media\ITransform
{
	/**
	 * @property
	 * @var \Avalonia\Media\Transformation\TransformOperations
	 * @since readonly
	 */
	public $Identity;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsIdentity;
	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Media\Transformation\TransformOperation]
	 * @since readonly
	 */
	public $Operations;
	/**
	 * @property
	 * @var \Avalonia\Matrix
	 * @since readonly
	 */
	public $Value;
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Media\Transformation\TransformOperations
	 */
	public static function Parse($s){}
	/**
	 * @param \System\Int32|int $capacity
	 * @return \Avalonia\Media\Transformation\TransformOperations+Builder
	 */
	public static function CreateBuilder($capacity){}
	/**
	 * @param \Avalonia\Media\Transformation\TransformOperations $from
	 * @param \Avalonia\Media\Transformation\TransformOperations $to
	 * @param \System\Double|double $progress
	 * @return \Avalonia\Media\Transformation\TransformOperations
	 */
	public static function Interpolate($from, $to, $progress){}
	private function ApplyTransforms($startOffset){}
	private function CheckIsIdentity(){}
	private static function TryInterpolate($from, $to, $progress, $result){}
	private static function ComputeDecomposedTransform($operations, $startOffset, &$decomposed){}
	private static function ComputeMatchingPrefixLength($from, $to){}
}