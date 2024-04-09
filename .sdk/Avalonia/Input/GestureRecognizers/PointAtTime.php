<?php
namespace Avalonia\Input\GestureRecognizers;
final class PointAtTime extends \System\ValueType implements
	\System\IEquatable_1
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Valid;
	/**
	 * @property
	 * @var \Avalonia\Vector
	 */
	public $Point;
	/**
	 * @property
	 * @var \System\TimeSpan
	 */
	public $Time;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Input\GestureRecognizers\PointAtTime $left
	 * @param \Avalonia\Input\GestureRecognizers\PointAtTime $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Input\GestureRecognizers\PointAtTime $left
	 * @param \Avalonia\Input\GestureRecognizers\PointAtTime $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Boolean& &$Valid
	 * @param \Avalonia\Vector& &$Point
	 * @param \System\TimeSpan& &$Time
	 * @return \System\Void|void
	 */
	public function Deconstruct(&$Valid, &$Point, &$Time){}
	/**
	 * @param \System\Boolean|bool $Valid
	 * @param \Avalonia\Vector $Point
	 * @param \System\TimeSpan $Time
	 */
	public function __construct($Valid, $Point, $Time){}
}