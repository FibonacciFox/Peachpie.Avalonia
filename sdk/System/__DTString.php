<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __DTStringMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function Match_1($str){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function Match_2($ch){}
}
/**
 */
class __DTString extends \System\ValueType
{
	/**
	 * @var \System\ReadOnlySpan_1[System\Char]
	 * @field
	 */
	protected $Value;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $Index;
	/**
	 * @var \System\Char
	 * @field
	 */
	protected $m_current;
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_Length(){}
	/**
	 * @return \System\Globalization\CompareInfo
	 */
	protected  function get_CompareInfo(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function GetNext(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function AtEnd(){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Boolean
	 */
	protected  function Advance($count){}
	/**
	 * @param \System\TokenType& $tokenType
	 * @param \System\Int32& $tokenValue
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @return \System\Void|void
	 */
	protected  function GetRegularToken($tokenType, $tokenValue, $dtfi){}
	/**
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\Int32& $indexBeforeSeparator
	 * @param \System\Char& $charBeforeSeparator
	 * @return \System\TokenType
	 */
	protected  function GetSeparatorToken($dtfi, $indexBeforeSeparator, $charBeforeSeparator){}
	/**
	 * @param \System\String|string $target
	 * @return \System\Boolean
	 */
	protected  function MatchSpecifiedWord($target){}
	/**
	 * @param \System\String|string $target
	 * @param \System\Boolean $checkWordBoundary
	 * @param \System\Int32& $matchLength
	 * @return \System\Boolean
	 */
	protected  function MatchSpecifiedWords($target, $checkWordBoundary, $matchLength){}
	/**
	 * @uses __DTStringMethodsOverride::Match_1 ($str)
	 * @uses __DTStringMethodsOverride::Match_2 ($ch)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Match(mixed ...$args){}
	/**
	 * @param \System\String[] $words
	 * @param \System\Int32& $maxMatchStrLen
	 * @return \System\Int32|int
	 */
	protected  function MatchLongestWords($words, $maxMatchStrLen){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function GetRepeatCount(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function GetNextDigit(){}
	/**
	 * @return \System\Char
	 */
	protected  function GetChar(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function GetDigit(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function SkipWhiteSpaces(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function SkipWhiteSpaceAndRtlMarkCurrent(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function TrimTail(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function RemoveTrailingInQuoteSpaces(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function RemoveLeadingInQuoteSpaces(){}
	/**
	 * @return \System\DTSubString
	 */
	protected  function GetSubString(){}
	/**
	 * @param \System\DTSubString $sub
	 * @return \System\Void|void
	 */
	protected  function ConsumeSubString($sub){}
}
