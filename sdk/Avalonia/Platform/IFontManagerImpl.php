<?php
namespace Avalonia\Platform;
/**
 */
interface IFontManagerImpl
{
	/**
	 */
	public function GetDefaultFontFamilyName();
	/**
	 * @param \System\Boolean $checkForUpdates
	 */
	public function GetInstalledFontFamilyNames($checkForUpdates);
	/**
	 * @param \System\Int32|int $codepoint
	 * @param \Avalonia\Media\FontStyle $fontStyle
	 * @param \Avalonia\Media\FontWeight $fontWeight
	 * @param \Avalonia\Media\FontStretch $fontStretch
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \Avalonia\Media\Typeface& $typeface
	 */
	public function TryMatchCharacter($codepoint, $fontStyle, $fontWeight, $fontStretch, $culture, $typeface);
}
