<?php
namespace Avalonia\Media\TextFormatting;
class TextEndOfLine extends \Avalonia\Media\TextFormatting\TextRun
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
	 * @param \System\Int32|int $textSourceLength
	 */
	public function __construct($textSourceLength){}
}