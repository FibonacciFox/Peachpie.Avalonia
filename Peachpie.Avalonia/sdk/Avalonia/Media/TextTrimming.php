<?php
namespace Avalonia\Media;
/**
 */
class TextTrimming extends \System\Object
{
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
