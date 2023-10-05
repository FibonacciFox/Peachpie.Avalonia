<?php
namespace Avalonia\Media;
/**
 */
class FontManager extends \System\Object
{
	/**
	 * @var \System\Uri
	 * @field
	 */
	protected $SystemFontsKey;
	/**
	 * @var \System\String
	 * @field
	 */
	public $FontCollectionScheme;
	/**
	 * @var \Avalonia\Media\FontManager
	 * @property
	 */
	public readonly $Current;
	/**
	 * @var \Avalonia\Media\FontFamily
	 * @property
	 */
	public readonly $DefaultFontFamily;
	/**
	 * @var \Avalonia\Media\Fonts\IFontCollection
	 * @property
	 */
	public readonly $SystemFonts;
	/**
	 * @return \Avalonia\Media\FontManager
	 */
	public static function get_Current(){}
	/**
	 * @return \Avalonia\Media\FontFamily
	 */
	public  function get_DefaultFontFamily(){}
	/**
	 * @return \Avalonia\Media\Fonts\IFontCollection
	 */
	public  function get_SystemFonts(){}
	/**
	 * @return \Avalonia\Platform\IFontManagerImpl
	 */
	protected  function get_PlatformImpl(){}
	/**
	 * @param \Avalonia\Media\Typeface $typeface
	 * @param \Avalonia\Media\IGlyphTypeface& $glyphTypeface
	 * @return \System\Boolean
	 */
	public  function TryGetGlyphTypeface($typeface, $glyphTypeface){}
	/**
	 * @param \Avalonia\Media\Fonts\IFontCollection $fontCollection
	 * @return \System\Void|void
	 */
	public  function AddFontCollection($fontCollection){}
	/**
	 * @param \System\Uri $key
	 * @return \System\Void|void
	 */
	public  function RemoveFontCollection($key){}
	/**
	 * @param \System\Int32|int $codepoint
	 * @param \Avalonia\Media\FontStyle $fontStyle
	 * @param \Avalonia\Media\FontWeight $fontWeight
	 * @param \Avalonia\Media\FontStretch $fontStretch
	 * @param \Avalonia\Media\FontFamily $fontFamily
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \Avalonia\Media\Typeface& $typeface
	 * @return \System\Boolean
	 */
	public  function TryMatchCharacter($codepoint, $fontStyle, $fontWeight, $fontStretch, $fontFamily, $culture, $typeface){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
