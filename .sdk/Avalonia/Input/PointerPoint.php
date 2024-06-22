<?php
namespace Avalonia\Input;
final class PointerPoint extends \System\ValueType implements
	\System\IEquatable_1
{

	/**
	 * @property
	 * @var \Avalonia\Input\IPointer
	 * @since readonly
	 */
	public $Pointer;
	/**
	 * @property
	 * @var \Avalonia\Input\PointerPointProperties
	 * @since readonly
	 */
	public $Properties;
	/**
	 * @property
	 * @var \Avalonia\Point
	 * @since readonly
	 */
	public $Position;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Input\PointerPoint $left
	 * @param \Avalonia\Input\PointerPoint $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Input\PointerPoint $left
	 * @param \Avalonia\Input\PointerPoint $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Input\IPointer $pointer
	 * @param \Avalonia\Point $position
	 * @param \Avalonia\Input\PointerPointProperties $properties
	 */
	public function __construct($pointer, $position, $properties){}
}