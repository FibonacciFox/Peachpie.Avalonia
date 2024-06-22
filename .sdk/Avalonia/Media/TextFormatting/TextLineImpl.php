<?php
namespace Avalonia\Media\TextFormatting;
class TextLineImpl extends \Avalonia\Media\TextFormatting\TextLine implements
	\System\IDisposable
{

	/**
	 * @field
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Media\TextFormatting\IndexedTextRun]
	 */
	protected $_indexedTextRuns;
	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Media\TextFormatting\TextRun]
	 * @since readonly
	 */
	public $TextRuns;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $FirstTextSourceIndex;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Length;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\TextLineBreak
	 * @since readonly
	 */
	public $TextLineBreak;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasCollapsed;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasOverflowed;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Baseline;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Extent;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Height;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $NewLineLength;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $OverhangAfter;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $OverhangLeading;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $OverhangTrailing;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $TrailingWhitespaceLength;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Start;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Width;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $WidthIncludingTrailingWhitespace;
	private static function GetBaselineOffset($textLine, $textRun){}
	private static function GetRunCharacterHit($run, $currentPosition, $distance){}
	private function GetPreviousCharacterHit($characterHit, $useGraphemeBoundaries){}
	private function GetTextRunBoundsRightToLeft($firstRunIndex, $lastRunIndex, $endX, $firstTextSourceIndex, $currentPosition, $remainingLength, &$coveredLength, &$newPosition){}
	private function GetTextBoundsLeftToRight($firstRunIndex, $lastRunIndex, $startX, $firstTextSourceIndex, $currentPosition, $remainingLength, &$coveredLength, &$newPosition){}
	private function GetRunBoundsLeftToRight($currentRun, $startX, $firstTextSourceIndex, $remainingLength, $currentPosition, &$offset){}
	private function GetRunBoundsRightToLeft($currentRun, $endX, $firstTextSourceIndex, $remainingLength, $currentPosition, &$offset){}
	/**
	 * @return \System\Void|void
	 */
	public function FinalizeLine(){}
	private function GetRunAtCharacterIndex($codepointIndex, $direction, &$textPosition){}
	private function CreateLineMetrics(){}
	private function GetParagraphOffsetX($width, $widthIncludingTrailingWhitespace){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextRun $textRuns
	 * @param \System\Int32|int $firstTextSourceIndex
	 * @param \System\Int32|int $length
	 * @param \System\Double|double $paragraphWidth
	 * @param \Avalonia\Media\TextFormatting\TextParagraphProperties $paragraphProperties
	 * @param \Avalonia\Media\FlowDirection $resolvedFlowDirection
	 * @param \Avalonia\Media\TextFormatting\TextLineBreak $lineBreak
	 * @param \System\Boolean|bool $hasCollapsed
	 */
	public function __construct($textRuns, $firstTextSourceIndex, $length, $paragraphWidth, $paragraphProperties, $resolvedFlowDirection, $lineBreak, $hasCollapsed){}
}