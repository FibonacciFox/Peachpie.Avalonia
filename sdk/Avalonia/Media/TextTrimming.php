<?php
namespace Avalonia\Media;
/**
 */
class TextTrimming extends \System\Object
{
	/**
	 * @var \System\String
	 * @field
	 */
	protected $DefaultEllipsisChar;
	/**
	 * @var \Avalonia\Media\TextTrimming
	 * @property
	 */
	public readonly $None;
	/**
	 * @var \Avalonia\Media\TextTrimming
	 * @property
	 */
	public readonly $CharacterEllipsis;
	/**
	 * @var \Avalonia\Media\TextTrimming
	 * @property
	 */
	public readonly $WordEllipsis;
	/**
	 * @var \Avalonia\Media\TextTrimming
	 * @property
	 */
	public readonly $PrefixCharacterEllipsis;
	/**
	 * @var \Avalonia\Media\TextTrimming
	 * @property
	 */
	public readonly $LeadingCharacterEllipsis;
	/**
	 * @return \Avalonia\Media\TextTrimming
	 */
	public static function get_None(){}
	/**
	 * @return \Avalonia\Media\TextTrimming
	 */
	public static function get_CharacterEllipsis(){}
	/**
	 * @return \Avalonia\Media\TextTrimming
	 */
	public static function get_WordEllipsis(){}
	/**
	 * @return \Avalonia\Media\TextTrimming
	 */
	public static function get_PrefixCharacterEllipsis(){}
	/**
	 * @return \Avalonia\Media\TextTrimming
	 */
	public static function get_LeadingCharacterEllipsis(){}
	/**
	 * @param \Avalonia\Media\TextCollapsingCreateInfo $createInfo
	 * @return \Avalonia\Media\TextFormatting\TextCollapsingProperties
	 */
	public  function CreateCollapsingProperties($createInfo){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Media\TextTrimming
	 */
	public static function Parse($s){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
