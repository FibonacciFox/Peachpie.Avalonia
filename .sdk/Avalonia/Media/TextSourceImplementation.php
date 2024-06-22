<?php
namespace Avalonia\Media;
class TextSourceImplementation extends \System\Object implements
	\Avalonia\Media\TextFormatting\ITextSource
{


	/**
	 * @param \System\Int32|int $textSourceCharacterIndex
	 * @return \Avalonia\Media\TextFormatting\TextRun
	 */
	public function GetTextRun($textSourceCharacterIndex){}
	/**
	 * @param \Avalonia\Media\FormattedText $text
	 */
	public function __construct($text){}
}