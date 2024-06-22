<?php
namespace Avalonia\Media\TextFormatting;
final class TextRunBounds extends \System\ValueType implements
	\System\IEquatable_1
{

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $TextSourceCharacterIndex;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Length;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 * @since readonly
	 */
	public $Rectangle;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\TextRun
	 * @since readonly
	 */
	public $TextRun;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextRunBounds $left
	 * @param \Avalonia\Media\TextFormatting\TextRunBounds $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextRunBounds $left
	 * @param \Avalonia\Media\TextFormatting\TextRunBounds $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
}