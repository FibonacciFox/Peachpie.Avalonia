<?php
namespace Avalonia\Media\TextFormatting;
/**
 */
class TextRun extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $DefaultTextSourceLength;
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
	 * @return \System\Int32|int
	 */
	public  function get_Length(){}
	/**
	 * @return \System\ReadOnlyMemory_1
	 */
	public  function get_Text(){}
	/**
	 * @return \Avalonia\Media\TextFormatting\TextRunProperties
	 */
	public  function get_Properties(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
