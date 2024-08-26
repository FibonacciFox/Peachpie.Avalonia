<?php
namespace Avalonia\Media\TextFormatting;
class TextLine extends \System\Object implements
	\System\IDisposable
{
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
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Start;
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
	public $Width;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $WidthIncludingTrailingWhitespace;
	/**
	 * @param \Avalonia\Media\DrawingContext $drawingContext
	 * @param \Avalonia\Point $lineOrigin
	 * @return \System\Void|void
	 */
	abstract public function Draw($drawingContext, $lineOrigin);
	/**
	 * @param \Avalonia\Media\TextFormatting\TextCollapsingProperties ...$collapsingPropertiesList
	 * @return \Avalonia\Media\TextFormatting\TextLine
	 */
	abstract public function Collapse(...$collapsingPropertiesList);
	/**
	 * @param \Avalonia\Media\TextFormatting\JustificationProperties $justificationProperties
	 * @return \System\Void|void
	 */
	abstract public function Justify($justificationProperties);
	/**
	 * @param \System\Double|double $distance
	 * @return \Avalonia\Media\CharacterHit
	 */
	abstract public function GetCharacterHitFromDistance($distance);
	/**
	 * @param \Avalonia\Media\CharacterHit $characterHit
	 * @return \System\Double|double
	 */
	abstract public function GetDistanceFromCharacterHit($characterHit);
	/**
	 * @param \Avalonia\Media\CharacterHit $characterHit
	 * @return \Avalonia\Media\CharacterHit
	 */
	abstract public function GetNextCaretCharacterHit($characterHit);
	/**
	 * @param \Avalonia\Media\CharacterHit $characterHit
	 * @return \Avalonia\Media\CharacterHit
	 */
	abstract public function GetPreviousCaretCharacterHit($characterHit);
	/**
	 * @param \Avalonia\Media\CharacterHit $characterHit
	 * @return \Avalonia\Media\CharacterHit
	 */
	abstract public function GetBackspaceCaretCharacterHit($characterHit);
	/**
	 * @param \System\Int32|int $firstTextSourceCharacterIndex
	 * @param \System\Int32|int $textLength
	 * @return \System\Collections\Generic\IReadOnlyList_1[Avalonia\Media\TextFormatting\TextBounds]
	 */
	abstract public function GetTextBounds($firstTextSourceCharacterIndex, $textLength);
	/**
	 * @return \System\Void|void
	 */
	abstract public function Dispose();
}