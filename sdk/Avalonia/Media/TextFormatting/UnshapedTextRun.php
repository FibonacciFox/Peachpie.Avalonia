<?php
namespace Avalonia\Media\TextFormatting;
/**
 */
class UnshapedTextRun extends \Avalonia\Media\TextFormatting\TextRun
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
	 * @var \System\SByte
	 * @property
	 */
	public readonly $BidiLevel;
	/**
	 * @return \System\SByte
	 */
	public  function get_BidiLevel(){}
}
