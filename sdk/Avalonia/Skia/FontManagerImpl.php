<?php
namespace Avalonia\Skia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FontManagerImplMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryCreateGlyphTypeface_1($familyName, $style, $weight, $stretch, $glyphTypeface){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryCreateGlyphTypeface_2($stream, $glyphTypeface){}
}
/**
 */
class FontManagerImpl extends \System\Object implements 
	\Avalonia\Platform\IFontManagerImpl
{
	/**
	 * @return \System\String|string
	 */
	public  function GetDefaultFontFamilyName(){}
	/**
	 * @param \System\Boolean $checkForUpdates
	 * @return \System\String[]
	 */
	public  function GetInstalledFontFamilyNames($checkForUpdates){}
	/**
	 * @param \System\Int32|int $codepoint
	 * @param \Avalonia\Media\FontStyle $fontStyle
	 * @param \Avalonia\Media\FontWeight $fontWeight
	 * @param \Avalonia\Media\FontStretch $fontStretch
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \Avalonia\Media\Typeface& $fontKey
	 * @return \System\Boolean
	 */
	public  function TryMatchCharacter($codepoint, $fontStyle, $fontWeight, $fontStretch, $culture, $fontKey){}
	/**
	 * @uses FontManagerImplMethodsOverride::TryCreateGlyphTypeface_1 ($familyName, $style, $weight, $stretch, $glyphTypeface)
	 * @uses FontManagerImplMethodsOverride::TryCreateGlyphTypeface_2 ($stream, $glyphTypeface)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TryCreateGlyphTypeface(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
