<?php
namespace Avalonia\Media\TextFormatting;
final class TextMetrics extends \System\ValueType implements
	\System\IEquatable_1
{
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $FontRenderingEmSize;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Ascent;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Descent;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $LineGap;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $LineHeight;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $UnderlineThickness;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $UnderlinePosition;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $StrikethroughThickness;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $StrikethroughPosition;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextMetrics $left
	 * @param \Avalonia\Media\TextFormatting\TextMetrics $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextMetrics $left
	 * @param \Avalonia\Media\TextFormatting\TextMetrics $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Media\IGlyphTypeface $glyphTypeface
	 * @param \System\Double|double $fontRenderingEmSize
	 */
	public function __construct($glyphTypeface, $fontRenderingEmSize){}
}