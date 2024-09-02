<?php
namespace Avalonia\Media\TextFormatting\Unicode;
final class LineBreak extends \System\ValueType implements
	\System\IEquatable_1
{
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $PositionMeasure;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $PositionWrap;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $Required;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\LineBreak $left
	 * @param \Avalonia\Media\TextFormatting\Unicode\LineBreak $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\LineBreak $left
	 * @param \Avalonia\Media\TextFormatting\Unicode\LineBreak $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Int32|int $positionMeasure
	 * @param \System\Int32|int $positionWrap
	 * @param \System\Boolean|bool $required
	 */
	public function __construct($positionMeasure, $positionWrap, $required){}
}