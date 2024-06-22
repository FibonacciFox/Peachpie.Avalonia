<?php
namespace Avalonia\Input\GestureRecognizers;
final class Velocity extends \System\ValueType implements
	\System\IEquatable_1
{

	/**
	 * @property
	 * @var \Avalonia\Vector
	 */
	public $PixelsPerSecond;
	/**
	 * @param \System\Double|double $minValue
	 * @param \System\Double|double $maxValue
	 * @return \Avalonia\Input\GestureRecognizers\Velocity
	 */
	public function ClampMagnitude($minValue, $maxValue){}
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Input\GestureRecognizers\Velocity $left
	 * @param \Avalonia\Input\GestureRecognizers\Velocity $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Input\GestureRecognizers\Velocity $left
	 * @param \Avalonia\Input\GestureRecognizers\Velocity $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Vector& &$PixelsPerSecond
	 * @return \System\Void|void
	 */
	public function Deconstruct(&$PixelsPerSecond){}
	/**
	 * @param \Avalonia\Vector $PixelsPerSecond
	 */
	public function __construct($PixelsPerSecond){}
}