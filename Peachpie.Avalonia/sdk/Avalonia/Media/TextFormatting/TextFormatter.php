<?php
namespace Avalonia\Media\TextFormatting;
/**
 */
class TextFormatter extends \System\Object
{
	/**
	 * @return \Avalonia\Media\TextFormatting\TextFormatter
	 */
	public static function get_Current(){}
	/**
	 * @param \Avalonia\Media\TextFormatting\ITextSource $textSource
	 * @param \System\Int32|int $firstTextSourceIndex
	 * @param \System\Double|double $paragraphWidth
	 * @param \Avalonia\Media\TextFormatting\TextParagraphProperties $paragraphProperties
	 * @param \Avalonia\Media\TextFormatting\TextLineBreak $previousLineBreak
	 * @return \Avalonia\Media\TextFormatting\TextLine
	 */
	public  function FormatLine($textSource, $firstTextSourceIndex, $paragraphWidth, $paragraphProperties, $previousLineBreak){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
