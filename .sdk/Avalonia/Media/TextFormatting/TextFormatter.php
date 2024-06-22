<?php
namespace Avalonia\Media\TextFormatting;
class TextFormatter extends \System\Object
{

	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\TextFormatter
	 * @since readonly
	 */
	public $Current;
	/**
	 * @param \Avalonia\Media\TextFormatting\ITextSource $textSource
	 * @param \System\Int32|int $firstTextSourceIndex
	 * @param \System\Double|double $paragraphWidth
	 * @param \Avalonia\Media\TextFormatting\TextParagraphProperties $paragraphProperties
	 * @param \Avalonia\Media\TextFormatting\TextLineBreak $previousLineBreak
	 * @return \Avalonia\Media\TextFormatting\TextLine
	 */
	abstract public function FormatLine($textSource, $firstTextSourceIndex, $paragraphWidth, $paragraphProperties, $previousLineBreak);
}