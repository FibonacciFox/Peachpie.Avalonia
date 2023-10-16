<?php
namespace System\Globalization;
/**
 */
class TimeSpanResult extends \System\ValueType
{
	/**
	 * @var \System\TimeSpan
	 * @field
	 */
	protected $parsedTimeSpan;
	/**
	 * @return \System\Boolean
	 */
	protected  function SetNoFormatSpecifierFailure(){}
	/**
	 * @param \System\Char $failingCharacter
	 * @return \System\Boolean
	 */
	protected  function SetBadQuoteFailure($failingCharacter){}
	/**
	 * @return \System\Boolean
	 */
	protected  function SetInvalidStringFailure(){}
	/**
	 * @param \System\String|string $argumentName
	 * @return \System\Boolean
	 */
	protected  function SetArgumentNullFailure($argumentName){}
	/**
	 * @return \System\Boolean
	 */
	protected  function SetOverflowFailure(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function SetBadTimeSpanFailure(){}
	/**
	 * @param \System\Nullable_1 $formatSpecifierCharacter
	 * @return \System\Boolean
	 */
	protected  function SetBadFormatSpecifierFailure($formatSpecifierCharacter){}
}
