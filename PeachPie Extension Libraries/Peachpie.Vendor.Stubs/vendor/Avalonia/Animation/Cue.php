<?php
namespace Avalonia\Animation;
final class Cue extends \System\ValueType implements
	\System\IEquatable_1
{
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $CueValue;
	/**
	 * @param \System\String|string $value
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \Avalonia\Animation\Cue
	 */
	public static function Parse($value, $culture){}
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Animation\Cue $left
	 * @param \Avalonia\Animation\Cue $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Animation\Cue $left
	 * @param \Avalonia\Animation\Cue $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Double|double $value
	 */
	public function __construct($value){}
}