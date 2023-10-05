<?php
namespace Avalonia\Media\Transformation;
/**
 */
class UnitValue extends \System\ValueType
{
	/**
	 * @var \Avalonia\Media\Transformation\TransformParser+Unit
	 * @field
	 */
	public readonly $Unit;
	/**
	 * @var \System\Double
	 * @field
	 */
	public readonly $Value;
	/**
	 * @var \Avalonia\Media\Transformation\TransformParser+UnitValue
	 * @property
	 */
	public readonly $Zero;
	/**
	 * @var \Avalonia\Media\Transformation\TransformParser+UnitValue
	 * @property
	 */
	public readonly $One;
	/**
	 * @return \Avalonia\Media\Transformation\UnitValue
	 */
	public static function get_Zero(){}
	/**
	 * @return \Avalonia\Media\Transformation\UnitValue
	 */
	public static function get_One(){}
}
