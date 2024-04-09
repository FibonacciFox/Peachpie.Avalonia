<?php
namespace Avalonia;
final class Decomposed extends \System\ValueType implements
	\System\IEquatable_1
{
	/**
	 * @field
	 * @var \Avalonia\Vector
	 */
	public $Translate;
	/**
	 * @field
	 * @var \Avalonia\Vector
	 */
	public $Scale;
	/**
	 * @field
	 * @var \Avalonia\Vector
	 */
	public $Skew;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	public $Angle;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Matrix+Decomposed $left
	 * @param \Avalonia\Matrix+Decomposed $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Matrix+Decomposed $left
	 * @param \Avalonia\Matrix+Decomposed $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
}