<?php
namespace Avalonia\Media\Transformation;
final class RotateLayout extends \System\ValueType implements
	\System\IEquatable_1
{

	/**
	 * @field
	 * @var \System\Double|double
	 */
	public $Angle;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\Transformation\TransformOperation+DataLayout+RotateLayout $left
	 * @param \Avalonia\Media\Transformation\TransformOperation+DataLayout+RotateLayout $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\Transformation\TransformOperation+DataLayout+RotateLayout $left
	 * @param \Avalonia\Media\Transformation\TransformOperation+DataLayout+RotateLayout $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
}