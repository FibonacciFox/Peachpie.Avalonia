<?php
namespace Avalonia\Media\TextFormatting;
/**
 */
class TextCharacters extends \Avalonia\Media\TextFormatting\TextRun
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Length;
	/**
	 * @var \System\ReadOnlyMemory_1[System\Char]
	 * @property
	 */
	public readonly $Text;
	/**
	 * @var \Avalonia\Media\TextFormatting\TextRunProperties
	 * @property
	 */
	public readonly $Properties;
	/**
	 * @param \System\ReadOnlyMemory_1 $text
	 * @param \System\SByte $biDiLevel
	 * @param \Avalonia\Media\FontManager $fontManager
	 * @param \Avalonia\Media\TextFormatting\TextRunProperties& $previousProperties
	 * @param \Avalonia\Media\TextFormatting\RentedList_1 $results
	 * @return \System\Void|void
	 */
	protected  function GetShapeableCharacters($text, $biDiLevel, $fontManager, $previousProperties, $results){}
	/**
	 * @param \System\ReadOnlyMemory_1 $text
	 * @param \Avalonia\Media\TextFormatting\TextRunProperties $defaultProperties
	 * @param \System\SByte $biDiLevel
	 * @param \Avalonia\Media\FontManager $fontManager
	 * @param \Avalonia\Media\TextFormatting\TextRunProperties& $previousProperties
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateShapeableRun($text, $defaultProperties, $biDiLevel, $fontManager, $previousProperties){}
	/**
	 * @param \System\ReadOnlySpan_1 $text
	 * @param \Avalonia\Media\IGlyphTypeface $glyphTypeface
	 * @param \Avalonia\Media\IGlyphTypeface $defaultGlyphTypeface
	 * @param \System\Int32& $length
	 * @return \System\Boolean
	 */
	protected static function TryGetShapeableLength($text, $glyphTypeface, $defaultGlyphTypeface, $length){}
}
