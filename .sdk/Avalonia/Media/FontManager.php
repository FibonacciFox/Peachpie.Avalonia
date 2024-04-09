<?php
namespace Avalonia\Media;
final class FontManager extends \System\Object
{
	/**
	 * @field
	 * @var \System\Uri
	 */
	protected static $SystemFontsKey;
	/**
	 * @field
	 * @var \System\String|string
	 */
	const FontCollectionScheme = 'fonts';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const SystemFontScheme = 'systemfont';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const CompositeFontScheme = 'compositefont';
	/**
	 * @property
	 * @var \Avalonia\Media\FontManager
	 * @since readonly
	 */
	public $Current;
	/**
	 * @property
	 * @var \Avalonia\Media\FontFamily
	 * @since readonly
	 */
	public $DefaultFontFamily;
	/**
	 * @property
	 * @var \Avalonia\Media\Fonts\IFontCollection
	 * @since readonly
	 */
	public $SystemFonts;
	/**
	 * @param \Avalonia\Media\Typeface $typeface
	 * @param \Avalonia\Media\IGlyphTypeface& &$glyphTypeface
	 * @return \System\Boolean|bool
	 */
	public function TryGetGlyphTypeface($typeface, &$glyphTypeface){}
	private function TryGetGlyphTypefaceByKeyAndName($typeface, $key, $familyName, &$glyphTypeface){}
	/**
	 * @param \Avalonia\Media\Fonts\IFontCollection $fontCollection
	 * @return \System\Void|void
	 */
	public function AddFontCollection($fontCollection){}
	/**
	 * @param \System\Uri $key
	 * @return \System\Void|void
	 */
	public function RemoveFontCollection($key){}
	/**
	 * @param \System\Int32|int $codepoint
	 * @param \Avalonia\Media\FontStyle $fontStyle
	 * @param \Avalonia\Media\FontWeight $fontWeight
	 * @param \Avalonia\Media\FontStretch $fontStretch
	 * @param \Avalonia\Media\FontFamily $fontFamily
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \Avalonia\Media\Typeface& &$typeface
	 * @return \System\Boolean|bool
	 */
	public function TryMatchCharacter($codepoint, $fontStyle, $fontWeight, $fontStretch, $fontFamily, $culture, &$typeface){}
	private function TryGetFontCollection($source, &$fontCollection){}
	private function GetDefaultFontFamilyName($options){}
	/**
	 * @param \Avalonia\Platform\IFontManagerImpl $platformImpl
	 */
	public function __construct($platformImpl){}
}