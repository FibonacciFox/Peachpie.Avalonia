<?php
namespace Avalonia\Media\TextFormatting\Unicode;
/**
 */
class LineBreakEnumerator extends \System\ValueType
{
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\LineBreak& $lineBreak
	 * @return \System\Boolean
	 */
	public  function MoveNext($lineBreak){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\Codepoint $cp
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MapClass($cp){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\LineBreakClass $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MapFirst($c){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\LineBreakClass $cls
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsAlphaNumeric($cls){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\LineBreakClass $cls
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsPrefixPostfixNumericOrSpace($cls){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\LineBreakClass $cls
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsPrefixPostfixNumeric($cls){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\LineBreakClass $cls
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsClosePunctuationOrParenthesis($cls){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\LineBreakClass $cls
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsClosePunctuationOrInfixNumericOrBreakSymbols($cls){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\LineBreakClass $cls
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsSpaceOrWordJoinerOrAlphabetic($cls){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\LineBreakClass $cls
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsMandatoryBreakOrLineFeedOrCarriageReturn($cls){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PeekNextCharClass(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NextCharClass(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetSimpleBreak(){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\LineBreakClass $lastClass
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPairTableBreak($lastClass){}
	/**
	 * @param \System\Int32|int $from
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FindPriorNonWhitespace($from){}
}
