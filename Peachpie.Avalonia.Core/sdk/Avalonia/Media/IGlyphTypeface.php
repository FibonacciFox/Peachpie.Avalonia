<?php
namespace Avalonia\Media;
/**
 */
interface IGlyphTypeface
{
	/**
	 */
	public function get_FamilyName();
	/**
	 */
	public function get_Weight();
	/**
	 */
	public function get_Style();
	/**
	 */
	public function get_Stretch();
	/**
	 */
	public function get_GlyphCount();
	/**
	 */
	public function get_Metrics();
	/**
	 */
	public function get_FontSimulations();
	/**
	 * @param \System\UInt16 $glyph
	 * @param \Avalonia\Media\GlyphMetrics& $metrics
	 */
	public function TryGetGlyphMetrics($glyph, $metrics);
	/**
	 * @param \System\UInt32 $codepoint
	 */
	public function GetGlyph($codepoint);
	/**
	 * @param \System\UInt32 $codepoint
	 * @param \System\UInt16& $glyph
	 */
	public function TryGetGlyph($codepoint, $glyph);
	/**
	 * @param \System\ReadOnlySpan_1 $codepoints
	 */
	public function GetGlyphs($codepoints);
	/**
	 * @param \System\UInt16 $glyph
	 */
	public function GetGlyphAdvance($glyph);
	/**
	 * @param \System\ReadOnlySpan_1 $glyphs
	 */
	public function GetGlyphAdvances($glyphs);
	/**
	 * @param \System\UInt32 $tag
	 * @param \System\Byte[]& $table
	 */
	public function TryGetTable($tag, $table);
}
