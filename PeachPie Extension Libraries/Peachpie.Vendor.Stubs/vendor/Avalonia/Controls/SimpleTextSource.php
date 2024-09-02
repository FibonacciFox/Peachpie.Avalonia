<?php
namespace Avalonia\Controls;
final class SimpleTextSource extends \System\ValueType implements
	\Avalonia\Media\TextFormatting\ITextSource,
	\System\IEquatable_1
{

	/**
	 * @param \System\Int32|int $textSourceIndex
	 * @return \Avalonia\Media\TextFormatting\TextRun
	 */
	public function GetTextRun($textSourceIndex){}
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Controls\TextBlock+SimpleTextSource $left
	 * @param \Avalonia\Controls\TextBlock+SimpleTextSource $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Controls\TextBlock+SimpleTextSource $left
	 * @param \Avalonia\Controls\TextBlock+SimpleTextSource $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\String|string $text
	 * @param \Avalonia\Media\TextFormatting\TextRunProperties $defaultProperties
	 */
	public function __construct($text, $defaultProperties){}
}