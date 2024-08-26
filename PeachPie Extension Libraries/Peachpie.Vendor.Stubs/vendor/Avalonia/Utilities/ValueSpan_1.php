<?php
namespace Avalonia\Utilities;
final class ValueSpan_1 extends \System\ValueType implements
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
	public $Length;
	/**
	 * @property
	 * @var \T|object
	 * @since readonly
	 */
	public $Value;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Utilities\ValueSpan_1 $left [generic: T]
	 * @param \Avalonia\Utilities\ValueSpan_1 $right [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Utilities\ValueSpan_1 $left [generic: T]
	 * @param \Avalonia\Utilities\ValueSpan_1 $right [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $length
	 * @param \T|object $value
	 */
	public function __construct($start, $length, $value){}
}