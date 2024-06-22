<?php
namespace Avalonia\Media\TextFormatting;
final class TextRange extends \System\ValueType implements
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
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $End;
	/**
	 * @param \System\Int32|int $length
	 * @return \Avalonia\Media\TextFormatting\TextRange
	 */
	public function Take($length){}
	/**
	 * @param \System\Int32|int $length
	 * @return \Avalonia\Media\TextFormatting\TextRange
	 */
	public function Skip($length){}
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextRange $left
	 * @param \Avalonia\Media\TextFormatting\TextRange $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextRange $left
	 * @param \Avalonia\Media\TextFormatting\TextRange $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $length
	 */
	public function __construct($start, $length){}
}