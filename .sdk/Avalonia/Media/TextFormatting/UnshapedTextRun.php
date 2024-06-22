<?php
namespace Avalonia\Media\TextFormatting;
final class UnshapedTextRun extends \Avalonia\Media\TextFormatting\TextRun
{

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
	 * @property
	 * @var \System\SByte
	 * @since readonly
	 */
	public $BidiLevel;
	/**
	 * @param \System\ReadOnlyMemory_1 $text [generic: System\Char]
	 * @param \Avalonia\Media\TextFormatting\TextRunProperties $properties
	 * @param \System\SByte $biDiLevel
	 */
	public function __construct($text, $properties, $biDiLevel){}
}