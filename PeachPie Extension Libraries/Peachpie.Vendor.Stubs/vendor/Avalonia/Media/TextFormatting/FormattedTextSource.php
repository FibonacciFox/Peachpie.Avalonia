<?php
namespace Avalonia\Media\TextFormatting;
final class FormattedTextSource extends \System\ValueType implements
	\Avalonia\Media\TextFormatting\ITextSource
{

	/**
	 * @param \System\Int32|int $textSourceIndex
	 * @return \Avalonia\Media\TextFormatting\TextRun
	 */
	public function GetTextRun($textSourceIndex){}
	private static function CreateTextStyleRun($text, $firstTextSourceIndex, $defaultProperties, $textModifier){}
	private static function CoerceLength($text, $length){}
	/**
	 * @param \System\String|string $text
	 * @param \Avalonia\Media\TextFormatting\TextRunProperties $defaultProperties
	 * @param \System\Collections\Generic\IReadOnlyList_1 $textModifier [generic: Avalonia\Utilities\ValueSpan_1[Avalonia\Media\TextFormatting\TextRunProperties]
	 */
	public function __construct($text, $defaultProperties, $textModifier){}
}