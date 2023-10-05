<?php
namespace Avalonia\Media\TextFormatting;
/**
 */
class TextLayout extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $LineHeight;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $MaxWidth;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $MaxHeight;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MaxLines;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $LetterSpacing;
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Media\TextFormatting\TextLine]
	 * @property
	 */
	public readonly $TextLines;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Height;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Extent;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Baseline;
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
	public readonly $Width;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $WidthIncludingTrailingWhitespace;
	/**
	 * @return \System\Double|double
	 */
	public  function get_LineHeight(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_MaxWidth(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_MaxHeight(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MaxLines(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_LetterSpacing(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_TextLines(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Height(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Extent(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Baseline(){}
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
	public  function get_Width(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_WidthIncludingTrailingWhitespace(){}
	/**
	 * @param \Avalonia\Media\DrawingContext $context
	 * @param \Avalonia\Point $origin
	 * @return \System\Void|void
	 */
	public  function Draw($context, $origin){}
	/**
	 * @param \System\Int32|int $textPosition
	 * @return \Avalonia\Rect
	 */
	public  function HitTestTextPosition($textPosition){}
	/**
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $length
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function HitTestTextRange($start, $length){}
	/**
	 * @param \Avalonia\Point& $point
	 * @return \Avalonia\Media\TextHitTestResult
	 */
	public  function HitTestPoint($point){}
	/**
	 * @param \System\Int32|int $charIndex
	 * @param \System\Boolean $trailingEdge
	 * @return \System\Int32|int
	 */
	public  function GetLineIndexFromCharacterIndex($charIndex, $trailingEdge){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextLine $textLine
	 * @param \Avalonia\Media\CharacterHit $characterHit
	 * @param \Avalonia\Point $point
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetHitTestResult($textLine, $characterHit, $point){}
	/**
	 * @param \Avalonia\Media\Typeface $typeface
	 * @param \System\Double|double $fontSize
	 * @param \Avalonia\Media\IBrush $foreground
	 * @param \Avalonia\Media\TextAlignment $textAlignment
	 * @param \Avalonia\Media\TextWrapping $textWrapping
	 * @param \Avalonia\Media\TextDecorationCollection $textDecorations
	 * @param \Avalonia\Media\FlowDirection $flowDirection
	 * @param \System\Double|double $lineHeight
	 * @param \System\Double|double $letterSpacing
	 * @return \Avalonia\Media\TextFormatting\TextParagraphProperties
	 */
	protected static function CreateTextParagraphProperties($typeface, $fontSize, $foreground, $textAlignment, $textWrapping, $textDecorations, $flowDirection, $lineHeight, $letterSpacing){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateTextLines(){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextLine $currentLine
	 * @param \System\Double& $lineStartOfLongestLine
	 * @param \Avalonia\Point& $origin
	 * @param \System\Boolean& $first
	 * @param \System\Double& $accBlackBoxLeft
	 * @param \System\Double& $accBlackBoxTop
	 * @param \System\Double& $accBlackBoxRight
	 * @param \System\Double& $accBlackBoxBottom
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateMetrics($currentLine, $lineStartOfLongestLine, $origin, $first, $accBlackBoxLeft, $accBlackBoxTop, $accBlackBoxRight, $accBlackBoxBottom){}
	/**
	 * @param \System\Double|double $width
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetCollapsingProperties($width){}
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
