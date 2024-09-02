<?php
namespace Avalonia\Media\TextFormatting;
final class TextLineMetrics extends \System\ValueType implements
	\System\IEquatable_1
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $HasOverflowed;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Height;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $NewlineLength;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Start;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $TextBaseline;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $TrailingWhitespaceLength;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Width;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $WidthIncludingTrailingWhitespace;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Extent;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $OverhangAfter;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $OverhangLeading;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $OverhangTrailing;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextLineMetrics $left
	 * @param \Avalonia\Media\TextFormatting\TextLineMetrics $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextLineMetrics $left
	 * @param \Avalonia\Media\TextFormatting\TextLineMetrics $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
}