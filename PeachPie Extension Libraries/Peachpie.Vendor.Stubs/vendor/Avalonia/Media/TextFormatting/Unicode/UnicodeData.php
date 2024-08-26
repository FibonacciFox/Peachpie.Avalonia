<?php
namespace Avalonia\Media\TextFormatting\Unicode;
class UnicodeData extends \System\Object
{
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const CATEGORY_BITS = '6';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const SCRIPT_BITS = '8';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const LINEBREAK_BITS = '6';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const BIDIPAIREDBRACKED_BITS = '16';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const BIDIPAIREDBRACKEDTYPE_BITS = '2';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const BIDICLASS_BITS = '5';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const SCRIPT_SHIFT = '6';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const LINEBREAK_SHIFT = '14';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const BIDIPAIREDBRACKEDTYPE_SHIFT = '16';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const BIDICLASS_SHIFT = '18';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const CATEGORY_MASK = '63';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const SCRIPT_MASK = '255';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const LINEBREAK_MASK = '63';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const BIDIPAIREDBRACKED_MASK = '65535';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const BIDIPAIREDBRACKEDTYPE_MASK = '3';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const BIDICLASS_MASK = '31';
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
}