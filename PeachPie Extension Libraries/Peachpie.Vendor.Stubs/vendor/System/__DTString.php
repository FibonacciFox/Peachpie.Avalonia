<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait __DTStringOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $str
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected function Match_1 ($str){}
	/**
	 * @deprecated
	 * @param \System\Char $ch
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected function Match_2 ($ch){}
}
final class __DTString extends \System\ValueType
{
	use __DTStringOverride;
	/**
	 * @field
	 * @var \System\ReadOnlySpan_1[System\Char]
	 */
	protected $Value;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $Index;
	/**
	 * @field
	 * @var \System\Char
	 */
	protected $m_current;
	/**
	 * @return \System\Boolean|bool
	 */
	protected function GetNext(){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected function AtEnd(){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Boolean|bool
	 */
	protected function Advance($count){}
	/**
	 * @param \System\TokenType& &$tokenType
	 * @param \System\Int32& &$tokenValue
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @return \System\Void|void
	 */
	protected function GetRegularToken(&$tokenType, &$tokenValue, $dtfi){}
	/**
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\Int32& &$indexBeforeSeparator
	 * @param \System\Char& &$charBeforeSeparator
	 * @return \System\TokenType
	 */
	protected function GetSeparatorToken($dtfi, &$indexBeforeSeparator, &$charBeforeSeparator){}
	/**
	 * @param \System\String|string $target
	 * @return \System\Boolean|bool
	 */
	protected function MatchSpecifiedWord($target){}
	/**
	 * @param \System\String|string $target
	 * @param \System\Boolean|bool $checkWordBoundary
	 * @param \System\Int32& $matchLength
	 * @return \System\Boolean|bool
	 */
	protected function MatchSpecifiedWords($target, $checkWordBoundary, $matchLength){}
	/**
	 * @uses __DTStringOverride::Match_1 <br>protected , args: ($str)<br>
	 * @uses __DTStringOverride::Match_2 <br>protected , args: ($ch)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function Match (\override ...$args){}
	/**
	 * @param \System\String $words
	 * @param \System\Int32& $maxMatchStrLen
	 * @return \System\Int32|int
	 */
	protected function MatchLongestWords($words, $maxMatchStrLen){}
	/**
	 * @return \System\Int32|int
	 */
	protected function GetRepeatCount(){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected function GetNextDigit(){}
	/**
	 * @return \System\Char
	 */
	protected function GetChar(){}
	/**
	 * @return \System\Int32|int
	 */
	protected function GetDigit(){}
	/**
	 * @return \System\Void|void
	 */
	protected function SkipWhiteSpaces(){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected function SkipWhiteSpaceAndRtlMarkCurrent(){}
	/**
	 * @return \System\Void|void
	 */
	protected function TrimTail(){}
	/**
	 * @return \System\Void|void
	 */
	protected function RemoveTrailingInQuoteSpaces(){}
	/**
	 * @return \System\Void|void
	 */
	protected function RemoveLeadingInQuoteSpaces(){}
	/**
	 * @return \System\DTSubString
	 */
	protected function GetSubString(){}
	/**
	 * @param \System\DTSubString $sub
	 * @return \System\Void|void
	 */
	protected function ConsumeSubString($sub){}
}