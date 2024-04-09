<?php
namespace Avalonia\Media\Transformation;
final class TranslateLayout extends \System\ValueType implements
	\System\IEquatable_1
{
	/**
	 * @field
	 * @var \System\Double|double
	 */
	public $X;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	public $Y;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\Transformation\TransformOperation+DataLayout+TranslateLayout $left
	 * @param \Avalonia\Media\Transformation\TransformOperation+DataLayout+TranslateLayout $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\Transformation\TransformOperation+DataLayout+TranslateLayout $left
	 * @param \Avalonia\Media\Transformation\TransformOperation+DataLayout+TranslateLayout $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
}