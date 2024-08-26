<?php
namespace Avalonia\Media\TextFormatting;
final class BidiReorderer extends \System\Object
{
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\BidiReorderer
	 * @since readonly
	 */
	public $Instance;
	/**
	 * @param \System\Span_1 $textRuns [generic: Avalonia\Media\TextFormatting\TextRun]
	 * @param \Avalonia\Media\FlowDirection $flowDirection
	 * @param \System\Int32|int $firstTextSourceIndex
	 * @return \Avalonia\Media\TextFormatting\IndexedTextRun[]
	 */
	public function BidiReorder($textRuns, $flowDirection, $firstTextSourceIndex){}
	private static function GetRunBidiLevel($run, $flowDirection){}
	private function LinearReorder(){}
	private function MergeRangeWithPrevious($index){}
	/**
	 */
	public function __construct(){}
}