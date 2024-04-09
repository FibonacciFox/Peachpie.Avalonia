<?php
namespace Avalonia\Input\Raw;
final class RawPointerPoint extends \System\ValueType implements
	\System\IEquatable_1
{
	/**
	 * @property
	 * @var \Avalonia\Point
	 */
	public $Position;
	/**
	 * @property
	 * @var \System\Single
	 */
	public $Twist;
	/**
	 * @property
	 * @var \System\Single
	 */
	public $Pressure;
	/**
	 * @property
	 * @var \System\Single
	 */
	public $XTilt;
	/**
	 * @property
	 * @var \System\Single
	 */
	public $YTilt;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Input\Raw\RawPointerPoint $left
	 * @param \Avalonia\Input\Raw\RawPointerPoint $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Input\Raw\RawPointerPoint $left
	 * @param \Avalonia\Input\Raw\RawPointerPoint $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 */
	public function __construct(){}
}