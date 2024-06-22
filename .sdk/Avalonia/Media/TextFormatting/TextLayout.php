<?php
namespace Avalonia\Media\TextFormatting;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ShapedBufferOverride {
	/**
	 * @param \System\String|string $text
	 * @param \Avalonia\Media\Typeface $typeface
	 * @param \System\Double|double $fontSize
	 * @param \Avalonia\Media\IBrush $foreground
	 * @param \Avalonia\Media\TextAlignment $textAlignment
	 * @param \Avalonia\Media\TextWrapping $textWrapping
	 * @param \Avalonia\Media\TextTrimming $textTrimming
	 * @param \Avalonia\Media\TextDecorationCollection $textDecorations
	 * @param \Avalonia\Media\FlowDirection $flowDirection
	 * @param \System\Double|double $maxWidth
	 * @param \System\Double|double $maxHeight
	 * @param \System\Double|double $lineHeight
	 * @param \System\Double|double $letterSpacing
	 * @param \System\Int32|int $maxLines
	 * @param \System\Collections\Generic\IReadOnlyList_1 $textStyleOverrides [generic: Avalonia\Utilities\ValueSpan_1[Avalonia\Media\TextFormatting\TextRunProperties]
	 */
	#[MethodOverride]public function __construct_1 ($text, $typeface, $fontSize, $foreground, $textAlignment, $textWrapping, $textTrimming, $textDecorations, $flowDirection, $maxWidth, $maxHeight, $lineHeight, $letterSpacing, $maxLines, $textStyleOverrides){}
	/**
	 * @param \Avalonia\Media\TextFormatting\ITextSource $textSource
	 * @param \Avalonia\Media\TextFormatting\TextParagraphProperties $paragraphProperties
	 * @param \Avalonia\Media\TextTrimming $textTrimming
	 * @param \System\Double|double $maxWidth
	 * @param \System\Double|double $maxHeight
	 * @param \System\Int32|int $maxLines
	 */
	#[MethodOverride]public function __construct_2 ($textSource, $paragraphProperties, $textTrimming, $maxWidth, $maxHeight, $maxLines){}
}
class TextLayout extends \System\Object implements
	\System\IDisposable
{
	use ShapedBufferOverride;

	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $LineHeight;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $MaxWidth;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $MaxHeight;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MaxLines;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $LetterSpacing;
	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Media\TextFormatting\TextLine]
	 * @since readonly
	 */
	public $TextLines;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Height;
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
	public $Baseline;
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
	public $Width;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $WidthIncludingTrailingWhitespace;
	/**
	 * @param \Avalonia\Media\DrawingContext $context
	 * @param \Avalonia\Point $origin
	 * @return \System\Void|void
	 */
	public function Draw($context, $origin){}
	/**
	 * @param \System\Int32|int $textPosition
	 * @return \Avalonia\Rect
	 */
	public function HitTestTextPosition($textPosition){}
	/**
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $length
	 * @return \System\Collections\Generic\IEnumerable_1[Avalonia\Rect]
	 */
	public function HitTestTextRange($start, $length){}
	/**
	 * @param \Avalonia\Point& &$point
	 * @return \Avalonia\Media\TextHitTestResult
	 */
	public function HitTestPoint(&$point){}
	/**
	 * @param \System\Int32|int $charIndex
	 * @param \System\Boolean|bool $trailingEdge
	 * @return \System\Int32|int
	 */
	public function GetLineIndexFromCharacterIndex($charIndex, $trailingEdge){}
	private function GetHitTestResult($textLine, $characterHit, $point){}
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
	private function CreateTextLines(){}
	private function UpdateMetrics($currentLine, $lineStartOfLongestLine, $origin, $first, $accBlackBoxLeft, $accBlackBoxTop, $accBlackBoxRight, $accBlackBoxBottom){}
	private function GetCollapsingProperties($width){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @uses TextLayoutOverride::__construct_1 <br>public , args: ($text, $typeface, $fontSize, $foreground, $textAlignment, $textWrapping, $textTrimming, $textDecorations, $flowDirection, $maxWidth, $maxHeight, $lineHeight, $letterSpacing, $maxLines, $textStyleOverrides)<br>
	 * @uses TextLayoutOverride::__construct_2 <br>public , args: ($textSource, $paragraphProperties, $textTrimming, $maxWidth, $maxHeight, $maxLines)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}