<?php
namespace Avalonia\Media\TextFormatting;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ShapedBufferOverride {
	/**
	 * @param \System\String|string $text
	 * @param \Avalonia\Media\TextFormatting\TextRunProperties $textRunProperties
	 */
	#[MethodOverride]public function __construct_1 ($text, $textRunProperties){}
	/**
	 * @param \System\ReadOnlyMemory_1 $text [generic: System\Char]
	 * @param \Avalonia\Media\TextFormatting\TextRunProperties $textRunProperties
	 */
	#[MethodOverride]public function __construct_2 ($text, $textRunProperties){}
}
class TextCharacters extends \Avalonia\Media\TextFormatting\TextRun
{
	use ShapedBufferOverride;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Length;
	/**
	 * @property
	 * @var \System\ReadOnlyMemory_1[System\Char]
	 * @since readonly
	 */
	public $Text;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\TextRunProperties
	 * @since readonly
	 */
	public $Properties;
	/**
	 * @param \System\ReadOnlyMemory_1 $text [generic: System\Char]
	 * @param \System\SByte $biDiLevel
	 * @param \Avalonia\Media\FontManager $fontManager
	 * @param \Avalonia\Media\TextFormatting\TextRunProperties& $previousProperties
	 * @param \Avalonia\Media\TextFormatting\FormattingObjectPool+RentedList_1 $results [generic: Avalonia\Media\TextFormatting\TextRun]
	 * @return \System\Void|void
	 */
	protected function GetShapeableCharacters($text, $biDiLevel, $fontManager, $previousProperties, $results){}
	private static function CreateShapeableRun($text, $defaultProperties, $biDiLevel, $fontManager, $previousProperties){}
	/**
	 * @param \System\ReadOnlySpan_1 $text [generic: System\Char]
	 * @param \Avalonia\Media\IGlyphTypeface $glyphTypeface
	 * @param \Avalonia\Media\IGlyphTypeface $defaultGlyphTypeface
	 * @param \System\Int32& &$length
	 * @return \System\Boolean|bool
	 */
	protected static function TryGetShapeableLength($text, $glyphTypeface, $defaultGlyphTypeface, &$length){}
	/**
	 * @uses TextCharactersOverride::__construct_1 <br>public , args: ($text, $textRunProperties)<br>
	 * @uses TextCharactersOverride::__construct_2 <br>public , args: ($text, $textRunProperties)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}