<?php
namespace Avalonia\Media\TextFormatting\Unicode;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CodepointOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Media\TextFormatting\Unicode\Codepoint $codepoint
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function op_Implicit_1 ($codepoint){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\TextFormatting\Unicode\Codepoint $codepoint
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function op_Implicit_2 ($codepoint){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $value
	 * @param \System\UInt32 $lowerBound
	 * @param \System\UInt32 $upperBound
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function IsInRangeInclusive_1 ($value, $lowerBound, $upperBound){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\TextFormatting\Unicode\Codepoint $cp
	 * @param \System\UInt32 $lowerBound
	 * @param \System\UInt32 $upperBound
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsInRangeInclusive_2 ($cp, $lowerBound, $upperBound){}
}
final class Codepoint extends \System\ValueType implements
	\System\IEquatable_1
{
	use CodepointOverride;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\Unicode\Codepoint
	 * @since readonly
	 */
	public $ReplacementCodepoint;
	/**
	 * @property
	 * @var \System\UInt32
	 * @since readonly
	 */
	public $Value;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\Unicode\GeneralCategory
	 * @since readonly
	 */
	public $GeneralCategory;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\Unicode\Script
	 * @since readonly
	 */
	public $Script;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\Unicode\BidiClass
	 * @since readonly
	 */
	public $BiDiClass;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\Unicode\BidiPairedBracketType
	 * @since readonly
	 */
	public $PairedBracketType;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\Unicode\LineBreakClass
	 * @since readonly
	 */
	public $LineBreakClass;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\Unicode\GraphemeBreakClass
	 * @since readonly
	 */
	public $GraphemeBreakClass;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsBreakChar;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsWhiteSpace;
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\Codepoint $codePoint
	 * @return \Avalonia\Media\TextFormatting\Unicode\Codepoint
	 */
	protected static function GetCanonicalType($codePoint){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\Codepoint& &$codepoint
	 * @return \System\Boolean|bool
	 */
	public function TryGetPairedBracket(&$codepoint){}
	/**
	 * @uses CodepointOverride::op_Implicit_1 <br>public , args: ($codepoint)<br>
	 * @uses CodepointOverride::op_Implicit_2 <br>public , args: ($codepoint)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|\System\UInt32|mixed|\override
	 */
	#[MethodOverridePublic]function op_Implicit (\override ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $text [generic: System\Char]
	 * @param \System\Int32|int $index
	 * @param \System\Int32& &$count
	 * @return \Avalonia\Media\TextFormatting\Unicode\Codepoint
	 */
	public static function ReadAt($text, $index, &$count){}
	/**
	 * @uses CodepointOverride::IsInRangeInclusive_1 <br>private , args: ($value, $lowerBound, $upperBound)<br>
	 * @uses CodepointOverride::IsInRangeInclusive_2 <br>public , args: ($cp, $lowerBound, $upperBound)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsInRangeInclusive (\override ...$args){}
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\Codepoint $left
	 * @param \Avalonia\Media\TextFormatting\Unicode\Codepoint $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\Codepoint $left
	 * @param \Avalonia\Media\TextFormatting\Unicode\Codepoint $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\UInt32 $value
	 */
	public function __construct($value){}
}