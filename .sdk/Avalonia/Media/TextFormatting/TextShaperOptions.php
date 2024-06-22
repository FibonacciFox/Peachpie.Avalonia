<?php
namespace Avalonia\Media\TextFormatting;
final class TextShaperOptions extends \System\ValueType implements
	\System\IEquatable_1
{

	/**
	 * @property
	 * @var \Avalonia\Media\IGlyphTypeface
	 * @since readonly
	 */
	public $Typeface;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $FontRenderingEmSize;
	/**
	 * @property
	 * @var \System\SByte
	 * @since readonly
	 */
	public $BidiLevel;
	/**
	 * @property
	 * @var \System\Globalization\CultureInfo
	 * @since readonly
	 */
	public $Culture;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $IncrementalTabWidth;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $LetterSpacing;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextShaperOptions $left
	 * @param \Avalonia\Media\TextFormatting\TextShaperOptions $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextShaperOptions $left
	 * @param \Avalonia\Media\TextFormatting\TextShaperOptions $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Media\IGlyphTypeface $typeface
	 * @param \System\Double|double $fontRenderingEmSize
	 * @param \System\SByte $bidiLevel
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Double|double $incrementalTabWidth
	 * @param \System\Double|double $letterSpacing
	 */
	public function __construct($typeface, $fontRenderingEmSize, $bidiLevel, $culture, $incrementalTabWidth, $letterSpacing){}
}