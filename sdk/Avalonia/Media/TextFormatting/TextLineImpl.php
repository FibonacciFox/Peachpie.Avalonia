<?php
namespace Avalonia\Media\TextFormatting;
/**
 */
class TextLineImpl extends \Avalonia\Media\TextFormatting\TextLine implements 
	\System\IDisposable
{
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Media\TextFormatting\IndexedTextRun]
	 * @field
	 */
	protected $_indexedTextRuns;
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Media\TextFormatting\TextRun]
	 * @property
	 */
	public readonly $TextRuns;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $FirstTextSourceIndex;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Length;
	/**
	 * @var \Avalonia\Media\TextFormatting\TextLineBreak
	 * @property
	 */
	public readonly $TextLineBreak;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HasCollapsed;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HasOverflowed;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Baseline;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Extent;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Height;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $NewLineLength;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $OverhangAfter;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $OverhangLeading;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $OverhangTrailing;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $TrailingWhitespaceLength;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Start;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Width;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $WidthIncludingTrailingWhitespace;
	/**
	 * @return \System\Collections\Generic\Comparer_1
	 */
	protected static function get_TextBoundsComparer(){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextLine $textLine
	 * @param \Avalonia\Media\TextFormatting\DrawableTextRun $textRun
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetBaselineOffset($textLine, $textRun){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextRun $run
	 * @param \System\Int32|int $currentPosition
	 * @param \System\Double|double $distance
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetRunCharacterHit($run, $currentPosition, $distance){}
	/**
	 * @param \System\Int32|int $firstRunIndex
	 * @param \System\Int32|int $lastRunIndex
	 * @param \System\Double|double $endX
	 * @param \System\Int32|int $firstTextSourceIndex
	 * @param \System\Int32|int $currentPosition
	 * @param \System\Int32|int $remainingLength
	 * @param \System\Int32& $coveredLength
	 * @param \System\Int32& $newPosition
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetTextRunBoundsRightToLeft($firstRunIndex, $lastRunIndex, $endX, $firstTextSourceIndex, $currentPosition, $remainingLength, $coveredLength, $newPosition){}
	/**
	 * @param \System\Int32|int $firstRunIndex
	 * @param \System\Int32|int $lastRunIndex
	 * @param \System\Double|double $startX
	 * @param \System\Int32|int $firstTextSourceIndex
	 * @param \System\Int32|int $currentPosition
	 * @param \System\Int32|int $remainingLength
	 * @param \System\Int32& $coveredLength
	 * @param \System\Int32& $newPosition
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetTextBoundsLeftToRight($firstRunIndex, $lastRunIndex, $startX, $firstTextSourceIndex, $currentPosition, $remainingLength, $coveredLength, $newPosition){}
	/**
	 * @param \Avalonia\Media\TextFormatting\ShapedTextRun $currentRun
	 * @param \System\Double|double $startX
	 * @param \System\Int32|int $firstTextSourceIndex
	 * @param \System\Int32|int $remainingLength
	 * @param \System\Int32|int $currentPosition
	 * @param \System\Int32& $offset
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetRunBoundsLeftToRight($currentRun, $startX, $firstTextSourceIndex, $remainingLength, $currentPosition, $offset){}
	/**
	 * @param \Avalonia\Media\TextFormatting\ShapedTextRun $currentRun
	 * @param \System\Double|double $endX
	 * @param \System\Int32|int $firstTextSourceIndex
	 * @param \System\Int32|int $remainingLength
	 * @param \System\Int32|int $currentPosition
	 * @param \System\Int32& $offset
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetRunBoundsRightToLeft($currentRun, $endX, $firstTextSourceIndex, $remainingLength, $currentPosition, $offset){}
	/**
	 * @return \System\Void|void
	 */
	public  function FinalizeLine(){}
	/**
	 * @param \System\Int32|int $codepointIndex
	 * @param \Avalonia\Media\TextFormatting\LogicalDirection $direction
	 * @param \System\Int32& $textPosition
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetRunAtCharacterIndex($codepointIndex, $direction, $textPosition){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateLineMetrics(){}
	/**
	 * @param \System\Double|double $width
	 * @param \System\Double|double $widthIncludingTrailingWhitespace
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetParagraphOffsetX($width, $widthIncludingTrailingWhitespace){}
}
