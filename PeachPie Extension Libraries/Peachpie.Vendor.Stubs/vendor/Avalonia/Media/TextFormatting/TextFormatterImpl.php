<?php
namespace Avalonia\Media\TextFormatting;
final class TextFormatterImpl extends \Avalonia\Media\TextFormatting\TextFormatter
{

	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $textRuns [generic: Avalonia\Media\TextFormatting\TextRun]
	 * @param \System\Int32|int $length
	 * @param \Avalonia\Media\TextFormatting\FormattingObjectPool $objectPool
	 * @return \Avalonia\Media\TextFormatting\SplitResult_1[Avalonia\Media\TextFormatting\FormattingObjectPool+RentedList_1[Avalonia\Media\TextFormatting\TextRun]]
	 */
	protected static function SplitTextRuns($textRuns, $length, $objectPool){}
	private static function ShapeTextRuns($textRuns, $paragraphProperties, $objectPool, $fontManager, &$resolvedFlowDirection){}
	private static function TryJoinContiguousMemories($x, $y, &$joinedMemory){}
	private static function CanShapeTogether($x, $y){}
	private static function ShapeTogether($textRuns, $text, $options, $textShaper, $results){}
	private static function CoalesceLevels($textCharacters, $levels, $fontManager, $processedRuns){}
	private static function FetchTextRuns($textSource, $firstTextSourceIndex, $objectPool, &$endOfLine, &$textSourceLength){}
	private static function TryGetLineBreak($textRun, &$lineBreak){}
	private static function MeasureLength($textRuns, $paragraphWidth){}
	/**
	 * @param \System\Int32|int $firstTextSourceIndex
	 * @param \System\Double|double $paragraphWidth
	 * @param \Avalonia\Media\TextFormatting\TextParagraphProperties $paragraphProperties
	 * @return \Avalonia\Media\TextFormatting\TextLineImpl
	 */
	public static function CreateEmptyTextLine($firstTextSourceIndex, $paragraphWidth, $paragraphProperties){}
	private static function PerformTextWrapping($textRuns, $canReuseTextRunList, $firstTextSourceIndex, $paragraphWidth, $paragraphProperties, $resolvedFlowDirection, $currentLineBreak, $objectPool){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextRun $textRun
	 * @param \Avalonia\Media\FlowDirection $flowDirection
	 * @return \Avalonia\Media\TextFormatting\ShapedTextRun
	 */
	protected static function CreateSymbol($textRun, $flowDirection){}
	/**
	 */
	public function __construct(){}
}