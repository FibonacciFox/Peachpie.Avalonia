<?php
namespace Avalonia\Controls;
class MaxLinesTextSource extends \System\Object implements
	\Avalonia\Media\TextFormatting\ITextSource
{

	/**
	 * @param \System\Int32|int $textSourceIndex
	 * @return \Avalonia\Media\TextFormatting\TextRun
	 */
	public function GetTextRun($textSourceIndex){}
	/**
	 * @param \System\Int32|int $maxLines
	 */
	public function __construct($maxLines){}
}