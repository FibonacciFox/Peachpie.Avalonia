<?php
namespace Avalonia\Media\TextFormatting;
/**
 */
class TextLine extends \System\Object implements 
	\System\IDisposable
{
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
	 * @var \System\Double
	 * @property
	 */
	public readonly $Start;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $TrailingWhitespaceLength;
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
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_TextRuns(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_FirstTextSourceIndex(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Length(){}
	/**
	 * @return \Avalonia\Media\TextFormatting\TextLineBreak
	 */
	public  function get_TextLineBreak(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Baseline(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Extent(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasCollapsed(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasOverflowed(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Height(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_NewLineLength(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_OverhangAfter(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_OverhangLeading(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_OverhangTrailing(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Start(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_TrailingWhitespaceLength(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Width(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_WidthIncludingTrailingWhitespace(){}
	/**
	 * @param \Avalonia\Media\DrawingContext $drawingContext
	 * @param \Avalonia\Point $lineOrigin
	 * @return \System\Void|void
	 */
	public  function Draw($drawingContext, $lineOrigin){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextCollapsingProperties[] $collapsingPropertiesList
	 * @return \Avalonia\Media\TextFormatting\TextLine
	 */
	public  function Collapse($collapsingPropertiesList){}
	/**
	 * @param \Avalonia\Media\TextFormatting\JustificationProperties $justificationProperties
	 * @return \System\Void|void
	 */
	public  function Justify($justificationProperties){}
	/**
	 * @param \System\Double|double $distance
	 * @return \Avalonia\Media\CharacterHit
	 */
	public  function GetCharacterHitFromDistance($distance){}
	/**
	 * @param \Avalonia\Media\CharacterHit $characterHit
	 * @return \System\Double|double
	 */
	public  function GetDistanceFromCharacterHit($characterHit){}
	/**
	 * @param \Avalonia\Media\CharacterHit $characterHit
	 * @return \Avalonia\Media\CharacterHit
	 */
	public  function GetNextCaretCharacterHit($characterHit){}
	/**
	 * @param \Avalonia\Media\CharacterHit $characterHit
	 * @return \Avalonia\Media\CharacterHit
	 */
	public  function GetPreviousCaretCharacterHit($characterHit){}
	/**
	 * @param \Avalonia\Media\CharacterHit $characterHit
	 * @return \Avalonia\Media\CharacterHit
	 */
	public  function GetBackspaceCaretCharacterHit($characterHit){}
	/**
	 * @param \System\Int32|int $firstTextSourceCharacterIndex
	 * @param \System\Int32|int $textLength
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function GetTextBounds($firstTextSourceCharacterIndex, $textLength){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
