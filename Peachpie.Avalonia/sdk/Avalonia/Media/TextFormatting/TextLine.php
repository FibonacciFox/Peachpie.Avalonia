<?php
namespace Avalonia\Media\TextFormatting;
/**
 */
class TextLine extends \System\Object implements 
	\System\IDisposable
{
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
