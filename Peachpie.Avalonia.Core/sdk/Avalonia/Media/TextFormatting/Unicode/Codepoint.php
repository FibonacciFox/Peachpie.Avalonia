<?php
namespace Avalonia\Media\TextFormatting\Unicode;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CodepointMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function op_Implicit_1($codepoint){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function op_Implicit_2($codepoint){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function IsInRangeInclusive_1($value, $lowerBound, $upperBound){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsInRangeInclusive_2($cp, $lowerBound, $upperBound){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
}
/**
 */
class Codepoint extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @return \Avalonia\Media\TextFormatting\Unicode\Codepoint
	 */
	public static function get_ReplacementCodepoint(){}
	/**
	 * @return \System\UInt32
	 */
	public  function get_Value(){}
	/**
	 * @return \Avalonia\Media\TextFormatting\Unicode\GeneralCategory
	 */
	public  function get_GeneralCategory(){}
	/**
	 * @return \Avalonia\Media\TextFormatting\Unicode\Script
	 */
	public  function get_Script(){}
	/**
	 * @return \Avalonia\Media\TextFormatting\Unicode\BidiClass
	 */
	public  function get_BiDiClass(){}
	/**
	 * @return \Avalonia\Media\TextFormatting\Unicode\BidiPairedBracketType
	 */
	public  function get_PairedBracketType(){}
	/**
	 * @return \Avalonia\Media\TextFormatting\Unicode\LineBreakClass
	 */
	public  function get_LineBreakClass(){}
	/**
	 * @return \Avalonia\Media\TextFormatting\Unicode\GraphemeBreakClass
	 */
	public  function get_GraphemeBreakClass(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsBreakChar(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsWhiteSpace(){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\Codepoint $codePoint
	 * @return \Avalonia\Media\TextFormatting\Unicode\Codepoint
	 */
	protected static function GetCanonicalType($codePoint){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\Codepoint& $codepoint
	 * @return \System\Boolean
	 */
	public  function TryGetPairedBracket($codepoint){}
	/**
	 * @uses CodepointMethodsOverride::op_Implicit_1 ($codepoint)
	 * @uses CodepointMethodsOverride::op_Implicit_2 ($codepoint)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Implicit(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $text
	 * @param \System\Int32|int $index
	 * @param \System\Int32& $count
	 * @return \Avalonia\Media\TextFormatting\Unicode\Codepoint
	 */
	public static function ReadAt($text, $index, $count){}
	/**
	 * @uses CodepointMethodsOverride::IsInRangeInclusive_1 ($value, $lowerBound, $upperBound)
	 * @uses CodepointMethodsOverride::IsInRangeInclusive_2 ($cp, $lowerBound, $upperBound)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsInRangeInclusive(mixed ...$args){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\Codepoint $left
	 * @param \Avalonia\Media\TextFormatting\Unicode\Codepoint $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\Codepoint $left
	 * @param \Avalonia\Media\TextFormatting\Unicode\Codepoint $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses CodepointMethodsOverride::Equals_1 ($obj)
	 * @uses CodepointMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
