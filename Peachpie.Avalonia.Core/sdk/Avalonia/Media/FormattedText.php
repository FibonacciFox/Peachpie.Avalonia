<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FormattedTextMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetForegroundBrush_1($foregroundBrush){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetForegroundBrush_2($foregroundBrush, $startIndex, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetFontFamily_1($fontFamily){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetFontFamily_2($fontFamily, $startIndex, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetFontFamily_3($fontFamily){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetFontFamily_4($fontFamily, $startIndex, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetFontSize_1($emSize){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetFontSize_2($emSize, $startIndex, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCulture_1($culture){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCulture_2($culture, $startIndex, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetFontWeight_1($weight){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetFontWeight_2($weight, $startIndex, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetFontStyle_1($style){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetFontStyle_2($style, $startIndex, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetFontTypeface_1($typeface){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetFontTypeface_2($typeface, $startIndex, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetTextDecorations_1($textDecorations){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetTextDecorations_2($textDecorations, $startIndex, $count){}
	/**
	 * @return \Avalonia\Media\Geometry
	 */
	#[MethodOverride] public  function BuildHighlightGeometry_1($origin){}
	/**
	 * @return \Avalonia\Media\Geometry
	 */
	#[MethodOverride] public  function BuildHighlightGeometry_2($origin, $startIndex, $count){}
}
/**
 */
class FormattedText extends \System\Object
{
	/**
	 * @param \System\Double|double $emSize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidateFontSize($emSize){}
	/**
	 * @param \Avalonia\Media\FlowDirection $flowDirection
	 * @param \System\String|string $parameterName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidateFlowDirection($flowDirection, $parameterName){}
	/**
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ValidateRange($startIndex, $count){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InvalidateMetrics(){}
	/**
	 * @uses FormattedTextMethodsOverride::SetForegroundBrush_1 ($foregroundBrush)
	 * @uses FormattedTextMethodsOverride::SetForegroundBrush_2 ($foregroundBrush, $startIndex, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetForegroundBrush(mixed ...$args){}
	/**
	 * @uses FormattedTextMethodsOverride::SetFontFamily_1 ($fontFamily)
	 * @uses FormattedTextMethodsOverride::SetFontFamily_2 ($fontFamily, $startIndex, $count)
	 * @uses FormattedTextMethodsOverride::SetFontFamily_3 ($fontFamily)
	 * @uses FormattedTextMethodsOverride::SetFontFamily_4 ($fontFamily, $startIndex, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetFontFamily(mixed ...$args){}
	/**
	 * @uses FormattedTextMethodsOverride::SetFontSize_1 ($emSize)
	 * @uses FormattedTextMethodsOverride::SetFontSize_2 ($emSize, $startIndex, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetFontSize(mixed ...$args){}
	/**
	 * @uses FormattedTextMethodsOverride::SetCulture_1 ($culture)
	 * @uses FormattedTextMethodsOverride::SetCulture_2 ($culture, $startIndex, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCulture(mixed ...$args){}
	/**
	 * @uses FormattedTextMethodsOverride::SetFontWeight_1 ($weight)
	 * @uses FormattedTextMethodsOverride::SetFontWeight_2 ($weight, $startIndex, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetFontWeight(mixed ...$args){}
	/**
	 * @uses FormattedTextMethodsOverride::SetFontStyle_1 ($style)
	 * @uses FormattedTextMethodsOverride::SetFontStyle_2 ($style, $startIndex, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetFontStyle(mixed ...$args){}
	/**
	 * @uses FormattedTextMethodsOverride::SetFontTypeface_1 ($typeface)
	 * @uses FormattedTextMethodsOverride::SetFontTypeface_2 ($typeface, $startIndex, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetFontTypeface(mixed ...$args){}
	/**
	 * @uses FormattedTextMethodsOverride::SetTextDecorations_1 ($textDecorations)
	 * @uses FormattedTextMethodsOverride::SetTextDecorations_2 ($textDecorations, $startIndex, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetTextDecorations(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetEnumerator(){}
	/**
	 * @param \Avalonia\Point& $lineOrigin
	 * @param \Avalonia\Media\TextFormatting\TextLine $currentLine
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AdvanceLineOrigin($lineOrigin, $currentLine){}
	/**
	 * @param \Avalonia\Media\FlowDirection $value
	 * @return \System\Void|void
	 */
	public  function set_FlowDirection($value){}
	/**
	 * @return \Avalonia\Media\FlowDirection
	 */
	public  function get_FlowDirection(){}
	/**
	 * @param \Avalonia\Media\TextAlignment $value
	 * @return \System\Void|void
	 */
	public  function set_TextAlignment($value){}
	/**
	 * @return \Avalonia\Media\TextAlignment
	 */
	public  function get_TextAlignment(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_LineHeight($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_LineHeight(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_MaxTextWidth($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_MaxTextWidth(){}
	/**
	 * @param \System\Double[] $maxTextWidths
	 * @return \System\Void|void
	 */
	public  function SetMaxTextWidths($maxTextWidths){}
	/**
	 * @return \System\Double[]
	 */
	public  function GetMaxTextWidths(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_MaxTextHeight($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_MaxTextHeight(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_MaxLineCount($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MaxLineCount(){}
	/**
	 * @param \Avalonia\Media\TextTrimming $value
	 * @return \System\Void|void
	 */
	public  function set_Trimming($value){}
	/**
	 * @return \Avalonia\Media\TextTrimming
	 */
	public  function get_Trimming(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Metrics(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_BlackBoxMetrics(){}
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
	 * @param \Avalonia\Point $origin
	 * @return \Avalonia\Media\Geometry
	 */
	public  function BuildGeometry($origin){}
	/**
	 * @uses FormattedTextMethodsOverride::BuildHighlightGeometry_1 ($origin)
	 * @uses FormattedTextMethodsOverride::BuildHighlightGeometry_2 ($origin, $startIndex, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function BuildHighlightGeometry(mixed ...$args){}
	/**
	 * @param \Avalonia\Media\DrawingContext $drawingContext
	 * @param \Avalonia\Point $origin
	 * @return \System\Void|void
	 */
	protected  function Draw($drawingContext, $origin){}
	/**
	 * @param \Avalonia\Media\Drawing $drawing
	 * @param \Avalonia\Media\Transform& $transform
	 * @param \Avalonia\Media\GeometryGroup& $accumulatedGeometry
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CombineGeometryRecursive($drawing, $transform, $accumulatedGeometry){}
	/**
	 * @param \Avalonia\Media\DrawingContext $drawingContext
	 * @param \Avalonia\Point $drawingOffset
	 * @param \System\Boolean $getBlackBoxMetrics
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DrawAndCalculateMetrics($drawingContext, $drawingOffset, $getBlackBoxMetrics){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
