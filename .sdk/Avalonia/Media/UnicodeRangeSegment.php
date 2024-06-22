<?php
namespace Avalonia\Media;
final class UnicodeRangeSegment extends \System\ValueType implements
	\System\IEquatable_1
{

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Start;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $End;
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Boolean|bool
	 */
	public function IsInRange($value){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Media\UnicodeRangeSegment
	 */
	public static function Parse($s){}
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\UnicodeRangeSegment $left
	 * @param \Avalonia\Media\UnicodeRangeSegment $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\UnicodeRangeSegment $left
	 * @param \Avalonia\Media\UnicodeRangeSegment $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $end
	 */
	public function __construct($start, $end){}
}