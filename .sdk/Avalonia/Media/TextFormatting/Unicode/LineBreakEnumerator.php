<?php
namespace Avalonia\Media\TextFormatting\Unicode;
final class LineBreakEnumerator extends \System\ValueType
{


	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\LineBreak& &$lineBreak
	 * @return \System\Boolean|bool
	 */
	public function MoveNext(&$lineBreak){}
	private static function MapClass($cp){}
	private static function MapFirst($c){}
	private static function IsAlphaNumeric($cls){}
	private static function IsPrefixPostfixNumericOrSpace($cls){}
	private static function IsPrefixPostfixNumeric($cls){}
	private static function IsClosePunctuationOrParenthesis($cls){}
	private static function IsClosePunctuationOrInfixNumericOrBreakSymbols($cls){}
	private static function IsSpaceOrWordJoinerOrAlphabetic($cls){}
	private static function IsMandatoryBreakOrLineFeedOrCarriageReturn($cls){}
	private function PeekNextCharClass(){}
	private function NextCharClass(){}
	private function GetSimpleBreak(){}
	private function GetPairTableBreak($lastClass){}
	private function FindPriorNonWhitespace($from){}
	/**
	 * @param \System\ReadOnlySpan_1 $text [generic: System\Char]
	 */
	public function __construct($text){}
}