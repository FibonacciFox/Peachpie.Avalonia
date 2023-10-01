<?php
namespace Avalonia\Media\TextFormatting\Unicode;
/**
 */
class PropertyValueAliasHelper extends \System\Object
{
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\Script $script
	 * @return \System\String|string
	 */
	public static function GetTag($script){}
	/**
	 * @param \System\String|string $tag
	 * @return \Avalonia\Media\TextFormatting\Unicode\Script
	 */
	public static function GetScript($tag){}
	/**
	 * @param \System\String|string $tag
	 * @return \Avalonia\Media\TextFormatting\Unicode\GeneralCategory
	 */
	public static function GetGeneralCategory($tag){}
	/**
	 * @param \System\String|string $tag
	 * @return \Avalonia\Media\TextFormatting\Unicode\LineBreakClass
	 */
	public static function GetLineBreakClass($tag){}
	/**
	 * @param \System\String|string $tag
	 * @return \Avalonia\Media\TextFormatting\Unicode\BidiPairedBracketType
	 */
	public static function GetBidiPairedBracketType($tag){}
	/**
	 * @param \System\String|string $tag
	 * @return \Avalonia\Media\TextFormatting\Unicode\BidiClass
	 */
	public static function GetBidiClass($tag){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
