<?php
namespace Avalonia\Media\Fonts;
/**
 */
interface IFontCollection
{
	/**
	 */
	public function get_Key();
	/**
	 * @param \Avalonia\Platform\IFontManagerImpl $fontManager
	 */
	public function Initialize($fontManager);
	/**
	 * @param \System\String|string $familyName
	 * @param \Avalonia\Media\FontStyle $style
	 * @param \Avalonia\Media\FontWeight $weight
	 * @param \Avalonia\Media\FontStretch $stretch
	 * @param \Avalonia\Media\IGlyphTypeface& $glyphTypeface
	 */
	public function TryGetGlyphTypeface($familyName, $style, $weight, $stretch, $glyphTypeface);
	/**
	 * @param \System\Int32|int $codepoint
	 * @param \Avalonia\Media\FontStyle $fontStyle
	 * @param \Avalonia\Media\FontWeight $fontWeight
	 * @param \Avalonia\Media\FontStretch $fontStretch
	 * @param \System\String|string $familyName
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \Avalonia\Media\Typeface& $typeface
	 */
	public function TryMatchCharacter($codepoint, $fontStyle, $fontWeight, $fontStretch, $familyName, $culture, $typeface);
}
