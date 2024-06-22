<?php
namespace Avalonia\Media\Transformation;
final class UnitValue extends \System\ValueType
{

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Media\Transformation\TransformParser+Unit
	 */
	public $Unit;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Double|double
	 */
	public $Value;
	/**
	 * @property
	 * @var \Avalonia\Media\Transformation\TransformParser+UnitValue
	 * @since readonly
	 */
	public $Zero;
	/**
	 * @property
	 * @var \Avalonia\Media\Transformation\TransformParser+UnitValue
	 * @since readonly
	 */
	public $One;
	/**
	 * @param \Avalonia\Media\Transformation\TransformParser+Unit $unit
	 * @param \System\Double|double $value
	 */
	public function __construct($unit, $value){}
}