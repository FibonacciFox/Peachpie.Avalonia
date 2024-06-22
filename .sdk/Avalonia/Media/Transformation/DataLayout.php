<?php
namespace Avalonia\Media\Transformation;
final class DataLayout extends \System\ValueType implements
	\System\IEquatable_1
{

	/**
	 * @field
	 * @var \Avalonia\Media\Transformation\TransformOperation+DataLayout+SkewLayout
	 */
	public $Skew;
	/**
	 * @field
	 * @var \Avalonia\Media\Transformation\TransformOperation+DataLayout+ScaleLayout
	 */
	public $Scale;
	/**
	 * @field
	 * @var \Avalonia\Media\Transformation\TransformOperation+DataLayout+TranslateLayout
	 */
	public $Translate;
	/**
	 * @field
	 * @var \Avalonia\Media\Transformation\TransformOperation+DataLayout+RotateLayout
	 */
	public $Rotate;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\Transformation\TransformOperation+DataLayout $left
	 * @param \Avalonia\Media\Transformation\TransformOperation+DataLayout $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\Transformation\TransformOperation+DataLayout $left
	 * @param \Avalonia\Media\Transformation\TransformOperation+DataLayout $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
}