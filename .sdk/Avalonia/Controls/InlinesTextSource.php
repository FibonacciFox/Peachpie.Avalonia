<?php
namespace Avalonia\Controls;
final class InlinesTextSource extends \System\ValueType implements
	\Avalonia\Media\TextFormatting\ITextSource
{
	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Media\TextFormatting\TextRun]
	 * @since readonly
	 */
	public $TextRuns;
	/**
	 * @param \System\Int32|int $textSourceIndex
	 * @return \Avalonia\Media\TextFormatting\TextRun
	 */
	public function GetTextRun($textSourceIndex){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $textRuns [generic: Avalonia\Media\TextFormatting\TextRun]
	 */
	public function __construct($textRuns){}
}