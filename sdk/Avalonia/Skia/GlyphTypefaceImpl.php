<?php
namespace Avalonia\Skia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GlyphTypefaceImplMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Dispose_1($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2(){}
}
/**
 */
class GlyphTypefaceImpl extends \System\Object implements 
	\Avalonia\Media\IGlyphTypeface,
	\System\IDisposable
{
	/**
	 * @var \HarfBuzzSharp\Face
	 * @property
	 */
	public readonly $Face;
	/**
	 * @var \HarfBuzzSharp\Font
	 * @property
	 */
	public readonly $Font;
	/**
	 * @var \SkiaSharp\SKFont
	 * @property
	 */
	public readonly $SKFont;
	/**
	 * @var \Avalonia\Media\FontSimulations
	 * @property
	 */
	public readonly $FontSimulations;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $ReplacementCodepoint;
	/**
	 * @var \Avalonia\Media\FontMetrics
	 * @property
	 */
	public readonly $Metrics;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $GlyphCount;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $FamilyName;
	/**
	 * @var \Avalonia\Media\FontWeight
	 * @property
	 */
	public readonly $Weight;
	/**
	 * @var \Avalonia\Media\FontStyle
	 * @property
	 */
	public readonly $Style;
	/**
	 * @var \Avalonia\Media\FontStretch
	 * @property
	 */
	public readonly $Stretch;
	/**
	 * @return \HarfBuzzSharp\Face
	 */
	public  function get_Face(){}
	/**
	 * @return \HarfBuzzSharp\Font
	 */
	public  function get_Font(){}
	/**
	 * @return \SkiaSharp\SKFont
	 */
	public  function get_SKFont(){}
	/**
	 * @return \Avalonia\Media\FontSimulations
	 */
	public  function get_FontSimulations(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_ReplacementCodepoint(){}
	/**
	 * @return \Avalonia\Media\FontMetrics
	 */
	public  function get_Metrics(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_GlyphCount(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_FamilyName(){}
	/**
	 * @return \Avalonia\Media\FontWeight
	 */
	public  function get_Weight(){}
	/**
	 * @return \Avalonia\Media\FontStyle
	 */
	public  function get_Style(){}
	/**
	 * @return \Avalonia\Media\FontStretch
	 */
	public  function get_Stretch(){}
	/**
	 * @param \System\UInt16 $glyph
	 * @param \Avalonia\Media\GlyphMetrics& $metrics
	 * @return \System\Boolean
	 */
	public  function TryGetGlyphMetrics($glyph, $metrics){}
	/**
	 * @param \System\UInt32 $codepoint
	 * @return \System\UInt16
	 */
	public  function GetGlyph($codepoint){}
	/**
	 * @param \System\UInt32 $codepoint
	 * @param \System\UInt16& $glyph
	 * @return \System\Boolean
	 */
	public  function TryGetGlyph($codepoint, $glyph){}
	/**
	 * @param \System\ReadOnlySpan_1 $codepoints
	 * @return \System\UInt16[]
	 */
	public  function GetGlyphs($codepoints){}
	/**
	 * @param \System\UInt16 $glyph
	 * @return \System\Int32|int
	 */
	public  function GetGlyphAdvance($glyph){}
	/**
	 * @param \System\ReadOnlySpan_1 $glyphs
	 * @return \System\Int32[]
	 */
	public  function GetGlyphAdvances($glyphs){}
	/**
	 * @param \HarfBuzzSharp\Face $face
	 * @param \HarfBuzzSharp\Tag $tag
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetTable($face, $tag){}
	/**
	 * @uses GlyphTypefaceImplMethodsOverride::Dispose_1 ($disposing)
	 * @uses GlyphTypefaceImplMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @param \System\UInt32 $tag
	 * @param \System\Byte[]& $table
	 * @return \System\Boolean
	 */
	public  function TryGetTable($tag, $table){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
