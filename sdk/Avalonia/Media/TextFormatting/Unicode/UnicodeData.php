<?php
namespace Avalonia\Media\TextFormatting\Unicode;
/**
 */
class UnicodeData extends \System\Object
{
	/**
	 * @param \System\UInt32 $codepoint
	 * @return \Avalonia\Media\TextFormatting\Unicode\GeneralCategory
	 */
	public static function GetGeneralCategory($codepoint){}
	/**
	 * @param \System\UInt32 $codepoint
	 * @return \Avalonia\Media\TextFormatting\Unicode\Script
	 */
	public static function GetScript($codepoint){}
	/**
	 * @param \System\UInt32 $codepoint
	 * @return \Avalonia\Media\TextFormatting\Unicode\BidiClass
	 */
	public static function GetBiDiClass($codepoint){}
	/**
	 * @param \System\UInt32 $codepoint
	 * @return \Avalonia\Media\TextFormatting\Unicode\BidiPairedBracketType
	 */
	public static function GetBiDiPairedBracketType($codepoint){}
	/**
	 * @param \System\UInt32 $codepoint
	 * @return \Avalonia\Media\TextFormatting\Unicode\Codepoint
	 */
	public static function GetBiDiPairedBracket($codepoint){}
	/**
	 * @param \System\UInt32 $codepoint
	 * @return \Avalonia\Media\TextFormatting\Unicode\LineBreakClass
	 */
	public static function GetLineBreakClass($codepoint){}
	/**
	 * @param \System\UInt32 $codepoint
	 * @return \Avalonia\Media\TextFormatting\Unicode\GraphemeBreakClass
	 */
	public static function GetGraphemeClusterBreak($codepoint){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
