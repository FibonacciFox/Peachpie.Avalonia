<?php
namespace Avalonia\Media\TextFormatting\Unicode;
/**
 */
class UnicodeData extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $CATEGORY_BITS;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $SCRIPT_BITS;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $LINEBREAK_BITS;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $BIDIPAIREDBRACKED_BITS;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $BIDIPAIREDBRACKEDTYPE_BITS;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $BIDICLASS_BITS;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $SCRIPT_SHIFT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $LINEBREAK_SHIFT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $BIDIPAIREDBRACKEDTYPE_SHIFT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $BIDICLASS_SHIFT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $CATEGORY_MASK;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $SCRIPT_MASK;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $LINEBREAK_MASK;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $BIDIPAIREDBRACKED_MASK;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $BIDIPAIREDBRACKEDTYPE_MASK;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $BIDICLASS_MASK;
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
