<?php
namespace Avalonia\Media\TextFormatting;
class TextRun extends \System\Object
{

	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const DefaultTextSourceLength = '1';
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

}