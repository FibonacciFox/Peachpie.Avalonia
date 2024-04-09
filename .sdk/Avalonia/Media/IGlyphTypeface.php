<?php
namespace Avalonia\Media;
interface IGlyphTypeface
{

	/**
	 * @param \System\UInt16 $glyph
	 * @param \Avalonia\Media\GlyphMetrics& &$metrics
	 * @return \System\Boolean|bool
	 */
	public function TryGetGlyphMetrics($glyph, &$metrics);
	/**
	 * @param \System\UInt32 $codepoint
	 * @return \System\UInt16
	 */
	public function GetGlyph($codepoint);
	/**
	 * @param \System\UInt32 $codepoint
	 * @param \System\UInt16& &$glyph
	 * @return \System\Boolean|bool
	 */
	public function TryGetGlyph($codepoint, &$glyph);
	/**
	 * @param \System\ReadOnlySpan_1 $codepoints [generic: System\UInt32]
	 * @return \System\UInt16[]
	 */
	public function GetGlyphs($codepoints);
	/**
	 * @param \System\UInt16 $glyph
	 * @return \System\Int32|int
	 */
	public function GetGlyphAdvance($glyph);
	/**
	 * @param \System\ReadOnlySpan_1 $glyphs [generic: System\UInt16]
	 * @return \System\Int32[]|array
	 */
	public function GetGlyphAdvances($glyphs);
	/**
	 * @param \System\UInt32 $tag
	 * @param \System\Byte &$table
	 * @return \System\Boolean|bool
	 */
	public function TryGetTable($tag, &$table);
}