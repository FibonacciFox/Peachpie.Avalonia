<?php
namespace Avalonia\Media\Transformation;
final class TransformOperation extends \System\ValueType implements
	\System\IEquatable_1
{

	/**
	 * @field
	 * @var \Avalonia\Media\Transformation\TransformOperation+OperationType
	 */
	public $Type;
	/**
	 * @field
	 * @var \Avalonia\Matrix
	 */
	public $Matrix;
	/**
	 * @field
	 * @var \Avalonia\Media\Transformation\TransformOperation+DataLayout
	 */
	public $Data;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsIdentity;
	/**
	 * @property
	 * @var \Avalonia\Media\Transformation\TransformOperation
	 * @since readonly
	 */
	public $Identity;
	/**
	 * @return \System\Void|void
	 */
	public function Bake(){}
	/**
	 * @param \System\Nullable_1 $from [generic: Avalonia\Media\Transformation\TransformOperation]
	 * @param \System\Nullable_1 $to [generic: Avalonia\Media\Transformation\TransformOperation]
	 * @param \System\Double|double $progress
	 * @param \Avalonia\Media\Transformation\TransformOperation& $result
	 * @return \System\Boolean|bool
	 */
	public static function TryInterpolate($from, $to, $progress, $result){}
	private static function IsOperationIdentity($operation){}
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\Transformation\TransformOperation $left
	 * @param \Avalonia\Media\Transformation\TransformOperation $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\Transformation\TransformOperation $left
	 * @param \Avalonia\Media\Transformation\TransformOperation $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
}