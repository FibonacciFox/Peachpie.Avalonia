<?php
namespace Avalonia\Platform;
interface IFontManagerImpl
{


	/**
	 * @return \System\String|string
	 */
	public function GetDefaultFontFamilyName();
	/**
	 * @param \System\Boolean|bool $checkForUpdates
	 * @return \System\String[]|array
	 */
	public function GetInstalledFontFamilyNames($checkForUpdates);
	/**
	 * @param \System\Int32|int $codepoint
	 * @param \Avalonia\Media\FontStyle $fontStyle
	 * @param \Avalonia\Media\FontWeight $fontWeight
	 * @param \Avalonia\Media\FontStretch $fontStretch
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \Avalonia\Media\Typeface& &$typeface
	 * @return \System\Boolean|bool
	 */
	public function TryMatchCharacter($codepoint, $fontStyle, $fontWeight, $fontStretch, $culture, &$typeface);
	/**
	 * @param \System\String|string $familyName
	 * @param \Avalonia\Media\FontStyle $style
	 * @param \Avalonia\Media\FontWeight $weight
	 * @param \Avalonia\Media\FontStretch $stretch
	 * @param \Avalonia\Media\IGlyphTypeface& &$glyphTypeface
	 * @return \System\Boolean|bool
	 */
	public function TryCreateGlyphTypeface($familyName, $style, $weight, $stretch, &$glyphTypeface);
	/**
	 * @param \System\IO\Stream $stream
	 * @param \Avalonia\Media\IGlyphTypeface& &$glyphTypeface
	 * @return \System\Boolean|bool
	 */
	public function TryCreateGlyphTypeface($stream, &$glyphTypeface);
}