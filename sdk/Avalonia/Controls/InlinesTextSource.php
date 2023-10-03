<?php
namespace Avalonia\Controls;
/**
 */
class InlinesTextSource extends \System\ValueType implements 
	\Avalonia\Media\TextFormatting\ITextSource
{
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_TextRuns(){}
	/**
	 * @param \System\Int32|int $textSourceIndex
	 * @return \Avalonia\Media\TextFormatting\TextRun
	 */
	public  function GetTextRun($textSourceIndex){}
}
