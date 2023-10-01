<?php
namespace Avalonia\Media\TextFormatting;
/**
 */
class TextFormatterImpl extends \Avalonia\Media\TextFormatting\TextFormatter
{
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $textRuns
	 * @param \System\Int32|int $length
	 * @param \Avalonia\Media\TextFormatting\FormattingObjectPool $objectPool
	 * @return \Avalonia\Media\TextFormatting\SplitResult_1
	 */
	protected static function SplitTextRuns($textRuns, $length, $objectPool){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $textRuns
	 * @param \Avalonia\Media\TextFormatting\TextParagraphProperties $paragraphProperties
	 * @param \Avalonia\Media\TextFormatting\FormattingObjectPool $objectPool
	 * @param \Avalonia\Media\FontManager $fontManager
	 * @param \Avalonia\Media\FlowDirection& $resolvedFlowDirection
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ShapeTextRuns($textRuns, $paragraphProperties, $objectPool, $fontManager, $resolvedFlowDirection){}
	/**
	 * @param \System\ReadOnlyMemory_1 $x
	 * @param \System\ReadOnlyMemory_1 $y
	 * @param \System\ReadOnlyMemory_1& $joinedMemory
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryJoinContiguousMemories($x, $y, $joinedMemory){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextRunProperties $x
	 * @param \Avalonia\Media\TextFormatting\TextRunProperties $y
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CanShapeTogether($x, $y){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $textRuns
	 * @param \System\ReadOnlyMemory_1 $text
	 * @param \Avalonia\Media\TextFormatting\TextShaperOptions $options
	 * @param \Avalonia\Media\TextFormatting\TextShaper $textShaper
	 * @param \Avalonia\Media\TextFormatting\RentedList_1 $results
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ShapeTogether($textRuns, $text, $options, $textShaper, $results){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $textCharacters
	 * @param \System\ReadOnlySpan_1 $levels
	 * @param \Avalonia\Media\FontManager $fontManager
	 * @param \Avalonia\Media\TextFormatting\RentedList_1 $processedRuns
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CoalesceLevels($textCharacters, $levels, $fontManager, $processedRuns){}
	/**
	 * @param \Avalonia\Media\TextFormatting\ITextSource $textSource
	 * @param \System\Int32|int $firstTextSourceIndex
	 * @param \Avalonia\Media\TextFormatting\FormattingObjectPool $objectPool
	 * @param \Avalonia\Media\TextFormatting\TextEndOfLine& $endOfLine
	 * @param \System\Int32& $textSourceLength
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FetchTextRuns($textSource, $firstTextSourceIndex, $objectPool, $endOfLine, $textSourceLength){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextRun $textRun
	 * @param \Avalonia\Media\TextFormatting\Unicode\LineBreak& $lineBreak
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryGetLineBreak($textRun, $lineBreak){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $textRuns
	 * @param \System\Double|double $paragraphWidth
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MeasureLength($textRuns, $paragraphWidth){}
	/**
	 * @param \System\Int32|int $firstTextSourceIndex
	 * @param \System\Double|double $paragraphWidth
	 * @param \Avalonia\Media\TextFormatting\TextParagraphProperties $paragraphProperties
	 * @return \Avalonia\Media\TextFormatting\TextLineImpl
	 */
	public static function CreateEmptyTextLine($firstTextSourceIndex, $paragraphWidth, $paragraphProperties){}
	/**
	 * @param \System\Collections\Generic\List_1 $textRuns
	 * @param \System\Boolean $canReuseTextRunList
	 * @param \System\Int32|int $firstTextSourceIndex
	 * @param \System\Double|double $paragraphWidth
	 * @param \Avalonia\Media\TextFormatting\TextParagraphProperties $paragraphProperties
	 * @param \Avalonia\Media\FlowDirection $resolvedFlowDirection
	 * @param \Avalonia\Media\TextFormatting\TextLineBreak $currentLineBreak
	 * @param \Avalonia\Media\TextFormatting\FormattingObjectPool $objectPool
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PerformTextWrapping($textRuns, $canReuseTextRunList, $firstTextSourceIndex, $paragraphWidth, $paragraphProperties, $resolvedFlowDirection, $currentLineBreak, $objectPool){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextRun $textRun
	 * @param \Avalonia\Media\FlowDirection $flowDirection
	 * @return \Avalonia\Media\TextFormatting\ShapedTextRun
	 */
	protected static function CreateSymbol($textRun, $flowDirection){}
}
