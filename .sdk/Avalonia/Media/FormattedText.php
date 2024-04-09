<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FormattedTextOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Media\IBrush $foregroundBrush
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetForegroundBrush_1 ($foregroundBrush){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\IBrush $foregroundBrush
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetForegroundBrush_2 ($foregroundBrush, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \System\String|string $fontFamily
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetFontFamily_1 ($fontFamily){}
	/**
	 * @deprecated
	 * @param \System\String|string $fontFamily
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetFontFamily_2 ($fontFamily, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\FontFamily $fontFamily
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetFontFamily_3 ($fontFamily){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\FontFamily $fontFamily
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetFontFamily_4 ($fontFamily, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \System\Double|double $emSize
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetFontSize_1 ($emSize){}
	/**
	 * @deprecated
	 * @param \System\Double|double $emSize
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetFontSize_2 ($emSize, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetCulture_1 ($culture){}
	/**
	 * @deprecated
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetCulture_2 ($culture, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\FontWeight $weight
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetFontWeight_1 ($weight){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\FontWeight $weight
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetFontWeight_2 ($weight, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\FontStyle $style
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetFontStyle_1 ($style){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\FontStyle $style
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetFontStyle_2 ($style, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\Typeface $typeface
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetFontTypeface_1 ($typeface){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\Typeface $typeface
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetFontTypeface_2 ($typeface, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\TextDecorationCollection $textDecorations
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetTextDecorations_1 ($textDecorations){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\TextDecorationCollection $textDecorations
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetTextDecorations_2 ($textDecorations, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \Avalonia\Point $origin
	 * @return \Avalonia\Media\Geometry
	 */
	#[MethodOverride]public function BuildHighlightGeometry_1 ($origin){}
	/**
	 * @deprecated
	 * @param \Avalonia\Point $origin
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \Avalonia\Media\Geometry
	 */
	#[MethodOverride]public function BuildHighlightGeometry_2 ($origin, $startIndex, $count){}
}
class FormattedText extends \System\Object
{
	use FormattedTextOverride;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	const DefaultRealToIdeal = '300';
	/**
	 * @field
	 * @var \System\Double|double
	 */
	const DefaultIdealToReal = '0,0033333333333333335';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const IdealInfiniteWidth = '1073741822';
	/**
	 * @field
	 * @var \System\Double|double
	 */
	const RealInfiniteWidth = '3579139,4066666667';
	/**
	 * @field
	 * @var \System\Double|double
	 */
	const GreatestMultiplierOfEm = '100';
	/**
	 * @property
	 * @var \Avalonia\Media\FlowDirection
	 */
	public $FlowDirection;
	/**
	 * @property
	 * @var \Avalonia\Media\TextAlignment
	 */
	public $TextAlignment;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $LineHeight;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $MaxTextWidth;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $MaxTextHeight;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $MaxLineCount;
	/**
	 * @property
	 * @var \Avalonia\Media\TextTrimming
	 */
	public $Trimming;
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
	private static function ValidateFontSize($emSize){}
	private static function ValidateFlowDirection($flowDirection, $parameterName){}
	private function ValidateRange($startIndex, $count){}
	private function InvalidateMetrics(){}
	/**
	 * @uses FormattedTextOverride::SetForegroundBrush_1 <br>public , args: ($foregroundBrush)<br>
	 * @uses FormattedTextOverride::SetForegroundBrush_2 <br>public , args: ($foregroundBrush, $startIndex, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetForegroundBrush (\override ...$args){}
	/**
	 * @uses FormattedTextOverride::SetFontFamily_1 <br>public , args: ($fontFamily)<br>
	 * @uses FormattedTextOverride::SetFontFamily_2 <br>public , args: ($fontFamily, $startIndex, $count)<br>
	 * @uses FormattedTextOverride::SetFontFamily_3 <br>public , args: ($fontFamily)<br>
	 * @uses FormattedTextOverride::SetFontFamily_4 <br>public , args: ($fontFamily, $startIndex, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetFontFamily (\override ...$args){}
	/**
	 * @uses FormattedTextOverride::SetFontSize_1 <br>public , args: ($emSize)<br>
	 * @uses FormattedTextOverride::SetFontSize_2 <br>public , args: ($emSize, $startIndex, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetFontSize (\override ...$args){}
	/**
	 * @uses FormattedTextOverride::SetCulture_1 <br>public , args: ($culture)<br>
	 * @uses FormattedTextOverride::SetCulture_2 <br>public , args: ($culture, $startIndex, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetCulture (\override ...$args){}
	/**
	 * @uses FormattedTextOverride::SetFontWeight_1 <br>public , args: ($weight)<br>
	 * @uses FormattedTextOverride::SetFontWeight_2 <br>public , args: ($weight, $startIndex, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetFontWeight (\override ...$args){}
	/**
	 * @uses FormattedTextOverride::SetFontStyle_1 <br>public , args: ($style)<br>
	 * @uses FormattedTextOverride::SetFontStyle_2 <br>public , args: ($style, $startIndex, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetFontStyle (\override ...$args){}
	/**
	 * @uses FormattedTextOverride::SetFontTypeface_1 <br>public , args: ($typeface)<br>
	 * @uses FormattedTextOverride::SetFontTypeface_2 <br>public , args: ($typeface, $startIndex, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetFontTypeface (\override ...$args){}
	/**
	 * @uses FormattedTextOverride::SetTextDecorations_1 <br>public , args: ($textDecorations)<br>
	 * @uses FormattedTextOverride::SetTextDecorations_2 <br>public , args: ($textDecorations, $startIndex, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetTextDecorations (\override ...$args){}
	private function GetEnumerator(){}
	private function AdvanceLineOrigin($lineOrigin, $currentLine){}
	/**
	 * @param \System\Double $maxTextWidths
	 * @return \System\Void|void
	 */
	public function SetMaxTextWidths($maxTextWidths){}
	/**
	 * @return \System\Double[]|array
	 */
	public function GetMaxTextWidths(){}
	/**
	 * @param \Avalonia\Point $origin
	 * @return \Avalonia\Media\Geometry
	 */
	public function BuildGeometry($origin){}
	/**
	 * @uses FormattedTextOverride::BuildHighlightGeometry_1 <br>public , args: ($origin)<br>
	 * @uses FormattedTextOverride::BuildHighlightGeometry_2 <br>public , args: ($origin, $startIndex, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Media\Geometry|mixed|\override
	 */
	#[MethodOverridePublic]function BuildHighlightGeometry (\override ...$args){}
	/**
	 * @param \Avalonia\Media\DrawingContext $drawingContext
	 * @param \Avalonia\Point $origin
	 * @return \System\Void|void
	 */
	protected function Draw($drawingContext, $origin){}
	private function CombineGeometryRecursive($drawing, $transform, $accumulatedGeometry){}
	private function DrawAndCalculateMetrics($drawingContext, $drawingOffset, $getBlackBoxMetrics){}
	/**
	 * @param \System\String|string $textToFormat
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \Avalonia\Media\FlowDirection $flowDirection
	 * @param \Avalonia\Media\Typeface $typeface
	 * @param \System\Double|double $emSize
	 * @param \Avalonia\Media\IBrush $foreground
	 */
	public function __construct($textToFormat, $culture, $flowDirection, $typeface, $emSize, $foreground){}
}